@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Datos de los activos</h1>
    </div>
    <div class="row">
        <div class="col-md-6 pt-2">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Datos registrados</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre">Nombre del activo</label>
                                <p>{{ $activo->nombre }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <p>{{ $activo->descripcion }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ url('/admin/activos', []) }}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
