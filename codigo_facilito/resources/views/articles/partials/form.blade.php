<div class="from-group">    
    {!! Form::label('title','Título') !!}
    
    {!! Form::text('title', null, ['class' => 'form-control','placeholder'=>'Título del Artículo']) !!}   
    
</div>

<div class="from-group">    
        {!! Form::label('category_id','Categoria') !!}
        
        {!! Form::select('category_id', $categories ,null, ['class' => 'form-control select-category','placeholder'=>'Selecciona una Categoria']) !!}   
        
</div>

<div class="from-group">    
        {!! Form::label('content','Contenido') !!}
        
        {!! Form::textarea('content' ,null, ['class' => 'form-control textarea-content','placeholder'=>'Contenido']) !!}   
        
</div>

<div class="from-group">    
        {!! Form::label('tags','Etíqueta') !!}
        
        {!! Form::select('tags[]', $tags ,null, ['class' => 'form-control select-tag','multiple']) !!}   
        
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


@section('js') {{-- Se agrega esta sección en el layout principal abajo de los plugins para que funcione--}}

<script>

    $('.select-tag').chosen({
        placeholder_text_multiple:'Seleccione un máximo de 3',
        max_selected_options:3,
        no_results_text:'No hay Resultados',
        search_contains:true
    });

    $('.select-category').chosen({
        placeholder_text_single:'Seleccione una Categoria',
        no_results_text:'No hay Resultados',
        search_contains:true
    });

    $('.textarea-content').trumbowyg();

</script>

@endsection


