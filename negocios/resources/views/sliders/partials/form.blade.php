<div class="from-group">    
    {!! Form::label('titulo','Título Slider') !!}
    
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('subtitulo','Subtítulo del slider') !!}
    
    {!! Form::text('subtitulo', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('file','Imagen') !!}
    
    {!! Form::file('file') !!}   

</div>

<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>