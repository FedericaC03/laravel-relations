<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorInfo;

class AuthorsInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $authors = Author::all();
        foreach ($authors as $author) {
            $newAuthorInfo = new AuthorInfo;
            $newAuthorInfo-> author_id = $author->id;
            $newAuthorInfo->nationality = $faker->country();
            $newAuthorInfo->bio = $faker->paragraph(5, true);
            if (rand(0,1) == 1) {
                $newAuthorInfo->bio = $faker->imageUrl(300, 200);
                $newAuthorInfo->alive = 1;
            }
            $newAuthorInfo->save();
        }
    }
}
