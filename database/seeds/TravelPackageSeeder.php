<?php

use App\Models\TravelPackage;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $_travel = new TravelPackage();
            $_travel->name = $faker->text(20);
            $_travel->destination = $faker->country();
            $_travel->date = $faker->date();
            $_travel->save();
        }
    }
}
