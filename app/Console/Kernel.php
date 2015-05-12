<?php namespace WT\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		'WT\Console\Commands\Inspire',

        /*
        * Load all of our animal datasets in
        */
        'WT\Console\Commands\BiomeCommand',
        'WT\Console\Commands\ClassificationCommand',
        'WT\Console\Commands\OrderCommand',
        'WT\Console\Commands\FamilyCommand'
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule)
	{
		$schedule->command('inspire')
				 ->hourly();
	}

}
