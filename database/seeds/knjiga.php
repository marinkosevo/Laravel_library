<?php

use Illuminate\Database\Seeder;

class knjiga extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('knjige')->insert([ //,
                'naslov' => $faker->sentence,
                'autor' => $faker->name,
                'godina' => $faker->year,
                'izdavac' => $faker->word,
                'ISBN' => $faker->numberBetween(1000000000, 9999999999),
                'kolicina' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}
