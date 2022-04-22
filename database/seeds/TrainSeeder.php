<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       
        
        //Array
        $aziende = ['Italo','Trenord','Trenitalia','Deutsche Bahn','Eurocity','Frecciargento','Intercity Notte'];

        //popolo le proprieta'
        for ($i=0; $i<300; $i++){

            $train = new Train();
            
            $train->azienda = $faker->randomElement($aziende);
            $train->stazione_di_partenza = $faker->word();
            $train->stazione_di_arrivo = $faker->word();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $train->numero_carrozze =$faker->randomNumber(2, false);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            $train->save();
        }
        
        


    }
}
