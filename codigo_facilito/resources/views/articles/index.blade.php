@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="page-header">
                        Busqueda de Artículos
                        {{ Form::open(['route'=>'articles.index', 'method'=>'GET','class'=>'form-inline pull-right']) }}
                        <div class="form-group">
                            {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'Título']) }}
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
                   
                    @can('articles.create')
                    <a href="{{ route('articles.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                    @endcan
                   
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Título</th>
                                <th>Categoría</th>
                                <th>User</th>
                                <th>Imagen</th>
                                
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                          
                        <tbody>
                            @foreach ($articles as $article )
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{   $article->category->name }}</td>
                                <td>{{   $article->user->name }}</td>
                                <td>
                                
                                @foreach ($article->images as $image )                               
                                <img src="{{ asset('images/articles').'/'.$image->name }}" class="imagen_index" /></p>
                                @endforeach
                                </td>
                               
                                <td width="10px">
                                @can('articles.show')
                                    <a href="{{ route('articles.show', $article->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('articles.edit')
                                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-default">Editar</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('articles.destroy')
                                    
                                {!! Form::open(['route'=>['articles.destroy', $article->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Estas Seguro')">Eliminar</button>
                                
                                {!! Form::close() !!}                               
                                    
                                @endcan
                                </td>

                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>

                    {{ $articles->render() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection