<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Role;
use League\OAuth1\Client\Server\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create();

        Role::create([
            'name'  => 'Admin',
            'slug'  => 'admin',
            'special' => 'all-access'
        ]);

        App\User::create([
            'name'=>'rodrigo',
            'email'=>'rodrigodrupal1@gmail.com',
            'password'=>bcrypt('rorro13')

        ]);
    }
}
