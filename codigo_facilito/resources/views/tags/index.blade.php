@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="page-header">
                        Busqueda de Etiqueta
                        {{ Form::open(['route'=>'tags.index', 'method'=>'GET','class'=>'form-inline pull-right']) }}
                        <div class="form-group">
                            {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre']) }}
                        </div>    
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </div>
    
                        {{ Form::close() }}

                </div>

                <div class="panel-heading">
                  Etiqueta
                   
                    @can('tags.create')
                    <a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                    @endcan
                   
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($tags as $tag )
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->name }}</td>
                                <td width="10px">
                                @can('tags.show')
                                    <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('tags.edit')
                                    <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-default">Editar</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('tags.destroy')
                                    
                                {!! Form::open(['route'=>['tags.destroy', $tag->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Estas Seguro')">Eliminar</button>
                                
                                {!! Form::close() !!}                               
                                    
                                @endcan
                                </td>

                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>

                    {{ $tags->render() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection