<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Noticia</title>


</head>

<body>
    @include('partials.header')

    <div class="container mt-5 mb-5 news-detail">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <article class="card shadow-sm">
                        <img src="{{ $noticia->imagen_url }}" class="card-img-top" alt="Imagen de la noticia">
                        <div class="card-body">
                            <h1 class="card-title mb-3">{{ $noticia->titulo }}</h1>
                            <p class="text-muted mb-3">
                                <i class="bi bi-person-fill me-2"></i>Por {{ $noticia->autor }}
                                <span class="mx-2">|</span>
                                <i
                                    class="bi bi-calendar-event me-2"></i>{{ \Carbon\Carbon::parse($noticia->fecha_publicacion)->format('d/m/Y') }}
                            </p>
                            <h5 class="card-subtitle mb-3 text-muted">{{ $noticia->resumen }}</h5>
                            <div class="card-text">
                                {!! $noticia->contenido !!}
                            </div>
                        </div>
                    </article>

                    <div class="mt-4">
                        <a href="{{ url('/noticias') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left me-2"></i>Volver a Noticias
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')


</body>

</html>