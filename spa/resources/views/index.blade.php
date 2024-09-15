<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería - Sentirse Bien SPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
    @include('partials.header')

    <main class="container py-5">
        <h1 class="section-title" data-aos="fade-down">Galería de Sentirse Bien</h1>

        <div id="mainCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/flores_rosadas.jpg" class="d-block w-100" alt="Flores rosadas">
                </div>
                <div class="carousel-item">
                    <img src="img/salon_spa.jpg" class="d-block w-100" alt="Salón del spa">
                </div>
                <div class="carousel-item">
                    <img src="img/masaje_de_cara.jpg" class="d-block w-100" alt="Masaje facial">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <div class="row gallery-grid">
            <div class="col-md-5 col-sm-6" data-aos="fade-up"><img src="img/Montañas.jpg" alt="Tratamiento 1" class="img-fluid"></div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100"><img src="img/flores_rosadas.jpg" alt="Tratamiento 2" class="img-fluid"></div>
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200"><img src="img/arbol_naranja.png" alt="Tratamiento 3" class="img-fluid"></div>
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300"><img src="img/salon_spa.jpg" alt="Ambiente 1" class="img-fluid"></div>
            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400"><img src="img/masaje_de_cara.jpg" alt="Ambiente 2" class="img-fluid"></div>
            <div class="col-md-5 col-sm-6" data-aos="fade-up" data-aos-delay="500"><img src="img/velas.jpg" alt="Ambiente 3" class="img-fluid"></div>
        </div>

        <div class="mt-5" data-aos="fade-up">
            <h2 class="text-center mb-4">¡Déjanos un comentario!</h2>
            <form action="{{ url('/enviar-comentario') }}" method="POST" class="comment-form">
                @csrf
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Comentar aquí" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar comentario</button>
            </form>
        </div>
    </main>

    @include('partials.footer')

    
</body>
</html>