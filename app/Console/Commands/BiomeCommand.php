<?php namespace WT\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use WT\Models\Biome;

class BiomeCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'biome:load';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Use this command to populate all the biome information into the database.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
        // Here we want to make sure we haven't already run this command.
        $biomes = Biome::get()->count();

        if( $biomes === 0 )
        {
            $file_path = base_path() . '/resources/dataset/biomes.csv';
            $handle    = fopen( $file_path, 'r' );

            while( false !== ( $row = fgetcsv( $handle, 0 ) ) )
            {

            }
        }
	}

}
