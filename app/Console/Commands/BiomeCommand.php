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

            if( ( $handle = fopen( $file_path, 'r' ) ) !== FALSE ) {
                $rows = 1;

                while( ( $data = fgetcsv( $handle, 0, ',' ) ) !== FALSE )
                {
                    if( $rows == 1 )
                    {
                        $fields = [];

                        foreach ($data as $key => $val) $fields[$key] = $val;
                    }

                    else
                    {
                        $row = [];

                        foreach( $fields as $key => $val ) $row[$val] = trim( $data[$key] );

                        Biome::create([
                            'name' => $row['BIOME'],
                            'short_name' => $row['SHORT_BIOME']
                        ]);
                    }

                    $rows++;
                }
            }
        }
	}

}
