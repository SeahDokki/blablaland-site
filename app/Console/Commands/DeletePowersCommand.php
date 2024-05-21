<?php

namespace App\Console\Commands;

use App\Enums\PowerType;
use App\Models\Power;
use Illuminate\Console\Command;

class DeletePowersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:delete-powers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Removes users\' powers when the quantity is 0';

    /**
     *
     */
    public function handle(): void
    {
        $count = 0;
        $powers = Power::whereIn('type', [PowerType::Quantity, PowerType::Time])->get();

        $this->output->progressStart($powers->count());

        foreach ($powers as $power) {
            $this->output->progressAdvance();
            $players = $power->players()->whereQuantity(0)->get();
           foreach ($players as $player) {
               $player->powers()->detach($power);
               $count++;
           }
        }
        $this->output->progressFinish();
        $this->comment("Delete $count powers!");

        // Chest Token
        $powers = Power::whereIn('id', [190, 196, 253, 278, 312])->get();
        foreach ($powers as $power) {
            foreach ($power->players()->get() as $player) {
                $player->powers()->detach($power);
            }
        }
    }
}
