<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        Model::unguard();

       //
        $this->call(FilmTableSeeder::class);

       $this->call(CommentsTableSeeder::class);

        $this->call (FilmCategoriesTableSeeder::class);

        Model::reguard();
    }


}
