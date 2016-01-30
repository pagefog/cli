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
	protected $description = 'Deploy the local changes to a live site';
	
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
