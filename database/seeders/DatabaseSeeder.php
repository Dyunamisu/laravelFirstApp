<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        // User::truncate();

        // Category::truncate();

        $user = User::factory()->create([
            "name"=> "Alvin",
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id,
        ]);

        // $personal = Category::create([
        //     'name'=>'Personal',
        //     'slug'=> 'personal',
        // ]);
        // $family = Category::create([
        //     'name'=>'Family',
        //     'slug'=> 'family',
        // ]);
        // $work = Category::create([
        //     'name'=>'Work',
        //     'slug'=> 'work',
        // ]);

        // Post::create([
        //     'user_id'=> $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family',
        //     'slug'=> 'my-first-post',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. ?',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa ipsam libero ex animi et! Illum architecto ea, numquam id veritatis quaerat deleniti laborum rerum, repellat neque sed repudiandae asperiores. Suscipit!'
        // ]);
        // Post::create([
        //     'user_id'=> $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My work',
        //     'slug'=> 'my-second-post',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. ?',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa ipsam libero ex animi et! Illum architecto ea, numquam id veritatis quaerat deleniti laborum rerum, repellat neque sed repudiandae asperiores. Suscipit!'
        // ]);
        // Post::create([
        //     'user_id'=> $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal',
        //     'slug'=> 'my-third-post',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. ?',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa ipsam libero ex animi et! Illum architecto ea, numquam id veritatis quaerat deleniti laborum rerum, repellat neque sed repudiandae asperiores. Suscipit!'
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
