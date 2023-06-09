<?php


namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       //Only use seeders on db refresh
       // User::truncate();
       // Post::truncate();
       // Category::truncate();

       $user = User::factory()->create([
            'name' => 'John Wick'
        ]);
        //factory(5) Add size in number inside brackets
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
     /*    $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>More about the first post inside.</p>',
            'body' => '<p>FIRST BODY BODT INFO jdjdjdjdjdjdjdjdjdjdjjjjd END END END</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>More about the WORK post inside.</p>',
            'body' => '<p>WORK WORK WORK WORK WORK na na na. BODT INFO jdjdjdjdjdjdjdjdjdjdjjjjd END END END</p>'
        ]);*/


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);*/
    }
}
