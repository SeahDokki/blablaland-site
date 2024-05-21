<?php

namespace App\Tools;

class Network
{
    static function getIP()
    {
        if (!empty($_SERVER["CF-Connecting-IP"]))
            $ip = $_SERVER["CF-Connecting-IP"];
        else if (!empty($_SERVER["HTTP_CF_CONNECTING_IP"]))
            $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
        else if (!empty($_SERVER['HTTP_CLIENT_IP']))
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else
            $ip = $_SERVER['REMOTE_ADDR'];
        return $ip;
    }
}
