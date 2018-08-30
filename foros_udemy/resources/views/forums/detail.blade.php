@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
                <h1 class="text-center text-muted">{{ __("Posts del Foro-> :name  ",['name'=>$forum->name]) }}</h1>

                <a href="{{ route('home.foros') }}" class="btn btn-info pull-right">
                        {{ __('Volver al listado de los Foros') }}
                </a>

                <div class="clearfix">

                </div>

                <hr>

            @forelse($posts as $post )
            <div class="panel panel-default ">
                <div class="panel-heading panel-heading-post">
                   <a href="{{ route('show.post', $post->slug) }}"> {{ $post->title }}</a>
                   <span class="pull-right">
                       {{ __('Owner') }}: {{ $post->owner->name }}
                   </span>
                </div>

                <div class="panel-body">
                    {{ $post->description }}

                     
                     @if($post->imagen)
                     
                     {{--  metodo creado en el modelo --}} 
                    <img src="{{ $post->pathImagen() }}" class="img-responsive img-rounded">
                     @endif
                </div>

            </div>
            @empty
            
                <div class="alert alert-danger">
                    {{ __('No hay ningun Post por el Momento') }}
                </div>

            @endforelse  
            
            @if($posts->count())
            
                {{  $posts->render() }}
            
            @endif

            {{-- Se utiliza el provider creado --}}
            @Logged()
                <h3 class="text-muted"> {{ __('Añadir un post al foro:  :name', ['name'=>$forum->name]) }}</h3>
                @include('partials.errors')

                <form action="{{ route('store.post') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input type="hidden" name="forum_id" value="{{ $forum->id }}" />

                    <div class="form-group">
                      <label for="title">{{ __('Título') }}</label>
                      <input type="text" class="form-control" name="title" id="title"  placeholder="Título" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-md-12 control-label">{{ __("Descripción") }}</label>
                        <textarea id="description" class="form-control"
                                  name="description">{{ old('description') }}</textarea>
                    </div>

                    <label class="btn btn-warning" for="file">
                        <input id="file" name="file" type="file" style="display:none;">
                        {{ __("Subir archivo") }}
                    </label>

                    <button type="submit" name="addPost" class="btn btn-default">{{ __("Agrear Post") }}</button>



                </form>

            @else 

                @include('partials.login_link',['message'=> __('Inicia Sesión para crear un post')])

            @endLogged()

        </div>       

    </div>

@endsection