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


        //Clientes
        Permission::create([
            'name' => 'Navegar clientes',
            'slug' => 'clientes.index',
            'description'  => 'Lista y navega todos los clientes del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de clientes',
            'slug' => 'clientes.show',
            'description'  => 'Ver en detalle de cada cliente del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo Cliente',
            'slug' => 'clientes.create',
            'description'  => 'Crear un nuevo cliente del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de clientes',
            'slug' => 'clientes.edit',
            'description'  => 'Editar cualquier dato de un cliente del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar producto',
            'slug' => 'clientes.destroy',
            'description'  => 'Eliminar cualquier cliente del sistema',

        ]);
        //Clientes

         //TAGS
         Permission::create([
            'name' => 'Navegar Etiquetas',
            'slug' => 'tags.index',
            'description'  => 'Lista y navega todos los tags del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de tags',
            'slug' => 'tags.show',
            'description'  => 'Ver en detalle de cada tag del sistema',

        ]);

        Permission::create([
            'name' => 'Crea una nueva Etiqueta',
            'slug' => 'tags.create',
            'description'  => 'Crear una nueva Etiqueta del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de tags',
            'slug' => 'tags.edit',
            'description'  => 'Editar cualquier Etiqueta del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Tag',
            'slug' => 'tags.destroy',
            'description'  => 'Eliminar cualquier Eiqueta del sistema',

        ]);
        //TAGS

        //CATEGORIAS
        Permission::create([
            'name' => 'Navegar por las Categorias',
            'slug' => 'categories.index',
            'description'  => 'Lista y navega todos los categories del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de categories',
            'slug' => 'categories.show',
            'description'  => 'Ver en detalle de cada Categoria del sistema',

        ]);

        Permission::create([
            'name' => 'Crea una nueva Categoria',
            'slug' => 'categories.create',
            'description'  => 'Crear una nueva Categoria del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de categories',
            'slug' => 'categories.edit',
            'description'  => 'Editar cualquier Categoria del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Categoria',
            'slug' => 'categories.destroy',
            'description'  => 'Eliminar cualquier Categoria del sistema',

        ]);
        //CATEGORIAS

    }
}
