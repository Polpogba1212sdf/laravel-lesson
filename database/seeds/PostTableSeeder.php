<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'admin@admin.com')->first();
        
        $post = new Post();
        $post->title = 'Post 1';
        $post->post = 'My post';
        $post->user_id = $user->id;
        $post->save();
        
        
        
        
        //$post->user()->attach($user);
    }
}
