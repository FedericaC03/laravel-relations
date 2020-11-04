<?php

use Illuminate\Database\Seeder;
use App\genre;
use Faker\Generator as Faker;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $genreArray = [
        //     'fantasy',
        //     'horror',
        //     'drama',
        //     'comedy',
        //     'action',
        //     'sci-fi',
        // ];

        // foreach ($genreArray as $genre) {

        //     $newGenre = new Genre;
        //     $newGenre-> name = $genre;
        //     $newGenre->save();
        // }

        for ($i = 0; $i < 10; $i++) {

            $newGenre = new Genre;
            
            $newGenre->name = $faker->word;
            $newGenre->save();
        }
    }
}
