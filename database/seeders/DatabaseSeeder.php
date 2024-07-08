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
        $user = User::factory()->create([
            'name' => 'JohnDoe'
        ]);
        Post::factory(3)->create( [
            'user_id' => $user->id
        ]);



    /*    $personal = Category::create([
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
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
            Check them out, see for yourself, and massively level up your development skills in the process.
            Laravel has wonderful documentation covering every aspect of the framework.</p>',
            'body' => '<p>Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
            Check them out, see for yourself, and massively level up your development skills in the process.
            Laravel has wonderful documentation covering every aspect of the framework.Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
            Check them out, see for yourself, and massively level up your development skills in the process.
            Laravel has wonderful documentation covering every aspect of the framework.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
            Check them out, see for yourself, and massively level up your development skills in the process.
            Laravel has wonderful documentation covering every aspect of the framework.</p>',
            'body' => '<p>Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
            Check them out, see for yourself, and massively level up your development skills in the process.
            Laravel has wonderful documentation covering every aspect of the framework.Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
            Check them out, see for yourself, and massively level up your development skills in the process.
            Laravel has wonderful documentation covering every aspect of the framework.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
            Check them out, see for yourself, and massively level up your development skills in the process.
            Laravel has wonderful documentation covering every aspect of the framework.</p>',
            'body' => '<p>Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
            Check them out, see for yourself, and massively level up your development skills in the process.
            Laravel has wonderful documentation covering every aspect of the framework.Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
            Check them out, see for yourself, and massively level up your development skills in the process.
            Laravel has wonderful documentation covering every aspect of the framework.</p>'
        ]);*/

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }
}
