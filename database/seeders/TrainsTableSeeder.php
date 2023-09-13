<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();

        for($i=0; $i<20; $i++){
            $newTrain= new Train();
            $newTrain->company=fake()->company();
            $newTrain->departure_station=fake()->city();
            $newTrain->arrival_station=fake()->city();
            $newTrain->departure_time=fake()->time();
            $newTrain->arrival_time=fake()->time('H:i:s');
            $newTrain->train_code=fake()->regexify('[A-Z]{3}[0-9]{1}[A-Z]{2}[0-9]{2}');
            $newTrain->cart_number=rand(2,30);
            $newTrain->in_time=fake()->boolean();
            $newTrain->canceled=fake()->boolean();
            $newTrain->save();

        }

    }
}
