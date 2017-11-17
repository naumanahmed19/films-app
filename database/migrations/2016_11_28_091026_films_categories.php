<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class FilmsCategories extends Migration
{

 


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films_categories', function(Blueprint $t) {
            $t->integer('film_id');
            $t->integer('category_id');
            $t->primary(['film_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('films_categories');
    }
}
