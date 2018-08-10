

Ejemplo de la Relación de un blog 

tablas-> categorias, post, tag.

Crear una tabla de relación muchos a muchos

php artisan make:migration create_post_tag_table

//tomar el cuenta el orden alfabetico y estar en singular los campos
##########################################################################################################################
Categories
 public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',128);
            $table->string('slug', 128)->unique(); //campo unico
            $table->mediumText('body')->nullable(); //puede o no contener valor
            $table->timestamps();
        });
    }

#############################################################################################################################3
Post
public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned(); // no acepta numeros negativos un post le pertenece a un usuario
            $table->integer('category_id')->unsigned(); //le pertenece a una categoria

            $table->string('name',128);
            $table->string('slug', 128)->unique(); //campo unico

            $table->mediumText('excerpt')->nullable();
            $table->string('body', 500)->nullable();
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');

            $table->string('file',128)->nullable(); //puede ser nulo

            $table->timestamps();

            //relaciones de los campos
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            //se crea la relacion con usuarios el user_id de post contra el id de users
            
            $table->foreign('category_id')->references('id')->on('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            //el category_id de post contra el id de categories
        });
    }
#####################################################################################################################################

TAGS

 public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name',128);
            $table->string('slug', 128)->unique(); //campo unico

            
            $table->timestamps();
        });
    }
####################################################################################################################################$_COOKIE
RELACIÓN MUCHOS A MUCHOS 

create_post_tag_table.php

 public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('post_id')->unsigned(); // no acepta numeros negativos
            $table->integer('tag_id')->unsigned(); 

            //un post puede tener muchas etiquetas
            //y una etiqueta puede tener muchos post


            $table->timestamps();

            //relaciones de los campos
            $table->foreign('post_id')->references('id')->on('posts')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            //un post puede estar relacionado con una etiqueta

            $table->foreign('tag_id')->references('id')->on('tags')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            //una etiqueta puede tener muchos post
        });
    }







