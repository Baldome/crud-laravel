@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Nuevo Usuario</h1>
    </div>
    <div class="row">
        <div class="col-md-6 pt-2">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Llene los datos</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/usuarios') }}" method="post">
                        @csrf {{-- Guarda los datos para y genera un token  --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Nombre del Usuario</label>
                                    <input type="text" value="{{ old('name') }}" name="name" class="form-control"
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
                                    <label for="email">Email</label>
                                    <input type="email" value="{{ old('email') }}" name="email" class="form-control"
                                        required>
                                    @error('email')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                    @error('password')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="repetpassword">Repetir Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ url('/admin/usuarios', []) }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-floppy2 pr-2"></i>Guardar
                                    Registro</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
