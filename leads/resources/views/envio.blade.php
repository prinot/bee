@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">



            <div class="card">
                <div class="card-header">Tablero</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-header">
                                        <h1>
                                            Busqueda de usuarios
                                            {{ Form::open(['route' => 'envio', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                                                <div class="form-group">
                                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'teléfono']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Correo']) }}
                                                </div>
                                               
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-default">
                                                        <span class="glyphicon glyphicon-search">Buscar</span>
                                                    </button>
                                                </div>
                                                
                                            {{ Form::close() }}
                                        </h1>
                                        <br>
                                        <div class="col-md-12">
                                                <table class="table table-hover table-striped table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <td>Id</td>
                                                            <td>Nombre del solicitante</td>
                                                            <td>Correo Eléctronico</td>
                                                            <td>Número celular</td>
                                                            <td>Nombre de Empresa</td>
                                                            <td>Paquete Solicitado</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($envios as $envio)
                                                        <tr>
                                                            <td>{{ $envio->id }}</td>
                                                            <td>{{ $envio->name }}</td>
                                                            <td>{{ $envio->email }}</td>
                                                            <td>{{ $envio->phone }}</td>
                                                            <td>{{ $envio->name_business }}</td>
                                                            <td>{{ $envio->package}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {{ $envios->render() }}
                                            </div>
                                      <!--  <a href="{{route('envios.pdf')}}" class="btn btn-success btn-lg " role="button">Exportar PDF</a>
                                        <a href="{{route('envios.excel')}}" class="btn btn-success btn-lg " role="button">Exportar Excel</a>-->


                                    </div>
                                </div>
                                
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
