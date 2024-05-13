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
        $trains = config('db-trains.trains');

        foreach ($trains as $train) {

            $newTrain = new Train();

            $newTrain->company = $train['company'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_id = $train['train_id'];
            $newTrain->vagons_number = $train['vagons_number'];
            $newTrain->is_in_time = $train['is_in_time'];
            $newTrain->is_deleted = $train['is_deleted'];
            $newTrain->save();
        }
    }
}
