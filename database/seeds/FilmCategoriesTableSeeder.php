<?php

use Illuminate\Database\Seeder;

class FilmCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films_categories')->insert([
            'film_id' => '1',
            'category_id' => '1',
        ]);

        DB::table('films_categories')->insert([
            'film_id' => '2',
            'category_id' => '2',
        ]);

        DB::table('films_categories')->insert([
            'film_id' => '3',
            'category_id' => '3',
        ]);

    }
}
