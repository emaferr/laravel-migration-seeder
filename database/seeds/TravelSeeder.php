<?php

use Illuminate\Database\Seeder;

use App\Travel;

use Faker\Generator as Faker;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 

            $travel = new Travel();

            $travel->image_path= $faker-> imageUrl(540, 480, 'Travels', true, true);
            $travel->city=$faker->city();
            $travel->desc= $faker->paragraph();
            $travel->departure= $faker->dateTimeBetween('+0 week' , '+1 week');
            $travel->arrival= $faker->dateTimeBetween('+1 week', '+4 week');
            $travel->price= $faker-> numberBetween(800,3500);
            $travel->save();
        }
    }
}
