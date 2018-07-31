use DB;
use Carbon\Carbon;



public function index(){

    $mensajes=DB::table('mensajes')->get(); //obtener toso los mensajes
    return view('mensajes.index', compact('mensajes'));
}

public function store(Request $request){
    DB::table('mensajes')->insert([
        "nombre"     => $request->input('nombre'),
        "ap"         => $request->input('ap'),
        "tel"        => $request->input('tel'),
        "created_at" => Carbon::now(),
        "update_at"  => Carbon::now(),    
        
    ]);

    return redirect()->route('mensajes.index');  //redireccionar a una rutas
}

public function show($id){

    $mensaje=DB::table('mensajes')->where('id','$id')->first();

    return view('mensajes.show', compact('mensaje'));
}


public fuction edit($id)
{
    $mensaje=DB::table('mensajes')->where('id','$id')->first();

    return view('mensajes.edit',compact('mensaje'));
}

public function update(Request $request, $id)
{
    DB::table('mensajes')->where('id',$id)->update([
        "nombre"     => $request->input('nombre'),
        "ap"         => $request->input('ap'),
        "tel"        => $request->input('tel'),
        "update_at"  => Carbon::now(),    
        
    ]);

    return redirect()->route('mensajes.index');
}


public function destroy($id)
{
    DB::table('mensajes')->where('id','$id')->delete();

    return redirect()->route('mensajes.index');

}


/****************  Eloquent **************/
use App\Message;

php artisan make:model Message 

public function index(){

//$mensajes=DB::table('mensajes')->get(); //obtener toso los mensajes

$mensajes=Message::all(); //eloquent

return view('mensajes.index', compact('mensajes'));
}


public function store(Request $request){
   

    Agregar al model el $fillable la protección de los campos

    Message::create($request->all());

    return redirect()->route('mensajes.index');  //redireccionar a una rutas
}



public function show($id){

$mensaje=Message::findOrFail($id);  //encuentra o falla

return view('mensajes.show', compact('mensaje'));
}


public fuction edit($id)
{
    $mensaje=Message::findOrFail($id);

    return view('mensajes.edit',compact('mensaje'));
}


public function update(Request $request, $id)
{
    $mensaje=Message::findOrFail($id);

    $mensaje->update($request->all());

    return redirect()->route('mensajes.index');
}


public function destroy($id)
{
    $mensaje=Message::findOrFail($id);

    $mensaje->delete();

    return redirect()->route('mensajes.index');

}