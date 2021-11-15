<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Travel;
use Faker\Generator as Faker;

class TravelTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for($i = 0; $i < 40; $i++){

            $newTravel = new Travel();

            $newTravel->name = $faker->name();
            $newTravel->price = $faker->randomFloat(2, 0, 299);
            $newTravel->number_of_location = $faker->numberBetween(1,1000);
            $newTravel->how_many_poeple = $faker->numberBetween(1,5);
            $newTravel->end_validity = $faker->dateTimeThisYear('+15 years');
            $newTravel->description = $faker->paragraph(3);
            $newTravel->img_url = $faker->imageUrl(600, 600);
            $newTravel->slug = Str::slug($newTravel->name, '-');

            $newTravel->save();
        }
    }
}