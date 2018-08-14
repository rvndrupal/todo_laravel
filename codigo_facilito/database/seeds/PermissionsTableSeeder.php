<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //usuarios
        Permission::create([
            'name' => 'Navegar Usuarios',
            'slug' => 'users.index',
            'description'  => 'Lista y navega todos los usuarios del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de Usuarios',
            'slug' => 'users.show',
            'description'  => 'Ver en detalle cada usuario del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de Usuarios',
            'slug' => 'users.edit',
            'description'  => 'Editar cualquier dato de un usuario del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Usuario',
            'slug' => 'users.destroy',
            'description'  => 'Eliminar cualquier dato de un usuario del sistema',

        ]);
        //usuarios

        //roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description'  => 'Lista y navega todos los roles del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de roles',
            'slug' => 'roles.show',
            'description'  => 'Ver en detalle cada rol del sistema',

        ]);

        Permission::create([
            'name' => 'Crear un nuevo Rol',
            'slug' => 'roles.create',
            'description'  => 'Crear un nuevo rol del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',
            'description'  => 'Editar cualquier dato de un rol del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Rol',
            'slug' => 'roles.destroy',
            'description'  => 'Eliminar cualquier dato de un rol del sistema',

        ]);
        //roles

        //Products
        Permission::create([
            'name' => 'Navegar productos',
            'slug' => 'products.index',
            'description'  => 'Lista y navega todos los products del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de products',
            'slug' => 'products.show',
            'description'  => 'Ver en detalle cada producto del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo Producto',
            'slug' => 'products.create',
            'description'  => 'Crear un nuevo producto del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de products',
            'slug' => 'products.edit',
            'description'  => 'Editar cualquier dato de un producto del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar producto',
            'slug' => 'products.destroy',
            'description'  => 'Eliminar cualquier dato de un producto del sistema',

        ]);
        //Products


        //categorias
        Permission::create([
            'name' => 'Navegar categorias',
            'slug' => 'categories.index',
            'description'  => 'Lista y navega todos los categorias del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de categories',
            'slug' => 'categories.show',
            'description'  => 'Ver en detalle cada categorias del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo categorias',
            'slug' => 'categories.create',
            'description'  => 'Crear un nuevo categorias del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de categories',
            'slug' => 'categories.edit',
            'description'  => 'Editar cualquier dato de un categorias del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar categorias',
            'slug' => 'categories.destroy',
            'description'  => 'Eliminar cualquier dato de un categorias del sistema',

        ]);
        //categorias

    }
}
