<div class="from-group">    
    {!! Form::label('title','Título') !!}
    
    {!! Form::text('title', null, ['class' => 'form-control','placeholder'=>'Título del Artículo']) !!}   
    
</div>

<div class="from-group">    
        {!! Form::label('category_id','Categoria') !!}
        
        {!! Form::select('category_id', $categories ,null, ['class' => 'form-control','placeholder'=>'Selecciona una Categoría']) !!}   
        
</div>

<div class="from-group">    
        {!! Form::label('content','Contenido') !!}
        
        {!! Form::textarea('content' ,null, ['class' => 'form-control','placeholder'=>'Contenido']) !!}   
        
</div>

<div class="from-group">    
        {!! Form::label('tags','Etíqueta') !!}
        
        {!! Form::select('tags[]', $tags ,null, ['class' => 'form-control','multiple']) !!}   
        
</div>
<br>
<div class="from-group">    
        {!! Form::label('image','Imagen') !!}
        
        {!! Form::file('image') !!}   
        
</div>
<hr>

<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>


