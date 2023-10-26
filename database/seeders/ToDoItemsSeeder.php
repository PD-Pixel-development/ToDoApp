<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ToDoItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('nl_NL');

        $count = $this->command->ask('How many rows do you want to seed?', 10);

        foreach (range(1, $count) as $index) {
            DB::table('todo')->insert([
                'todoitem' => $faker->sentence(5),
                'deadline' => $faker->dateTimeBetween('now', '+7 days'),
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
