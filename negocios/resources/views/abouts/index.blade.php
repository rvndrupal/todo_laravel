@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="page-header">
                    Busqueda de Nosotros
                    {{ Form::open(['route'=>'abouts.index', 'method'=>'GET','class'=>'form-inline pull-right']) }}
                    <div class="form-group">
                        {{ Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Titulo']) }}
                    </div>

                    <div class="form-group">
                            {{ Form::text('subtitulo',null,['class'=>'form-control','placeholder'=>'Subtitulo']) }}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>

                    {{ Form::close() }}

                </div>
                <div class="panel-heading">
                    About
                    @can('abouts.create')
                    <a href="{{ route('abouts.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Título</th>
                                <th>Subtitulo</th>
                                <th>Foto</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($abouts as $about )
                            <tr>
                                <td>{{ $about->id }}</td>
                                <td>{{ $about->titulo }}</td>
                                <td>{{ $about->subtitulo }}</td>
                                <td>
                                    @if($about->file)
                                    <img src="{{ $about->file }}" class="foto_about">
                                    @endif
                                </td>
                               
                                <td width="10px">
                                @can('abouts.show')
                                    <a href="{{ route('abouts.show', $about->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('abouts.edit')
                                    <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-sm btn-default">Editar</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('sliders.destroy')
                                    
                                {!! Form::open(['route'=>['abouts.destroy', $about->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                
                                {!! Form::close() !!}                               
                                    
                                @endcan
                                </td>

                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>

                    {{ $abouts->render() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection