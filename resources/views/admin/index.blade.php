@extends ('layouts.admin')

@section('content')
    <div class="row">
        <h1>Principal</h1>
    </div>
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
@endsection
