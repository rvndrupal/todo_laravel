@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
                <h1 class="text-center text-muted">{{ __("Respuestas al debate :name ",['name' =>$post->title]) }}</h1>

                <h4>{{ __('Autor del Debate') }}: {{ $post->owner->name }}</h4>

                <a href="{{ route('show.forum',$post->forum->id) }}" class="btn btn-info pull-right">
                    {{ __('Volver al foro :name',['name'=>$post->forum->name]) }}
                </a>

                <div class="clearfix">

                </div>

                <hr>



            @forelse($replies as $reply )
            <div class="panel panel-default">
                <div class="panel-heading panel-heading-reply ">
                    <p>{{ __('Autor') }}:{{ $reply->author->name }}</p>
                   
                </div>

                <div class="panel-body">
                    {{ $reply->reply }}
                </div>

            </div>
            @empty
            
                <div class="alert alert-danger">
                    {{ __('No hay ningun Post por el Momento') }}
                </div>

            @endforelse  
            
            @if($replies->count())
            
                {{  $replies->render() }}
            
            @endif

        </div>       

    </div>

@endsection