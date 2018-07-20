<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 30)->create();

        Role::create([
            'name'  => 'Admin',
            'slug'  => 'admin',
            'special' => 'all-access'
        ]);

        //creo un Usuario
        App\User::create([
            'name'=>'rodrigo',
            'email'=>'rodrigo@gmail.com',
            'password'=>bcrypt('123456'),
        ]);
    }
}
