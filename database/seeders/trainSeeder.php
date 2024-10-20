<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// models
use App\Models\train;
class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        train::truncate();
        for ($i=0; $i < 10; $i++) {
            $train = new train();
            $train->company = fake()->company();
            $train->starting_station = fake()->city();
            $train->arrival_station = fake()->city();
            $train->departure = fake()->dateTimeBetween('now', '+1 days');
            $train->arrival = fake()->dateTimeBetween('now', '+1 days');
            $train->train_number = rand(1, 100);
            $train->cabs_number = rand(1, 10);
            $train->on_time = fake()->boolean(70);
            $train->cancelled = fake()->boolean(20);
            $train->save();
        }
    }
}
