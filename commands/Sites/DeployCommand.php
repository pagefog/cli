<?php namespace Commands\Sites;

use Illuminate\Console\Command;

class DeployCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'site:deploy';
	
	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Push/deploy the local file changes to a live site.';
	
	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$this->info('This is awesome');
	}
}
