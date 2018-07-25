@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Cliente
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $cliente->name }}</p>
                <p> <strong>Apellido Paterno</strong> {{ $cliente->ap }}</p>
                @if($cliente->file)
                <img src="{{ $cliente->file }}" class="foto_cliente">
                @endif
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 