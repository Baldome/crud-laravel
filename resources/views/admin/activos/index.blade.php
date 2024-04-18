@extends('layouts.admin')

@section('content')
    <div class="row">
        <h3>Listado de Activos</h3>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 pt-2">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Listado de activos</h3>
                    <div class="card-tools">
                        <a href="{{ url('/admin/activos/create', []) }}" class="btn btn-primary"><i
                                class="bi bi-plus pr-2"></i>Nueva activo</a>
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
                                    <center>Código</center>
                                </th>
                                <th>
                                    <center>Nombre</center>
                                </th>
                                <th>
                                    <center>Descripcion</center>
                                </th>
                                <th>
                                    <center>Estado</center>
                                </th>
                                <th>
                                    <center>Fecha</center>
                                </th>
                                <th>
                                    <center>Modelo</center>
                                </th>
                                <th>
                                    <center>Serie</center>
                                </th>
                                <th>
                                    <center>Imagen</center>
                                </th>
                                <th>
                                    <center>Observaciones</center>
                                </th>
                                <th>
                                    <center>Categoria</center>
                                </th>
                                <th>
                                    <center>Ubiación</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $contador = 0;
                            @endphp
                            @foreach ($activos as $activo)
                                @php
                                    $contador++;
                                    $id = $activo->id;
                                @endphp
                                <tr>
                                    <td style="text-align: center">{{ $contador }}</td>
                                    <td>{{ $activo->codigo }}</td>
                                    <td>{{ $activo->nombre }}</td>
                                    <td>{{ $activo->descripcion }}</td>
                                    <td>{{ $activo->estado }}</td>
                                    <td>{{ $activo->fecha_ingreso }}</td>
                                    <td>{{ $activo->modelo }}</td>
                                    <td>{{ $activo->serie }}</td>
                                    <td>{{ $activo->imagen }}</td>
                                    <td>{{ $activo->observaciones }}</td>
                                    <td>{{ $activo->categoria->nombre }}</td>
                                    <td>{{ $activo->ubicacion->nombre }}</td>
                                    <td style="text-align: center">
                                        <div class="btn-group top-50 start-50" role="group" aria-label="Basic example">
                                            <a href="{{ route('activos.show', [$activo->id]) }}" type="button"
                                                class="btn btn-info"><i class="bi bi-eye pr-2"></i>Ver</a>
                                            <a href="{{ route('activos.edit', [$activo->id]) }}" type="button"
                                                class="btn btn-success"><i class="bi bi-pencil pr-2"></i>Editar</a>
                                            <form action="{{ route('activos.destroy', [$activo->id]) }}"
                                                onclick="ask{{ $id }}(event)" method="post"
                                                id="myform{{ $id }}">
                                                @csrf 
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
