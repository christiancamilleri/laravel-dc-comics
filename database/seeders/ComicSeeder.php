<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $item) {
            $newItem = new Comic();

            $newItem->title = $item['title'];
            $newItem->description = $item['description'];
            $newItem->thumb = $item['thumb'];
            $newItem->price = $item['price'];
            $newItem->price = $item['price'];
            $newItem->series = $item['series'];
            $newItem->sale_date = $item['sale_date'];
            $newItem->type = $item['type'];
            $newItem->artists = implode(',', $item['artists']);
            $newItem->writers = implode(',', $item['writers']);

            $newItem->save();
        }
    }
}
