@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Slider
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