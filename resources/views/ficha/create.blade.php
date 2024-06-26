<x-layouts.app>
    <link rel="stylesheet" href="{{ asset('css/ticket.css') }}">
    <x-app.breadcrumbs title="Ficha" rutaActual="Ficha  /  Crear" />
    <section class="fondo container col-sm-12 d-flex align-items-center justify-content-center inner-page">
        <div class="ticket row p-10">
            <div class="card col-sm-6 text-center">
                <div class="card-header bg-white">
                  Ficha de atención
                </div>
                <br/>
                <div class="card-body">
                    <!-- Tendré como resultado de la interpretación de la IA la especialidad que tratará el padecimiento. -->
                  <h4 class="card-title">Especialidad: {{ $especialidad->nombre }}</h4>
                  <h6 class="card-subtitle le">Enfermedad detectada: {{ $especialidad->enfermedades->first()->nombre }}</h6>
                  <br/>
                  <br/>
                  <p class="card-text">A continuación elija el doctor con el cual será atendido.</p>
                  <br/>
                    <form action=" {{ route('factura.imprimir') }}" method="post">
                        @csrf
                        <div class="dropdown-center">
                           <span class="btn bg-primary " >
                            Doctor Especialista
                            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="doctor_id">
                            <option selected>Seleccione un doctor</option>
                            @foreach($doctores as $doctor)
                                <option name="doctor_id" value="{{ $doctor -> doctor->id }}">{{ $doctor -> doctor->nombre }}</option>
                            @endforeach
                            </select>
                            </span>
                        </div>
                        <br/>
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </form>
                </div>
              </div>
              <img src="{{ asset('img/doctors.png') }}" class="img-doctors rounded" alt="Doctors" style="width: 400px;">
        </div>
    </section>
    <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</x-layouts.app>

{{-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Medicine</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/ticket.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="body">
        <section class="fondo container col-sm-12 d-flex align-items-center justify-content-center">
            <div class="ticket row p-10">
                <div class="card col-sm-6 text-center">
                    <div class="card-header bg-white">
                      Ficha de atención
                    </div>
                    <br/>
                    <div class="card-body">
                        <!-- Tendré como resultado de la interpretación de la IA la especialidad que tratará el padecimiento. -->
                      <h4 class="card-title">Especialidad: {{ $especialidad->nombre }}</h4>
                      <h6 class="card-subtitle le">Enfermedad detectada: {{ $especialidad->enfermedades->first()->nombre }}</h6>
                      <br/>
                      <br/>
                      <p class="card-text">A continuación elija el doctor con el cual será atendido.</p>
                      <br/>
                        <form action=" {{ route('factura.imprimir') }}" method="post">
                            @csrf
                            <div class="dropdown-center">
                               <span class="btn bg-primary " >
                                Doctor Especialista
                                <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="doctor_id">
                                <option selected>Seleccione un doctor</option>
                                @foreach($doctores as $doctor)
                                    <option name="doctor_id" value="{{ $doctor -> doctor->id }}">{{ $doctor -> doctor->nombre }}</option>
                                @endforeach
                                </select>
                                </span>
                            </div>
                            <br/>
                            <button type="submit" class="btn btn-success">Agregar</button>
                        </form>
                    </div>
                  </div>
                  <img src="{{ asset('img/doctors.png') }}" class="img-doctors rounded" alt="Doctors" style="width: 400px;">
            </div>
        </section>

        <script src="" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    </body>
</html> --}}
