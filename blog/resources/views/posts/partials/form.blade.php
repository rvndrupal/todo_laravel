{!! Form::hidden('user_id', auth()->user()->id) !!} <!--con esto tomamos el Id del usuario -->



<div class="from-group">    
    {!! Form::label('name','Nombre de la Categoría') !!}
    
    {!! Form::text('name', null, ['class' => 'form-control', 'id'=>'name']) !!}   
    
</div>

<div class="from-group">    
        {!! Form::label('slug','URL amigable') !!}
        
        {!! Form::text('slug', null, ['class' => 'form-control', 'id'=>'slug']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('file','Imagen') !!}
    
    {!! Form::file('file') !!}   

</div>

<div class="from-group">    
        {!! Form::label('category_id','Categorías') !!}
        
        {!! Form::select('category_id', $categories , null , ['class' => 'form-control']) !!}   <!--Se obtiene la categoria-->
        
</div>

<div class="from-group"> 
    <p><p></p>   
    {!! Form::label('status','Estado') !!}<p>
    <label>        
        {{  Form::radio('status','PUBLISHED') }} Publicado <p>        
    </label>
    <label>        
        {{  Form::radio('status','DRAFT') }} Borrador <p>        
    </label>    

</div>

<div class="from-group"> 


<div>



<div class="from-group">    
        {!! Form::label('body','Descripción') !!}
        
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}   
    
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