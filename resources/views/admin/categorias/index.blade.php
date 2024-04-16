@extends('layouts.admin')

@section('content')
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Categorias</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="bi bi-plus pr-2"></i>Nueva Categoria
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Crear nueva categoria</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="{{ url('/admin/categorias', []) }}"
                                                method="post">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">

                                                            <div class="form-group">
                                                                <label>Nombre</label>
                                                                <input type="text" class="form-control" name="nombre"
                                                                    required>
                                                                <label>Descripción</label>
                                                                <textarea class="form-control" rows="3" name="descripcion"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="model-footer">
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-info">Guardar</button>
                                                        <button type="button" class="btn btn-secondary float-right"
                                                            data-dismiss="modal">Cancelar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ol>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <h3>Listado de categorias</h3>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 pt-2">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listado de Categorias</h3>
                    <div class="card-tools">
                        <a href="{{ url('/admin/categorias/create', []) }}" class="btn btn-primary"><i
                                class="bi bi-plus pr-2"></i>Nueva categoria</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <center>Nro</center>
                                </th>
                                <th>
                                    <center>Nombre</center>
                                </th>
                                <th>
                                    <center>Descripción</center>
                                </th>
                                <th>
                                    <center>Acciones</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $contador = 0;
                            @endphp
                            @foreach ($categorias as $categoria)
                                @php
                                    $contador++;
                                    $id = $categoria->id;
                                @endphp
                                <tr>
                                    <td style="text-align: center">{{ $contador }}</td>
                                    <td>{{ $categoria->nombre }}</td>
                                    <td>{{ $categoria->descripcion }}</td>
                                    <td>
                                        <div class="btn-group top-50 start-50" role="group" aria-label="Basic example">
                                            <a href="{{ route('categorias.show', [$categoria->id]) }}" type="button"
                                                class="btn btn-info"><i class="bi bi-eye pr-2"></i>Ver</a>
                                            <a href="{{ route('categorias.edit', [$categoria->id]) }}" type="button"
                                                class="btn btn-success"><i class="bi bi-pencil pr-2"></i>Editar</a>
                                            <form action="{{ route('categorias.destroy', [$categoria->id]) }}"
                                                onclick="ask{{ $id }}(event)" method="post"
                                                id="myform{{ $id }}">
                                                @csrf {{-- Guarda los datos para y genera un token --}}
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    style="border-radius: 0px 5px 5px 0px"><i
                                                        class="bi bi-trash pr-2"></i>Eliminar</button>
                                            </form>
                                            <script>
                                                function ask{{ $id }}(event) {
                                                    event.preventDefault();
                                                    Swal.fire({
                                                        title: 'Eliminar registro',
                                                        text: '¿Desea eliminar este registro?',
                                                        icon: 'question',
                                                        showDenyButton: true,
                                                        confirmButtonText: 'Eliminar',
                                                        confirmButtonColor: 'red',
                                                        denyButtonColor: '#270a0a',
                                                        denyButtonText: 'Cancelar',
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            var form = $('#myform{{ $id }}');
                                                            form.submit();
                                                        }
                                                    });
                                                }
                                            </script>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
