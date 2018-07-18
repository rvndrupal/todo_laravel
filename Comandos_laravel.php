/**********COMANDO DE LARAVEL **************/

Instalar Laravel

composer create-project laravel/laravel blog "5.5.*" --prefer-dist 

Laravel collective

composer require "laravelcollective/html":"^5.4.0"

Agregar 

'providers' => [
    // ...
    Collective\Html\HtmlServiceProvider::class,
    // ...
  ],

  'aliases' => [
    // ...
      'Form' => Collective\Html\FormFacade::class,
      'Html' => Collective\Html\HtmlFacade::class,
    // ...
  ],


/*********************************************/
Instalar shinobi roles y permisos

composer require caffeinated/shinobi

Agregar 

Service Provider
Caffeinated\Shinobi\ShinobiServiceProvider::class


/********************************************/

/********************************************/
Configurar Provider  

use Illuminate\Support\Facades\Schema;

Schema::defaultStringLength(191);


/********************************************/

Nota.- el modelo es en singular ejemplo Category


1.- Crear el modelo y la migracion de un modelo  migration  c de controler

php artisan make:model Product -mc

2.-Crear los Seder de ejemplo

php artisan make:seeder ProductsTableSeeder


3.- Activar la migración  y lo seeders 

php artisan migrate:refresh --seed

4.--Conocer todas las Rutas

php artisan route:list

5.-Generar todas las rutas de un crontrolador en la carpeta Routes -> web.phpDocumentor\Reflection

Route::resource('products', 'ProductController');

6.-Generar el archivo para validar 

php artisan make:request ProductRequest

7.- Relación muchos a muchos con migrate 

Nota tiene que respetar el orden alfabetico  primero la p de post y luego t tag

php artisan make:migration create_post_tag_table

8.-Quitar errores en la longitud para poder migrar 

En la tabla password y user al email agregra longitud

$table->string('email', 128)->index();


/*************************************/
9.-Crear el modelo y todo de un jalo 

 php artisan make:model Product -a

/**************************************/

/*************************************/

10.- Crear Seeders de una tabla 

php artisan make:seeder ProductsTableSeeder

/*************************************/

/*************************************/

10.- Crear el sistema de LOGIN  

php artisan make:auth 

/*************************************/

/*************************************/

11.- Crear Controlador de Recursos   

php artisan make:controller UserController --resource

/*************************************/


/*************************************/

12.- Ver todas las configuraciones del curso roles y permisos    

En el video 10 a la mitad 

/*************************************/

