<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

		\App\Task::truncate(); //clear out the entire Tasks table

		foreach(range(1, 5000) as $index) // creates 30 fakes
		{
			\App\Task::create([
				'name' => $faker->sentence,
				'user_id' => $faker->numberBetween(1, 10),
				'description' => $faker->paragraph(4),
			]);
		}
    }
}
