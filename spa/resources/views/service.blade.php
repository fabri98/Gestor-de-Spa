<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <title>Nuestros Servicios</title>

</head>

<body>

    @include('partials.header')

    <div class="container py-5">
        <h1 class="section-title">Nuestros Servicios</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($servicios as $servicio)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('uploads/' . $servicio->imagen) }}" class="card-img-top"
                            alt="{{ $servicio->nombre_servicio }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $servicio->nombre_servicio }}</h5>
                            <p class="card-text">{{ Str::limit($servicio->descripcion, 180) }}</p>
                            <p class="card-text"><strong>Precio: ${{ number_format($servicio->precio, 2) }}</strong></p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ url('/reservar-turno?servicio=' . $servicio->id) }}"
                                class="btn btn-primary">Reservar ahora</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    @include('partials.footer')

    
</body>

</html>