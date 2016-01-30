<?php namespace Commands\Sites;

use Illuminate\Console\Command;

class DeployCommand extends Command
{
	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'site:deploy';

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
