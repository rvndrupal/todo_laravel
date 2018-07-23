<div class="from-group">    
    {!! Form::label('name','Nombre de la Etiqueta') !!}
    
    {!! Form::text('name', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('slug','Slug') !!}
    
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}   
    
</div>



<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>