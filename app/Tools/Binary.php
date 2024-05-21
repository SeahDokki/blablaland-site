<?php

namespace App\Tools;

class Binary
{
    public string $bytes = "";
    public int $bitLength = 0;
    public int $bitPosition = 0;
    public array $powList = [];

    function __construct()
    {
        $args = func_get_args();
        foreach (range(0, 33) as $i) $this->powList[] = (int)pow(2, $i);
        if (count($args) == 1) {
            $this->readMessage($args[0]);
        }
        elseif (count($args)) {
            $this->bitWriteUnsignedInt(GlobalProperties::BIT_TYPE, $args[0]);
            $this->bitWriteUnsignedInt(GlobalProperties::BIT_STYPE, $args[1]);
        }
    }

    /**
     * @param $data
     * @return void
     */
    function write($data)
    {
        $this->bytes .= $data;
    }

    /**
     * @param $data
     * @return void
     */
    function readMessage($data): void
    {
        $data = str_split($data);
        $ide = [];
        $count = 0;
        foreach ($data as $id => $char) {
            if (!in_array($id, $ide)) {
                ++$count;
                if ($char == "\x01") {
                    if (@$data[$id + 1] == "\x02") $this->bytes .= "\x01";
                    else $this->bytes .= "\x00";
                    $ide[] = $id + 1;
                }
                else $this->bytes .= $char;
            }
        }
        $this->bitLength += ($count * 8);
    }

    /**
     * @return string
     */
    function exportMessage(): string
    {
        $data = "";
        foreach (str_split($this->bytes) as $char) {
            if ($char == "\x00") $data .= "\x01\x03";
            elseif ($char == "\x01") $data .= "\x01\x02";
            else $data .= $char;
        }
        return $data;
    }

    /**
     * @param $data
     * @return void
     */
    function bitWriteString($data): void
    {
        if (mb_detect_encoding($data, mb_detect_order(), true)) {
            $data = utf8_decode($data);
        }
        $loc1 = min(strlen($data) , $this->powList[16] - 1);
        $this->bitWriteUnsignedInt(16, $loc1);
        $loc2 = 0;
        while ($loc2 < $loc1) {
            $loc3 = ord($data[$loc2]);
            $this->bitWriteUnsignedInt(8, $loc3);
            $loc2 += 1;
        }
    }

    /**
     * @param $param1
     * @param $param2
     * @return void
     */
    function bitWriteSignedInt($param1, $param2): void
    {
        $this->bitWriteBoolean($param2 >= 0);
        $this->bitWriteUnsignedInt($param1 - 1, abs($param2));
    }

    /**
     * @param $param1
     * @param $param2
     * @return void
     */
    function bitWriteUnsignedInt($param1, $param2): void
    {
        $param2 = min($this->powList[$param1] - 1, $param2);
        while ($param1 > 0)  {
            $loc1 = $this->bitLength % 8;
            if ($loc1 == 0) $this->bytes .= "\x00";
            $loc2 = 8 - $loc1;
            $loc3 = min($loc2, $param1);
            $loc4 = $this->rshift($param2, $param1 - $loc3);
            $loc5 = $this->powList[$loc2 - $loc3];
            $loc6 = ord($this->socket(false));
            $this->bytes = $this->socket(true) . chr($loc6 + $loc4 * $loc5);
            $param2 = $param2 - $loc4 * $this->powList[$param1 - $loc3];
            $param1 -= $loc3;
            $this->bitLength += $loc3;
        }
    }

    /**
     * @param $bytes
     * @return mixed
     */
    function bitWriteBoolean($bytes): mixed
    {
        $loc1 = $this->bitLength % 8;
        $loc2 = $this->powList[7 - $loc1];
        if ($loc1 == 0) $this->bytes .= "\x00";
        if ($bytes) {
            $loc3 = ord($this->socket(false));
            $loc4 = $this->socket(true);
            $this->bytes = $loc4 . chr($loc3 + $loc2);
        }
        $this->bitLength += 1;
        return $bytes;
    }

    /**
     * @param $binary
     * @return void
     */
    function bitWriteBinaryData($binary): void
    {
        if (!isset($binary->bitLength)) return;
        $loc1 = min($binary->bitLength, $this->powList[16] - 1);
        $this->bitWriteUnsignedInt(16, $loc1);
        $binary->bitPosition = 0;
        $loc1 = $binary->bitLength;
        while ($loc1) {
            $loc2 = min(8, $loc1);
            $loc3 = $binary->bitReadUnsignedInt($loc2);
            $this->bitWriteUnsignedInt($loc2, $loc3);
            $loc1 -= $loc2;
        }
    }

    /**
     * @return string
     */
    function bitReadString(): string
    {
        $result = "";
        $char = $this->bitReadUnsignedInt(16);
        $count = 0;
        while ($count < $char) {
            $result .= chr($this->bitReadUnsignedInt(8));
            $count += 1;
        }
        return $result;
    }

    /**
     * @return false|int
     */
    function bitReadBoolean(): bool|int
    {
        if ($this->bitPosition == $this->bitLength) return False;
        $loc1 = (int)floor($this->bitPosition / 8);
        $loc2 = $this->bitPosition % 8;
        $this->bitPosition += 1;
        return ord(@$this->bytes[$loc1]) >> 7 - $loc2 & 1 == 1;
    }

    /**
     * @param $data
     * @return float|int
     */
    function bitReadSignedInt($data): float|int
    {
        $param = - 1;
        if ($this->bitReadBoolean()) $param = 1;
        return $this->bitReadUnsignedInt($data - 1) * $param;
    }

    /**
     * @return Binary
     */
    function bitReadBinaryData(): Binary
    {
        $data = $this->bitReadUnsignedInt(16);
        $binary = new Binary();
        $loc1 = $this->bitPosition;
        while ($this->bitPosition - $loc1 < $data) {
            if ($this->bitPosition == $this->bitLength) return $binary;
            $loc2 = min(8, $data - $this->bitPosition + $loc1);
            $binary->bitWriteUnsignedInt($loc2, $this->bitReadUnsignedInt($loc2));
        }
        return $binary;
    }

    /**
     * @param $data
     * @return float|int|mixed
     */
    function bitReadUnsignedInt($data): mixed
    {
        if ((boolean)$this->bitPosition + $data > $this->bitLength) {
            $this->bitPosition = $this->bitLength;
            return 0;
        }
        $loc1 = 0;
        while ($data > 0)  {
            $loc2 = (int)floor($this->bitPosition / 8);
            $loc3 = $this->bitPosition % 8;
            $loc4 = 8 - $loc3;
            $loc5 = min($loc4, $data);
            $loc6 = isset($this->bytes[$loc2]) ? $this->bytes[$loc2] : '';
            $loc6 = ord($loc6) >> $loc4 - $loc5 & $this->powList[$loc5] - 1;
            $loc1 = $loc1 + $loc6 * $this->powList[$data - $loc5];
            $data -= $loc5;
            $this->bitPosition += $loc5;
        }
        return $loc1;
    }

    /**
     * @param $param1
     * @param $param2
     * @return int
     */
    function rshift($param1, $param2): int
    {
        return (int)floor($param1 / $this->powList[$param2]);
    }

    /**
     * @param $data
     * @return string
     */
    function socket($data): string
    {
        if ($data) {
            $a = str_split($this->bytes);
            array_pop($a);
            return implode('', $a);
        }
        return substr($this->bytes, -1);
    }
}
