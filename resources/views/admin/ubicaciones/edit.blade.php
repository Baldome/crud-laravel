@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Modificar datos de la ubicacion</h1>
    </div>
    <div class="row">
        <div class="col-md-6 pt-2">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/ubicaciones', [$ubicacion->id]) }}" method="POST">
                        @csrf {{-- Guarda los datos para y genera un token  --}}
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" value="{{ $ubicacion->nombre }}" name="nombre"
                                        class="form-control" required>
                                    @error('name')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea class="form-control" rows="3" name="descripcion">{{ $ubicacion->descripcion }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ url('/admin/ubicaciones', []) }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success"><i class="bi bi-floppy2 pr-2"></i>Actualizar
                                    Registro</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
