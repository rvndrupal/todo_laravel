@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
                <h1 class="text-center text-muted">{{ __("Foros") }}</h1>

            @forelse($forums as $forum )
            <div class="panel panel-default">
                <div class="panel-heading">
                   <a href="{{ route('show',$forum->id)}}"> {{ $forum->name }}</a>
                   <span class="pull-right">
                        {{ __('Post') }}: {{ $forum->posts->count() }}
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

        </div>       

    </div>

@endsection