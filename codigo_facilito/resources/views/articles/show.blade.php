@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Tag
                   @can('tags.index')
                   <a href="{{ route('tags.index') }}" class="btn btn-sm btn-primary pull-right">Volver</a>
                   @endcan
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $tag->name }}</p>               
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 