@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Servicio
                    @can('services.index')
                    <a href="{{ route('services.index') }}" class="btn btn-sm btn-primary pull-right">Volver</a>
                    @endcan
                </div>

                <div class="panel-body">
                <p> <strong>Título</strong> {{ $service->titulo }}</p>
                <p> <strong>Descripción</strong> {{ $service->body }}</p>
                <p> <strong>Icon</strong> {{ $service->icon }}</p>
               
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 