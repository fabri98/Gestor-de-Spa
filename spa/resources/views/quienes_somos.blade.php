<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes Somos - Sentirse Bien Spa</title>
</head>

<body>
    @include('partials.header')


    <div class="content">
        <div class="hero-image d-flex align-items-center justify-content-center">
            <h1 class="section-title" style="color:white;">Quienes Somos</h1>
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-4">Nuestra Historia</h2>
                    <p>Fundado en 2010, Sentirse Bien Spa nació con la visión de proporcionar un oasis de tranquilidad
                        en medio del ajetreo diario. Nos dedicamos a ofrecer experiencias de bienestar que rejuvenecen
                        cuerpo y mente.</p>
                    <p>Con años de experiencia y un equipo de profesionales altamente calificados, nos hemos convertido
                        en el destino preferido para aquellos que buscan relajación y renovación.</p>
                    <p>Nuestros valores de excelencia, personalización y hospitalidad son los pilares que nos impulsan a
                        seguir mejorando y ofreciendo experiencias inolvidables de bienestar. En Sentirse Bien Spa, no
                        solo brindamos servicios; creamos momentos que revitalizan el espíritu y renuevan la vitalidad,
                        haciendo de cada visita una experiencia transformadora.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/salon_spa.jpg') }}" alt="Interior del spa" class="img-fluid rounded">
                </div>
            </div>
        </div>

        <div class="bg-white py-5">
            <div class="container">
                <h2 class="text-center mb-5">Algunos de Nuestros Servicios</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('img/masaje_tera.webp') }}" class="card-img-top" alt="Masajes">
                            <div class="card-body">
                                <h5 class="card-title">Masajes Terapéuticos</h5>
                                <p class="card-text">Experimenta la relajación profunda con nuestros masajes
                                    personalizados.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('img/masaje_de_cara.jpg') }}" class="card-img-top"
                                alt="Tratamientos faciales">
                            <div class="card-body">
                                <h5 class="card-title">Tratamientos Faciales</h5>
                                <p class="card-text">Rejuvenece tu piel con nuestros tratamientos faciales de última
                                    generación.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('img/hidroterapia.webp') }}" class="card-img-top" alt="Hidroterapia">
                            <div class="card-body">
                                <h5 class="card-title">Hidroterapia</h5>
                                <p class="card-text">Sumérgete en la relajación con nuestros tratamientos de
                                    hidroterapia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <h2 class="text-center mb-4">Conoce Todos Nuestros Servicios</h2>
            <p class="text-center">En Sentirse Bien Spa, contamos con un equipo de profesionales dedicados y altamente
                capacitados. Cada miembro está comprometido con proporcionar el mejor cuidado y experiencia a nuestros
                clientes.</p>
            <div class="text-center mt-4">
                <a href="{{ url('/servicios') }}" class="btn btn-primary">Reservar Ahora</a>
            </div>
        </div>

        
    </div>

    @include('partials.footer')
</body>

</html>