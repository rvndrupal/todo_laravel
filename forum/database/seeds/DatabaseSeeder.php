<?php

use Illuminate\Database\Seeder;

use App\Forum;
use App\Post;
use App\User;
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
        factory(Post::class, 100)->create();
    }
}
