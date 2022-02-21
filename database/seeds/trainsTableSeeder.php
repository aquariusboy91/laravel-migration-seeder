<?php

use Faker\Generator as Faker;

use App\Trains;
use Illuminate\Database\Seeder;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
    //  * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $newTrain = new Trains();
            $newTrain -> Azienda = $faker -> words(4, true);
            $newTrains -> Stazione_di_partenza = $faker -> words(7,true);
            $newTrains -> Stazione_di_arrivo = $faker -> words(7, true);
            $newTrains -> Orario_di_partenza = $faker -> time();
            $newTrains -> Orario_di_arrivo = $faker -> time();
            $newTrain -> Codice_treno = $faker -> uuid();
            $newTrain -> Numero_carrozze = $faker -> randomDigit();
            $newTrain -> In_orario = $faker -> numberBetween();
            $newTrain -> Cancellato = $faker -> numberBetween();
            $newTrain -> save();
        }
    }
}
