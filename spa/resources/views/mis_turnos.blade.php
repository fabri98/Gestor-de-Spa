<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Turnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

</head>

<body>
    @include('partials.header')

    <div class="container mt-5">
        <h1 class="section-title">Mis Turnos</h1>

        @if($turnos->isEmpty())
            <div class="alert alert-info shadow-sm" role="alert">
                <i class="fas fa-info-circle me-2"></i> No tienes turnos reservados en este momento.
            </div>
        @else
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach($turnos as $turno)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-calendar-check me-2"></i>{{ $turno->servicio->nombre_servicio }}
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    <i class="far fa-calendar-alt me-2"></i>Fecha:
                                    {{ \Carbon\Carbon::parse($turno->fecha_turno)->format('d/m/Y') }}
                                </p>
                                <p class="card-text">
                                    <i class="far fa-clock me-2"></i>Hora: {{ $turno->hora_turno }}
                                </p>
                            
                            </div>
                            <div class="card-footer bg-transparent border-top-0">
                                <a href="{{ route('turnos.detalle_turno', ['id' => $turno->id]) }}"
                                    class="btn btn-outline-primary btn-sm me-2">
                                    <i class="fas fa-info-circle me-1"></i>Ver Detalles
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="text-center mt-5">
            <a href="{{ url('/servicios') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-plus-circle me-2"></i>Reservar Nuevo Turno
            </a>
        </div>
    </div>


    @include('partials.footer')
</body>

</html>