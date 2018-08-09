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

         //Slider
         Permission::create([
            'name' => 'Navegar Slider',
            'slug' => 'sliders.index',
            'description'  => 'Lista y navega todos los sliders del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de sliders',
            'slug' => 'sliders.show',
            'description'  => 'Ver en detalle cada slider del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo Slider',
            'slug' => 'sliders.create',
            'description'  => 'Crear un nuevo Slider del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de sliders',
            'slug' => 'sliders.edit',
            'description'  => 'Editar cualquier dato de un Slider del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Slider',
            'slug' => 'sliders.destroy',
            'description'  => 'Eliminar cualquier dato de un Slider del sistema',

        ]);
        //Slider



        //About
        Permission::create([
            'name' => 'Navegar About',
            'slug' => 'abouts.index',
            'description'  => 'Lista y navega todos los abouts del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de abouts',
            'slug' => 'abouts.show',
            'description'  => 'Ver en detalle cada about del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo about',
            'slug' => 'abouts.create',
            'description'  => 'Crear un nuevo about del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de abouts',
            'slug' => 'abouts.edit',
            'description'  => 'Editar cualquier dato de un about del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar about',
            'slug' => 'abouts.destroy',
            'description'  => 'Eliminar cualquier dato de un about del sistema',

        ]);
        //About

    }
}
