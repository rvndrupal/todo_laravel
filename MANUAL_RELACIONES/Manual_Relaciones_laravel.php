

Ejemplo de la Relación de un blog 

tablas-> categorias, post, tag.

Crear una tabla de relación muchos a muchos

php artisan make:migration create_post_tag_table

//tomar el cuenta el orden alfabetico y estar en singular los campos
##########################################################################################################################
CATEGORY
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
POST
public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned(); // no acepta numeros negativos un post le pertenece a un usuario
            $table->integer('category_id')->unsigned(); //un post le pertenece a una categoria

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
####################################################################################################################################
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

    ####################################################################################################################################

    LUEGO SE LES TIENE QUE DECIR A LAS ENTIDADES (MODELOS) EL TIPO DE RELACION QUE TIENEN.

    POST

      //un post pertenece a un usuario 
    public function user(){
        return $this->belongsTo(User::class); //Un post pertence a un Usuario.
    }

    //un post pertenece a una categoria
    public function category(){
        return $this->belongsTo(Category::class); //Un post tiene una etiqueta
    }

    public function tags(){ // se manda a llamar en el seeder de post en la relacion
        return $this->belongsToMany(Tag::class);  //Un post pertenece y tiene muchas etiquetas
    }

     ####################################################################################################################################

     CATEGORIA 
     class Category extends Model
{
    protected $fillable=[
        'name','slug','body'
    ];  

    public function posts(){ // Una categoria puede tener muchos post
        return $this->hasMany(Post::class);  //una categoria tiene n post
    }
}


 ####################################################################################################################################

 TAG 

 class Tag extends Model
{
    protected $fillable=[
        'name','slug'
    ];  

    public function posts(){ // Una etiqueta puede tener muchos post
        return $this->belongsToMany(Post::class);  //pertenece y tiene muchos Post
    }
}


####################################################################################################################################
USUARIOS 

 public function posts(){ // Un usuario puede tener muchos post
        return $this->hasMany(Post::class);  //un usuario  tiene n post
    }

####################################################################################################################################

PARA SACAR LOS DATOS EN EL CONTROLLADOR. 

Para lo que seria el index

Obtenemos los post del sistema. 

 public function blog(){
        $posts=Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        return view('web.posts',compact('posts'));
}


Obtener un solo post cuando se le da leer más. 

public function post($slug)
    {
        $post=Post::where('slug', $slug)->first();

        return view('web.post', compact('post'));
    }

Obtener las cateorias

public function category($slug)
    {
        //obtenemos la categoria se filtran por categorias
        $category=Category::where('slug',$slug)->pluck('id')->first();//con pluck obtienes solo el id

        //ahora obtenemos los post
        $posts=Post::where('category_id',$category)
        ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);

        return view('web.posts',compact('posts'));
    }

    public function tag($slug)
    {
      
        //ahora obtenemos los post -> se filtran por las etiquetas
        $posts=Post::whereHas('tags',function($query)use($slug){
            $query->where('slug',$slug);
            //consigue los post que tengan etiquetas siempre y cuando estas etiquetas tengan el slug que estoy utilizando
        })
        ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);

        return view('web.posts',compact('posts'));
    }







