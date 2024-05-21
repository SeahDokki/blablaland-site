<?php

namespace App\Console\Commands;

use App\Models\Player;
use App\Models\Power;
use Illuminate\Console\Command;

class GivePowersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:give-powers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Give powers';

    /**
     * @return void
     */
    public function handle()
    {
        $players = Player::all();
        $powers = Power::all();

        $this->output->progressStart($players->count());

        foreach ($players as $player) {
            foreach ($powers as $item) {
                if (!$player->powers()->find($item)) {
                    $player->powers()->attach($item, [
                        'quantity' => 999
                    ]);
                } else {
                    $player->powers()->updateExistingPivot($item, [
                        'quantity' => 999
                    ]);
                }
            }
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
        $this->comment("Give " . $powers->count() . " powers for " . $players->count() . " users!");
    }
}
