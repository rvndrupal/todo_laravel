@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
                <h1 class="text-center text-muted">{{ __("Foros") }}</h1>

            @forelse($forums as $forum )
            <div class="panel panel-default">
                <div class="panel-heading panel-heading-forum">
                   <a href="{{ route('show.forum',$forum->slug)}}"> {{ $forum->name }}</a>
                   <span class="pull-right">
                        {{ __('Post') }}: {{ $forum->posts->count() }} {{ "-->" }}
                       {{ __('Respuestas') }}: {{ $forum->replies->count() }}
                       
                    </span>
                </div>

                <div class="panel-body">
                    {{ $forum->description }}
                </div>

            </div>
            @empty
            
                <div class="alert alert-danger">
                    {{ __('No hay ningun Foro por el Momento') }}
                </div>

            @endforelse  
            
            @if($forums->count())
            
                {{  $forums->render() }}
            
            @endif

            {{-- formulario --}}
            <h2>{{ __("Añadir un nuevo Foro") }}</h2>

            <hr>

            @include('partials.errors')

            
                <form action="{{ route('store.forum') }}" method="POST">
                {{--  para que aparescan los campos automaticos-->> b4-form-textarea  --}}
                {{ csrf_field() }} {{-- Token de Seguridad --}}
                <div class="form-group">
                  <label for="name" class="col-lg-12 control-label"> {{ __('Nombre') }}</label>
                  <input type="text" class="form-control" name="name" id="name"  placeholder="Nombre" value="{{ old('name') }}">                
                </div>

                <div class="form-group">
                <label for="description" class="col-lg-12 control-label"> {{ __('Descripcción') }}</label>
                <input type="text" class="form-control" name="description" id="description"  placeholder="Nombre" value="{{ old('description') }}">                
                </div>

                <button type="submit" name="addForum" class="btn btn-primary">
                    {{ __('Crear Foro') }}
                </button>
                    


                
                </form>

            {{-- formulario --}}
        </div>       

    </div>

@endsection