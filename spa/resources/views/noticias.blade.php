<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    @include('partials.header')

    <div class="container mt-5">
        <h1 class="section-title">Noticias Recientes</h1>

        <!-- Revisión si hay noticias -->
        @if($noticias->isEmpty())
            <div class="alert alert-info shadow-sm" role="alert">
                <i class="fas fa-info-circle me-2"></i> No hay noticias disponibles en este momento.
            </div>
        @else
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($noticias as $noticia)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ $noticia->imagen_url }}" class="card-img-top" alt="Imagen de la noticia">
                            <div class="card-body">
                                <h5 class="card-title">{{ $noticia->titulo }}</h5>
                                <p class="card-text">{{ Str::limit($noticia->resumen, 100, '...') }}</p>
                                <p class="text-muted">
                                    <i class="far fa-calendar-alt me-2"></i>Publicado el:
                                    {{ \Carbon\Carbon::parse($noticia->fecha_publicacion)->format('d/m/Y') }}
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-top-0 d-flex justify-content-between align-items-center">
                                <a href="{{ route('noticias.detalle_noticia', ['id' => $noticia->id]) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-info-circle me-1"></i>Leer Más
                                </a>
                                <span class="badge bg-info text-dark">by {{ $noticia->autor }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </div>

    @include('partials.footer')
</body>

</html>
