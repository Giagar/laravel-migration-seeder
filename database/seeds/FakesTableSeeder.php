<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Fake;

class FakesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i=0; $i < 10; $i++) {
            $fake = new Fake();
            $fake->name = $faker->name();
            $fake->age = rand(1, 100);
            $fake->height = rand(1, 100);
            $fake->save();
        }
    }
}
