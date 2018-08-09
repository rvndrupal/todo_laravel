<div class="from-group">    
    {!! Form::label('titulo','Título Slider') !!}
    
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('subtitulo','Subtítulo del slider') !!}
    
    {!! Form::text('subtitulo', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
        {!! Form::label('body','Descripción') !!}
        
        {!! Form::text('body', null, ['class' => 'form-control']) !!}   
        
</div>

<div class="from-group">    
        {!! Form::label('l1','Etiqueta Uno') !!}
        
        {!! Form::text('l1', null, ['class' => 'form-control']) !!}   
        
</div>

<div class="from-group">    
        {!! Form::label('l2','Etiqueta Dos') !!}
        
        {!! Form::text('l2', null, ['class' => 'form-control']) !!}   
        
</div>

<div class="from-group">    
        {!! Form::label('l3','Etiqueta Tres') !!}
        
        {!! Form::text('l3', null, ['class' => 'form-control']) !!}   
        
</div>

<div class="from-group">    
        {!! Form::label('l4','Etiqueta Cuatro') !!}
        
        {!! Form::text('l4', null, ['class' => 'form-control']) !!}   
        
</div>

<div class="from-group">    
        {!! Form::label('l5','Etiqueta Cinco') !!}
        
        {!! Form::text('l5', null, ['class' => 'form-control']) !!}   
        
</div>


<div class="from-group">    
    {!! Form::label('file','Imagen') !!}
    
    {!! Form::file('file') !!}   

</div>

<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>