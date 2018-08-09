@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Slider
                   Sliders
                    @can('sliders.index')
                    <a href="{{ route('sliders.index') }}" class="btn btn-sm btn-primary pull-right">Volver</a>
                    @endcan
                </div>

                <div class="panel-body">
                <p> <strong>Título</strong> {{ $slider->titulo }}</p>
                <p> <strong>Subtítulo</strong> {{ $slider->subtitulo }}</p>
                @if($slider->file)
                <img src="{{ $slider->file }}" class="foto_slider_show">
                @endif
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 