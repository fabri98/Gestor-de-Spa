<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Turno</title>
</head>

<body>

    @include('partials.header')
    <div class="container">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header text-center" >
                <h2 class="section-title">Reserva tu Turno</h2>
            </div>
            <div class="card-body">
                <form id="turnoForm" method="POST" action="{{ url('/guardar-turno')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="id_servicio_visible" class="form-label">Servicio:</label>
                        <select name="id_servicio_visible" id="id_servicio_visible" class="form-select" disabled>
                            <option value="">Seleccione un servicio</option>
                            @foreach($servicios as $servicio)
                                <option value="{{ $servicio->id }}" {{ request()->get('servicio') == $servicio->id ? 'selected' : '' }}>
                                    {{ $servicio->nombre_servicio }}
                                </option>
                            @endforeach
                        </select>

                        <input type="hidden" name="id_user" value="{{ Auth::id() }}">
                        
                        <input type="hidden" name="id_servicio" value="{{ request()->get('servicio') }}">
                    </div>
                    <div class="mb-3">
                        <label for="fecha_turno" class="form-label">Fecha del Turno:</label>
                        <input type="date" id="fecha_turno" name="fecha_turno" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora_turno" class="form-label">Hora del Turno:</label>
                        <select name="hora_turno" id="hora_turno" class="form-select" required>
                            <option value="">Seleccione una hora</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100">Reservar Turno</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const fechaTurnoInput = document.getElementById('fecha_turno');
            const horaTurnoSelect = document.getElementById('hora_turno');
            const form = document.getElementById('turnoForm');

            // Establecer la fecha mínima como hoy
            const today = new Date().toISOString().split('T')[0];
            fechaTurnoInput.min = today;

            // Generar opciones de hora (de 8:00 a 20:30 con intervalos de 30 minutos)
            function generateTimeOptions() {
                horaTurnoSelect.innerHTML = '<option value="">Seleccione una hora</option>';
                for (let h = 8; h <= 20; h++) {
                    for (let m = 0; m < 60; m += 30) {
                        if (h === 20 && m === 30) break; // Limita hasta 20:30
                        const hour = h.toString().padStart(2, '0') + ':' + m.toString().padStart(2, '0');
                        const option = document.createElement('option');
                        option.value = hour;
                        option.textContent = hour;
                        horaTurnoSelect.appendChild(option);
                    }
                }
            }

            generateTimeOptions();

            // Validar que la fecha no sea anterior a hoy
            fechaTurnoInput.addEventListener('change', function () {
                if (this.value < today) {
                    alert('No puedes seleccionar una fecha anterior a hoy.');
                    this.value = '';
                }
            });


            form.addEventListener('submit', function (e) {
                e.preventDefault();
                
                this.submit();
            });
        });
    </script>


    @include('partials.footer')
</body>

</html>
