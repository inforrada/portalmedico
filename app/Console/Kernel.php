<?php

namespace App\Console;

use App\Jobs\MiTrabajoJob;
use Illuminate\Console\Scheduling\Schedule;
use App\Notifications\TareaProgramadaEjecutada;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->job(new MiTrabajoJob ())->daily();
        $schedule->job(new MiTrabajoJob ())->yearlyOn(2,28,'23:59');
        $schedule->job(new MiTrabajoJob ())->every ();
        
        $schedule->job(new MiTrabajoJob ())->cron('* * * * 7');
        
        $schedule->job(new MiTrabajoJob ())->dailyOn (3, '13:30');
        
        

        
       
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
