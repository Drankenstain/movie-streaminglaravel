<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert(
            [
                [
                    'title' => 'Game of Throne',
                    'photo' => 'images\poster\GAME OF THRONES.jpeg',
                    'publish_date' => '2011-04-17',
                    'description' => 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.',
                    'genre_id' => 2
                ],
                [
                    'title' => 'Interstellar',
                    'photo' => 'images\poster\Interstellar.jpeg',
                    'publish_date' => '2014-11-07',
                    'description' => 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.',
                    'genre_id' => 1
                ],
                [
                    'title' => 'Lord of the Ring',
                    'photo' => 'images\poster\LOTR.jpeg',
                    'publish_date' => '2001-12-19',
                    'description' => 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.',
                    'genre_id' => 2
                ],
                [
                    'title' => 'The Godfather',
                    'photo' => 'images\poster\The Godfather.jpeg',
                    'publish_date' => '1972-03-24',
                    'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                    'genre_id' => 3
                ],
            ]
        );
    }
}
