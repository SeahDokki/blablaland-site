<?php

namespace App\Console\Commands;

use App\Models\Player;
use App\Models\Power;
use Illuminate\Console\Command;

class ExperienceDailyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:experience-daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Conversion of daily experience';

    /**
     * @return void
     */
    public function handle()
    {
        // Retrieve players with non-zero daily experience
        $players = Player::where('experience_daily', '>', 0)->get();
        $this->output->progressStart($players->count());

        foreach ($players as $player) {
            // Calculate the new total blabillon of the player by adding 70% of their daily experience to their current blabillon total
            $newBlabillon = $player['blabillon'] + floor($player['experience_daily'] * 0.6);
            // Reset the player's daily experience to 0
            $player['experience_daily'] = 0;
            // Update the player's blabillon total
            $player['blabillon'] = $newBlabillon;
            $player->save();

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
        $this->comment("Conversion of daily experience for " . $players->count() . " users!");
    }
}
