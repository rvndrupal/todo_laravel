@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Actualizar Cliente
                </div>

                <div class="panel-body">
                
                {!! Form::model($cliente, ['route'=> ['clientes.update', $cliente->id],
                 'method'=>'PUT']) !!}

                @include('clientes.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 