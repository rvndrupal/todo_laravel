@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
                <h1 class="text-center text-muted">{{ __("Posts") }}</h1>

            @forelse($posts as $post )
            <div class="panel panel-default">
                <div class="panel-heading">
                   <a href="/posts/{{ $post->id }}"> {{ $post->title }}</a>
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