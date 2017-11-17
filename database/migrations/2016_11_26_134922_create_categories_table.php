<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('categories', function(Blueprint $t) {

            $t->increments('id');

            // Nested Set related fields
            $t->integer('parent_id')->nullable();
            $t->integer('lft')->nullable();
            $t->integer('rgt')->nullable();
            $t->integer('depth')->nullable();

            // ... other fields which may feel suitable

            $t->string('name', 255);
            $t->string('icon', 255);
            $t->string('slug')->unique();

            // Indexes
            $t->index('parent_id');
            $t->index('lft');
            $t->index('rgt');

            $t->timestamps();
        });


        $categories = [
                    [
                        'name' => 'Action',
                        'slug' => 'action',

                    ],
                    [
                        'name' => 'Music',
                        'slug' => 'music',

                    ],
                    [
                        'name' => 'Fantasy',
                        'slug' => 'fantasy',

                    ],
                    [
                        'name' => 'Thriller',
                        'slug' => 'thriller',

                    ],
        ];

        \App\Category::buildTree($categories); // => true






  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        
    Schema::drop('categories');
  }
}
