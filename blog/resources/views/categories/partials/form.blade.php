<div class="from-group">    
    {!! Form::label('name','Nombre de la Categoría') !!}
    
    {!! Form::text('name', null, ['class' => 'form-control', 'id'=>'name']) !!}   
    
</div>

<div class="from-group">    
        {!! Form::label('slug','URL amigable') !!}
        
        {!! Form::text('slug', null, ['class' => 'form-control', 'id'=>'slug']) !!}   
    
    </div>

<div class="from-group">    
        {!! Form::label('body','Descripción') !!}
        
        {!! Form::text('body', null, ['class' => 'form-control']) !!}   
    
</div>




<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>


@section('scripts')

<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>

<script>    
    $(document).ready(function(){
        $("#name, #slug").stringToSlug({
            callback: function(text){
                $("#slug").val(text);
            }
        });
    });

</script>

@endsection