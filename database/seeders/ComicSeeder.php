<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){

            $comic = new Comic();
            $comic->title = $faker->word();
            $comic->description = $faker->text();
            $comic->thumb = $faker->word();
            $comic->cover_image = $faker->word();
            $comic->price = $faker->randomNumber(6,true);
            $comic->series = $faker->paragraph();
            $comic->sale_date = $faker->date();
            $comic->type = $faker->word();
            $comic->artists = $faker->text();
            $comic->writers = $faker->text();

            $comic->save();
        }
    }
}
