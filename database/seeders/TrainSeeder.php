<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    
    
    public function run(Faker $faker): void
    {
       
    
        $brands = ['Italo', 'Frecciarossa', 'Trenitalia', 'BluTrain' ];
        $cities = ['Roma', 'Milano', 'Bologna', 'Napoli', 'Torino', 'Firenze', 'Ancona', 'L\'Aquila', 'Bari', 'Reggio Calabria'];


        for ($i = 0; $i < 20; $i++) {

            $new_train = new Train();

            $new_train->train_code = $faker->unique()->bothify('??########') ;
            $new_train->brand = $faker->randomElement($brands) ;
            $new_train->departure_station = $faker->randomElement($cities);
            $new_train->departure_time = $faker->dateTimeBetween('-1 week', '+3 weeks');
            $new_train->departure_date = $faker->dateTimeBetween('-1 week', '+3 weeks');
            $new_train->arrival_station = $faker->randomElement($cities);
            $new_train->arrival_time = $faker->dateTimeInInterval($new_train->departure_time, '+12 hours');
            $new_train->arrival_date = $faker->dateTimeBetween('-1 week', '+3 weeks');
            $new_train->carriages = $faker->numberBetween(1,20);
            $new_train->in_time = $faker->boolean();
            $new_train->deleted = $faker->boolean();


            $new_train->save();
    };
}
}
