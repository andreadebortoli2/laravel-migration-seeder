<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use DateInterval;
use Faker\Generator as Faker;
use DateTime;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        // add data from a fake db in config folder

        /* $trains = config('db-trains.trains');

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
        } */

        for ($i = 0; $i < 20; $i++) {

            $newTrain = new Train();

            $newTrain->company = $faker->word() . 'TRANSP';
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival_time = $faker->dateTimeInInterval($newTrain->departure_time, '+3 hours');
            $newTrain->train_id = $faker->numberBetween(0, 65535);
            $newTrain->vagons_number = $faker->numberBetween(3, 18);
            $newTrain->is_in_time = $faker->boolean();
            $newTrain->is_deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
