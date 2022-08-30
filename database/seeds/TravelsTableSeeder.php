<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $travel_availability = [
            'Non disponibile',
            'Disponibile',
        ];

        // Creare un x numero di righe nella tabella travel
        for ($i=0; $i < 6; $i++) { 
            // Creare una nuova riga
            $new_travel = new Travel();
            // popolare la riga
            $new_travel->destination = $faker->country();

            $new_travel->date = $faker->date('Y_m_d');

            $new_travel->duration = rand(1, 15);

            $new_travel->description = $faker->paragraphs(5, true);

            $new_travel->availability = $travel_availability[rand(0,1)];

            $new_travel->price = $faker->randomFloat(2, 100, 99999);

            // salvare riga
            $new_travel->save();
        }
    }
}
