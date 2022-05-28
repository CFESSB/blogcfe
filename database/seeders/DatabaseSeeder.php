<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\Storage;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::makeDirectory('posts');


        //$this ->call(UserSeeder::class);
        User::factory(10)->create();
        Category::factory(4)->create();
        Tag::factory(12)->create();
        $this->call(PostSeeder::class);
    }
}
