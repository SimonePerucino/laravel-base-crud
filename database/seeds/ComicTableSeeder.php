<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicList = config("comic");

        foreach ($comicList as $comic) {

            $newComic = new Comic();

            unset($comic['artists']);
            unset($comic['writers']);

            $newComic->fill($comic);

            $newComic->save();
        }
    }
}
