<?php

use Illuminate\Database\Seeder;
use App\Genre;
class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $genres = [           
        'Country',
        'Reggea',
        'Blues',
        'Electronic Music',
        'Dance',
        'Rock',
        'Dubstep',
        'Soul',
        'Jazz',
        'Techno',
        'Disco',
        'Reggeaton',
        'Trap',
        'Highlife',
        'Pop',
        'RnB',
        'Afro',
        'Hiphop',
        ];


        foreach ($genres as $genre) {
             Genre::create([
                 'genre' => $genre,
             
                    ]);
        }
    }
}
