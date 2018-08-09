@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Nosotros
                    @can('abouts.index')
                    <a href="{{ route('abouts.index') }}" class="btn btn-sm btn-primary pull-right">Volver</a>
                    @endcan
                </div>

                <div class="panel-body">
                <p> <strong>Título</strong> {{ $about->titulo }}</p>
                <p> <strong>Subtítulo</strong> {{ $about->subtitulo }}</p>
                <p> <strong>Descripción</strong> {{ $about->body }}</p>
                <p> <strong>Etiqueta Uno</strong> {{ $about->l1 }}</p>
                <p> <strong>Etiqueta Dos</strong> {{ $about->l2 }}</p>
                <p> <strong>Etiqueta Tres</strong> {{ $about->l3 }}</p>
                <p> <strong>Etiqueta Cuatro</strong> {{ $about->l4 }}</p>
                <p> <strong>Etiqueta Cinco</strong> {{ $about->l5 }}</p>
                @if($about->file)
                <img src="{{ $about->file }}" class="foto_about_show">
                @endif
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 