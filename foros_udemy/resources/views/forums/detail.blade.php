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
                   <a href="{{ route('show.post',$forum->id)}} }}"> {{ $post->title }}</a>
                   <span class="pull-right">
                       {{ __('Owner') }}: {{ $post->owner->name }}
                   </span>
                </div>

                <div class="panel-body">
                    {{ $post->description }}
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

        </div>       

    </div>

@endsection