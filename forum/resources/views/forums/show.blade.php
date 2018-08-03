@extends('layouts.app')

@section('content')
<div class="row"></div>
    <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center text-muted">
                {{ __("Posts del Foro :name ", ['name' => $forum->name]) }}
            </h1>

            <a href="{{ route('home') }}" class="btn btn-info pull-right">
                {{ __("Volver al listado de los Foros") }}
            </a>

            <div class="clearfix">

            </div>
            <br>
            <hr>
       
            @forelse($posts as $post)
            <div class="panel panel-default">
                    <div class="panel-heading panel-heading-post">
                        
                            <a href="../posts/{{ $post->id }}">  {{ $post->title }}</a>
                            <span class="pull-right">
                                    {{ __("Autor") }} : {{ $post->owner->name }}
                            <!--el owner es la relacion con el model post que le pusimos owner y te trai los datos del usuario-->
                            </span>
        
                    </div>
        
                    <div class="panel-body">
                       {{ $post->description }} 
                    </div>
                </div>


            @empty

            <div class="alert alert-danger">
                {{ __("No hay ningun Post en este Momento") }}
            </div>

            @endforelse

            @if($posts->count())
            
                {{ $posts->links() }}
            
            @endif


            @Logged()
                
                <h3 class="text-muted">{{ __("Añadir un nuevo  post al foro :name",['name'=>$forum->name]) }}</h3>
                @include('partials.errors')

                <form action="./posts" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="forum_id" value="{{ $forum->id }}">

                    <div class="form-group">
                        <label for="title" class="col-md-12 control-label">{{ __("Título") }}</label>
                        <input id="title" class="form-control" name="title" value="{{ old('title') }}"/>
                    </div>
    
                    <div class="form-group">
                        <label for="description" class="col-md-12 control-label">{{ __("Descripción") }}</label>
                        <textarea id="description" class="form-control"
                                  name="description">{{ old('description') }}</textarea>
                    </div>

                    <button type="submit" name="addPost" class="btn btn-primary">{{ __("Añadir post") }}</button>

                </form>


            @else
                @include('partials.login_link',['message' => __("Inicia sesión para crear un Post")])
            @endLogged()
        </div>
</div>

@endsection