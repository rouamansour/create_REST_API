<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class participantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        DB::table("participants")->insert([
            "num_passeport" => $faker->text,
            "nom" => $faker->name(),
            "prenom" => $faker->text,
            "pays" => $faker->text,
            "tel" => $faker->PhoneNumber(),
            "email" => $faker->unique()->safeEmail,
            "date_naiss" => $faker->dateTime(),
            "date_inscription" => $faker->date(),
            "reference_vehicule" => $faker->text,
            "rang" => $faker->text,
]);
    }
}
