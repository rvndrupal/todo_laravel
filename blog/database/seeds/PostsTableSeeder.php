<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 300)->create()->each(function(App\Post $post){
            //se relaciona un post con un tag
            $post->tags()->attach([
                rand(1,5), //el primer post se relaciona con las primeras cinco etiquetas
                rand(6,14),
                rand(15,20),
            ]);
        });
    }
}
