@extends('layouts.app')

@section('content')
<div class="row"></div>
    <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center text-muted">{{ __("Posts") }}</h1>
       
            @forelse($posts as $post)
            <div class="panel panel-default">
                    <div class="panel-heading">
                        
                            <a href="./post/{{ $post->id }}">  {{ $post->title }}</a>
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
    </div>
</div>

@endsection