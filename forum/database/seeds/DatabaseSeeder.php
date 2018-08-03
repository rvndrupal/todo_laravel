<?php

use Illuminate\Database\Seeder;

use App\Forum;
use App\Post;
use App\User;
use App\Reply;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();
        factory(Forum::class, 20)->create();
        factory(Post::class, 50)->create();
        factory(Reply::class, 100)->create();
    }
}
