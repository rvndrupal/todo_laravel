<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

      

        factory(App\User::class, 5)->create();
        factory(App\Forum::class, 15)->create();
        factory(App\Post::class, 15)->create();
        factory(App\Reply::class, 15)->create();
    }
}
