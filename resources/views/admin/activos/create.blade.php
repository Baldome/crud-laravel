@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Nuevo activo</h1>
    </div>
    <div class="row">
        <div class="col-md-6 pt-2">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/activos') }}" method="POST">
                        @csrf {{-- Guarda los datos para y genera un token  --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="codigo">Código</label>
                                    <input type="text" value="{{ old('codigo') }}" name="codigo" class="form-control"
                                        required>
                                    @error('name')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" value="{{ old('nombre') }}" name="nombre" class="form-control"
                                        required>
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
                                    <textarea class="form-control" rows="3" name="descripcion">{{ old('descripcion') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    <input type="text" value="{{ old('estado') }}" name="estado" class="form-control"
                                        required>
                                    @error('name')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fecha_ingreso">Fecha de ingreso</label>
                                    <input type="date" value="{{ old('fecha_ingreso') }}" name="fecha_ingreso"
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
                                    <label for="modelo">Modelo</label>
                                    <input type="text" value="{{ old('modelo') }}" name="modelo" class="form-control"
                                        required>
                                    @error('name')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="serie">Serie</label>
                                    <input type="text" value="{{ old('serie') }}" name="serie" class="form-control"
                                        required>
                                    @error('name')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="imagen">Imagen</label>
                                    <input type="text" value="{{ old('imagen') }}" name="imagen" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="observaciones">Observaciones</label>
                                    <textarea class="form-control" rows="3" name="observaciones">{{ old('observaciones') }}</textarea>
                                </div>
                            </div>
                        </div>

                        {{-- Estos dos campos se realacionan con las tablas categorias y ubicaciones --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Seleccione categoría</label>
                                    <select name="categoria_id" class="form-control">
                                        @foreach ($categorias as $categoria)
                                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                        @endforeach
                                    </select>
                                    @error('categoria_id')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Seleccione ubicacion del activo</label>
                                    <select name="ubicacion_id" class="form-control">
                                        @foreach ($ubicaciones as $ubicacion)
                                            <option value="{{ $ubicacion->id }}">{{ $ubicacion->nombre }}</option>
                                        @endforeach
                                    </select>
                                    @error('name')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ url('/admin/activos', []) }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-success"><i class="bi bi-floppy2 pr-2"></i>Guardar
                                    Registro</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
