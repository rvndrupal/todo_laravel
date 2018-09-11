/**********COMANDO DE LARAVEL **************/

Instalar Laravel

composer create-project laravel/laravel blog "5.5.*" --prefer-dist 

composer create-project laravel/laravel blog "5.6.7" --prefer-dist 

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

19.-Posicionar la ruta gracias a ASSET

Para dejar fija la hoja de estilos seria asi.

href="{{ asset('css/estilos.css') }}"

con esto te deja como base la carpeta asset en public

#############################################################

20.- Crear grupo de rutas. 

Route::group(['prefix' => 'admin'],function(){

    Route::resources();  //genera todas las rutas con el prefijo-> admin

});

###############################################################
21.-MANEJO DE TINKER 

php artisan tinker 

Ejemplo creamos un Usuario. 

>>> $user = ['name'=>'prueba','email'=>'prueba@gmail.com','password'=>bcrypt('prueba')]
=> [
     "name" => "prueba",
     "email" => "prueba@gmail.com",
     "password" => "$2y$10$6CSb3FYvBf.CWjKSmMvD2uxWKs8v.ZLeC65eEBHHcnDrHETnKmwOK",
   ]
>>> \App\User::create($user);

## Mostrar todos los Usuarios. 

 $user = \App\User::all();


 ##$category= new App\Category();  //crea una cateoria

 $category->name="Noticias";
 $category->save();

 ##para ver lo que tiene solo se pone la variable -> enter

 $category -> Enter


 ##Consultas  
 php artisan tinker                                       
sy Shell v0.9.6 (PHP 7.1.14 — cli) by Justin Hileman      
>> $article=App\Article::find(1);                         
> App\Article {#2924                                      
    id: 1,                                                
    title: "Nueva Noticia",                               
    content: "Nuevo contenido de la Noticia",             
    user_id: 4,                                           
    category_id: 6,                                       
    created_at: "2018-08-14 20:00:21",                    
    updated_at: "2018-08-14 20:00:21",                    
  }                                                       
>> $article->category                                     
> App\Category {#2931                                     
    id: 6,                                                
    name: "Noticias",                                     
    created_at: "2018-08-14 19:52:19",                    
    updated_at: "2018-08-14 19:52:19",                    
  }                                                       
>> $article                                               
> App\Article {#2924                                      
    id: 1,                                                
    title: "Nueva Noticia",                               
    content: "Nuevo contenido de la Noticia",             
    user_id: 4,                                           
    category_id: 6,                                       
    created_at: "2018-08-14 20:00:21",                    
    updated_at: "2018-08-14 20:00:21",                    
    category: App\Category {#2931                         
      id: 6,                                              
      name: "Noticias",                                   
      created_at: "2018-08-14 19:52:19",                  
      updated_at: "2018-08-14 19:52:19",                  
    },                                                    
  }                                                       
>>       


 $article->user
=> App\User {#2934
     id: 4,
     name: "rodrigo",
     email: "rodrigodrupal1@gmail.com",
     created_at: "2018-08-14 17:15:14",
     updated_at: "2018-08-14 17:15:14",
   }
>>> $article
=> App\Article {#2924
     id: 1,
     title: "Nueva Noticia",
     content: "Nuevo contenido de la Noticia",
     user_id: 4,
     category_id: 6,
     created_at: "2018-08-14 20:00:21",
     updated_at: "2018-08-14 20:00:21",
     category: App\Category {#2931
       id: 6,
       name: "Noticias",
       created_at: "2018-08-14 19:52:19",
       updated_at: "2018-08-14 19:52:19",
     },
     user: App\User {#2934
       id: 4,
       name: "rodrigo",
       email: "rodrigodrupal1@gmail.com",
       created_at: "2018-08-14 17:15:14",
       updated_at: "2018-08-14 17:15:14",
     },
   }


   ############# MUY IMPORTANTE MUCHO A MUCHOS###################

    $articles->tags()->attach(1)  //SE LE PASA EL ID DEL TAG QUE SE QUIERE RELACIONAR




 ############################################################################
 22.- Donde estan todas las funciones de busqueda. 

 https://laravel.com/docs/5.6/eloquent-collections


 ###########################################################################

 23.-Crear un Service Provider sirve para crear el View.console

 Información en el video 35 de Codigo facilito

 php artisan make:provider  ComposerServisProvider

 Generar los archivos-> composer dump-autoload

 ############################################################################
 24.-  para insertar valores en las tablas pivote.

  $post->tags()->attach($request->get('tags')); //la magia de muchos a muchos para insertar

  $post->tags()->sync($request->get('tags')); //para actualizar

   public function store(PostStoreRequest $request)
    {
        $post=Post::create($request->all());

        if($request->file('file')){ //i se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('file'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $post->fill(['file' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
        
        //relacion del post y los tags
        $post->tags()->attach($request->get('tags')); //la magia de muchos a muchos
        //super importante para que se inserte los valores en los dos registros

        return redirect()->route('posts.edit', $post->id)
        ->with('info','Post creada con exito');
    }

    public function update(PostUpdateRequest $request, Post $post)
    {
        
        $post->update($request->all());


        if($request->file('file')){ //si se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('file'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $post->fill(['file' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
        
        //relacion del post y los tags ojo con el sync  sincroniza la actualización
        $post->tags()->sync($request->get('tags'));
        //sincroniza y actualiza los valor es de las tablas pivote

        return redirect()->route('posts.edit', $post->id)
        ->with('info','Post Actualizada  con exito');

    }

 ############################################################################