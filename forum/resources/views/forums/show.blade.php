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
    </div>
</div>

@endsection