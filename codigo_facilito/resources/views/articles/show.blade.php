@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Articulo
                   @can('articles.index')
                   <a href="{{ route('articles.index') }}" class="btn btn-sm btn-primary pull-right">Volver</a>
                   @endcan
                </div>
                <?php //dd($article); ?>                
                <div class="panel-body">
                <p> <strong>Título</strong> {{ $article->title }}</p>     
                <p> <strong>Contenido</strong> {{ $article->content }}</p> 
                <p> <strong>Categoría</strong> {{ $article->category->name }}</p> 
                <p> <strong>Usuario</strong> {{ $article->user->name }}</p> 
                @foreach ($article->images->all() as $image )
                <p> <strong>Imagen</strong> <p></p>
                <img src="{{ asset('images/articles').'/'.$image->name }}" class="imagen_articles" /></p>
                @endforeach
                                  
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 