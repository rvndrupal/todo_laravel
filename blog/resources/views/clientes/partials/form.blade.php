<div class="from-group">    
    {!! Form::label('name','Nombre del Producto') !!}
    
    {!! Form::text('name', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('ap','Apellido Paterno') !!}
    
    {!! Form::text('ap', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('am','Apellido Paterno') !!}
    
    {!! Form::text('am', null, ['class' => 'form-control']) !!}   
    
</div>



<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>