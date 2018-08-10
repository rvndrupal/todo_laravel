<div class="from-group">    
    {!! Form::label('titulo','Título') !!}
    
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('body','Descripción') !!}
    
    {!! Form::text('body', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('icon','Icono') !!}
    
    {!! Form::text('icon', null, ['class' => 'form-control']) !!}   
    
</div>



<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>