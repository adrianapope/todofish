<?php

use Illuminate\Database\Seeder;

class TableTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

		Task::truncate(); //clear out the entire Tasks table

		foreach(range(1, 30) as $index) // creates 30 fakes
		{
			Task::create([
				'name' => $faker->sentence,
				'description' => $faker->paragraph(4),
			]);
		}

    }
}


