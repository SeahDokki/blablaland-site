<?php

namespace App\Console;

use App\Console\Commands\DeletePowersCommand;
use App\Console\Commands\ExperienceDailyCommand;
use App\Console\Commands\GenerateSitemap;
use App\Console\Commands\GiveBBLTeamCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command(DeletePowersCommand::class)->evenInMaintenanceMode()->daily();
        $schedule->command(ExperienceDailyCommand::class)->evenInMaintenanceMode()->daily();
        $schedule->command(GiveBBLTeamCommand::class)->evenInMaintenanceMode()->lastDayOfMonth();
        $schedule->command(GenerateSitemap::class)->daily();
        $schedule->command('disposable:update')->weekly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
