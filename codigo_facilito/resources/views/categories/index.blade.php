@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="page-header">
                        Busqueda de Slider
                        {{ Form::open(['route'=>'categories.index', 'method'=>'GET','class'=>'form-inline pull-right']) }}
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
                  Categorías
                    @can('categories.create')
                    <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary pull-right">Nueva</a>
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
                            @foreach ($categories as $categorie )
                            <tr>
                                <td>{{ $categorie->id }}</td>
                                <td>{{ $categorie->name }}</td>
                                <td width="10px">
                                @can('categories.show')
                                    <a href="{{ route('categories.show', $categorie->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('categories.edit')
                                    <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-sm btn-default">Editar</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('categories.destroy')
                                    
                                {!! Form::open(['route'=>['categories.destroy', $categorie->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                
                                {!! Form::close() !!}                               
                                    
                                @endcan
                                </td>

                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>

                    {{ $categories->render() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection