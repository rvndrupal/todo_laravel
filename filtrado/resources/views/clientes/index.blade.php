@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="page-header">
                    Busqueda de Clientes
                    {{ Form::open(['route'=>'clientes.index', 'method'=>'GET','class'=>'form-inline pull-right']) }}
                    <div class="form-group">
                        {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre']) }}
                    </div>

                    <div class="form-group">
                            {{ Form::text('ap',null,['class'=>'form-control','placeholder'=>'Ap']) }}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>

                    {{ Form::close() }}

                </div>
                <div class="panel-heading">
                    Clientes
                    @can('clientes.create')
                    <a href="{{ route('clientes.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Foto</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($clientes as $cliente )
                            <tr>
                                <td>{{ $cliente->id }}</td>
                                <td>{{ $cliente->name }}</td>
                                <td>{{ $cliente->ap }}</td>
                                <td>
                                    @if($cliente->file)
                                    <img src="{{ $cliente->file }}" class="foto_cliente">
                                    @endif
                                </td>
                               
                                <td width="10px">
                                @can('clientes.show')
                                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('clientes.edit')
                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-default">Editar</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('clientes.destroy')
                                    
                                {!! Form::open(['route'=>['clientes.destroy', $cliente->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                
                                {!! Form::close() !!}                               
                                    
                                @endcan
                                </td>

                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>

                    {{ $clientes->render() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection