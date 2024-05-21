<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class GiveBBLTeamCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:give-bbl-team';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gives BBL to the team (salary)';

    /**
     *
     */
    public function handle(): void
    {
        $count = 0;
        $users = User::where('grade_id', '>', 1)->get();

        $this->output->progressStart($users->count());
        $users->each(function ($user) use (&$count) {
            $salaries = [
                90 => 4000,
                91 => 4000,
                92 => 4000,
                93 => 8000,
                94 => 8000,
                95 => 8000,
                96 => 8000,
                300 => 12000,
                950 => 12000
            ];
            $this->output->progressAdvance();

            if (isset($salary[$user->grade_id])) {
                $user->player->increment('blabillon', $salaries[$user->grade_id]);
                $count++;
            }
        });

        $this->output->progressFinish();
        $this->comment("Give BBL to $count users!");

    }
}
