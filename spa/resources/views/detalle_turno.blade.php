<!DOCTYPE html>
<html lang="es">

<head>

    <title>Detalles del Turno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
</head>

<body>
    @include('partials.header')

    <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Detalles del Turno</h2>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-calendar-check fa-2x text-primary me-3"></i>
                                <div>
                                    <h6 class="mb-0">Servicio</h6>
                                    <p class="mb-0">{{ $turno->servicio->nombre_servicio }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-tag fa-2x text-secondary me-3"></i>
                                <div>
                                    <h6 class="mb-0">Turno ID</h6>
                                    <p class="mb-0">{{ $turno->id }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="far fa-user fa-2x text-info me-3"></i>
                                <div>
                                    <h6 class="mb-0">Usuario</h6>
                                    <p class="mb-0">{{ $turno->User->nombre }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="far fa-calendar-alt fa-2x text-success me-3"></i>
                                <div>
                                    <h6 class="mb-0">Fecha</h6>
                                    <p class="mb-0">{{ $turno->fecha_turno }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="far fa-clock fa-2x text-warning me-3"></i>
                                <div>
                                    <h6 class="mb-0">Hora</h6>
                                    <p class="mb-0">{{ $turno->hora_turno }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-money-bill-alt fa-2x text-danger me-3"></i>
                                <div>
                                    <h6 class="mb-0">Precio</h6>
                                    <p class="mb-0">${{ $turno->servicio->precio }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('turnos.mis_turnos') }}" class="btn btn-outline-primary me-2">
                            <i class="fas fa-arrow-left me-2"></i>Volver a Mis Turnos
                        </a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cancelModal">
                            <i class="fas fa-times-circle me-2"></i>Cancelar Turno
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmación -->
<div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cancelModalLabel">Confirmar Cancelación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas cancelar este turno?</p>
                <p class="text-muted">Esta acción no se puede deshacer.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <form action="{{ route('turnos.eliminar', $turno->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Confirmar Cancelación</button>
                </form>
            </div>
        </div>
    </div>
</div>

    @include('partials.footer')

</body>

</html>