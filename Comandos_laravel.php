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


/*************************************/

13.- CREAR LA TABLA PIVOTE DE RELACIONES    

VIDEO 2 DE RBLOG

En el ejemplo se tiene una tabla llamada post y tag y se relacionan alfabeticamente

Es a fuerzas el orden alfabetico

php artisan make:migration create_post_tag_table

/*************************************/

14.- CREAR LAS RELACIONES   

VIDEO 4 DEL BLOG  SUPER IMPORTANTE

En el ejemplo se tiene una tabla llamada post y tag y se relacionan alfabeticamente

Es a fuerzas el orden alfabetico



/*************************************/


15.- CREAR LAS VALIDACIONES   

VIDEO 11 DEL BLOG  

se crea el metodo en este caso para store para la creacion se puede hacer para update

php artisan make:request TagStoreRequest
php artisan make:request TagUpdateRequest



/*************************************/

16.- COMO INSTALAR LARAVEL COLLECTIVE CON UNA VERSIÓN 5.5 O MÁS 

VIDEO 13 DEL BLOG  

/*************************************/

/*************************************/

17.- SUBIR ARCHIVOS Y IMAGENES 

VIDEO 22 DEL BLOG 

Configurar  config->filesystem 

'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

         'public' => [
            'driver' => 'local',
            'root' => public_path(), //esto se cambia
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

/*************************************/

18.- NIVEL DE SEGURIDAD CREAR POLITICAS DE SEGURIDAD

php artisan make:policy  PostPolicy

Agregar en app->providers->AuthServiceProvider
use App\Post;
use App\Policies\PostPolicy;

   Post::class => PostPolicy::class
/*************************************/



