<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::factory(10)->create();
        User::factory(10)->create();
         Tag::factory(10)->create();
         Article::factory(25)->create()->each(function($article){
            $ids = range(1, 20);
            shuffle($ids);//trộn
            $sliced = array_slice($ids, 1, 10);
            $article->tags()->attach($sliced);
        });
    }
}
