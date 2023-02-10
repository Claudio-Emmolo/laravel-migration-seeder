<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->sentence(3, true);
            $newTrain->stazione_partenza = $faker->sentence(5, true);
            $newTrain->stazione_arrivo = $faker->sentence(5, true);
            $newTrain->orario_partenza = $faker->dateTime();
            $newTrain->orario_arrivo = $faker->dateTime();
            $newTrain->codice_treno = $faker->ean8();
            $newTrain->numero_carozza = $faker->randomDigit();
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
