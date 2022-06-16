<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_comic = new Comic();
            $new_comic->title = $faker->sentence(3);
            $new_comic->thumb = $faker->imageUrl(800, 400, 'img', true, 'comics', true, 'jpg');
            $new_comic->description = $faker->paragraphs(1, true);
            $new_comic->cover_img = $faker->imageUrl(800, 400, 'img', true, 'comics', true, 'jpg');
            $new_comic->save();
        }
    }
}
