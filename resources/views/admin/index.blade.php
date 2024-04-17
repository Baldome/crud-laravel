@extends ('layouts.admin')

@section('content')
    <div class="row">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        {{-- Usuarios --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-cyan">
                <div class="inner">
                    @php
                        $users_counters = 0;
                    @endphp
                    @foreach ($users as $user)
                        @php
                            $users_counters++;
                        @endphp
                    @endforeach
                    <h3>{{ $users_counters }}</h3>
                    <p>Usuarios Registrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="{{ url('/admin/usuarios', []) }}" class="small-box-footer">
                    Mas información<i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        {{-- Categorias --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-blue">
                <div class="inner">
                    @php
                        $categorys_counters = 0;
                    @endphp
                    @foreach ($categorys as $category)
                        @php
                            $categorys_counters++;
                        @endphp
                    @endforeach
                    <h3>{{ $categorys_counters }}</h3>
                    <p>Categorias Registrados</p>
                </div>
                <div class="icon">
                    <i class="bi bi-card-checklist pb-2"></i>
                </div>
                <a href="{{ url('/admin/categorias', []) }}" class="small-box-footer">
                    Mas información<i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        
        {{-- Ubicaciones --}}
        <div class="col-lg-3 col-6">
            <div class="small-box bg-gray">
                <div class="inner">
                    @php
                        $ubicacions_counters = 0;
                    @endphp
                    @foreach ($ubicacions as $category)
                        @php
                            $ubicacions_counters++;
                        @endphp
                    @endforeach
                    <h3>{{ $ubicacions_counters }}</h3>
                    <p>Ubicaciones Registrados</p>
                </div>
                <div class="icon">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <a href="{{ url('/admin/ubicaciones', []) }}" class="small-box-footer">
                    Mas información<i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
@endsection
