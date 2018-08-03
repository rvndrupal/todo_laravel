@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center text-muted">{{ __("Foros") }}</h1>
       
            @forelse($forums as $forum)
            <div class="panel panel-default">
                    <div class="panel-heading panel-heading-forum">
                        
                            <a href="./forums/{{ $forum->id }}">  {{ $forum->name }}</a>

                            <span class="pull-right">
                                    {{ __("Posts") }} : {{ $forum->posts->count() }}
                            <!--de la relacion del post con el forum por eso puedo obtener el numero de post-->
                                   {{ "-->" }} {{ __("Respuestas") }}: {{ $forum->replies->count() }}
                            </span>
        
                    </div>
        
                    <div class="panel-body">
                       {{ $forum->description }} 
                    </div>
                </div>


            @empty

            <div class="alert alert-danger">
                {{ __("No hay ningun Foro") }}
            </div>

            @endforelse

            @if($forums->count())
            
                {{ $forums->links() }}
            
            @endif


            {{--  creamos el formulario  --}}
            <h2>{{ __("Añadir un nuevo Foro") }}</h2>

            <hr>

            @include('partials.errors')
            
            <form action="./forums" method="POST">
                {{--  para que aparescan los campos automaticos-->> b4-form-textarea  --}}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="col-md-12 control-label">{{ __("Nombre") }}</label>
                    <input id="name" class="form-control" name="name" value="{{ old('name') }}">
                </div>

              <div class="form-group">
                <label for="description" class="col-md-12 control-label">{{ __("Descripción") }}</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
              </div>

              <button type="submit" name="addForum" class="btn btn-primary">
                  {{ __("Agregar Foro") }}
              </button>

               
            </form>

    </div>
</div>

@endsection