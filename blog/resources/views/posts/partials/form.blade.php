{{  Form::hidden('user_id', auth()->user()->id) }} <!--con esto tomamos el Id del usuario -->



<div class="from-group">    
    {!! Form::label('name','Nombre del Post') !!}
    
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
    {{ Form::label('tags','Etiquetas') }}
    <div>
        @foreach ($tags as $tag)
        <label>
          {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}  
        </label>            
        @endforeach
    </div>  
<div>

<div class="from-group">    
        {!! Form::label('excerpt','Texto corto') !!}
        
        {!! Form::textarea('excerpt', null, ['class' => 'form-control','rows'=>'2']) !!}   
    
</div>

        

<div class="from-group">    
        {!! Form::label('body','Descripción') !!}
        
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}   
    
</div>




<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>


@section('scripts')

<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
//<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

<script>    
    $(document).ready(function(){
        $("#name, #slug").stringToSlug({
            callback: function(text){
                $("#slug").val(text);
            }
        });
    });
</script>

    /*CKEDITOR.config.height = 400;
    CKEDITOR.config.width = 'auto';
    CKEDITOR.replace('body');*/




@endsection