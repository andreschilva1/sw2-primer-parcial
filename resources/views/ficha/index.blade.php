<x-layouts.app>
    <x-app.breadcrumbs title="Ficha Medica" rutaActual="Ficha" />

    <section class="inner-page">
        <div class="container d-flex justify-content-center">
            <div class="card" style="width: 30rem;">
                <video id="video" class="card-img-top" autoplay></video>
                <canvas id="canvas" style="display: none;"></canvas>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text fst-italic fw-bolder">Por favor, tome una foto clara de la zona afectada para
                        una detección precisa de la enfermedad, ¡Gracias!
                        <i class="fas fa-smile" style="font-size: 24px; color: rgba(244, 220, 2, 0.877); "></i> <i
                            class="fas fa-band-aid" style="font-size: 24px; color: red;"></i>
                    </p>
                    <div class="d-flex justify-content-center">
                        <a id="capture-btn" class="btn btn-primary" href="{{route('ficha.create')}}">Tomar Foto</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script>
        // Acceder al video de la cámara
        navigator.mediaDevices.getUserMedia({
                video: true
            })
            .then(function(stream) {
                var video = document.getElementById('video');
                video.srcObject = stream;
                video.play();
            })
            .catch(function(err) {
                console.log("Error: " + err);
            });

        // Capturar foto
        document.getElementById('capture-btn').addEventListener('click', function() {
            var canvas = document.getElementById('canvas');
            var video = document.getElementById('video');
            var context = canvas.getContext('2d');

            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            // Aquí puedes enviar la imagen capturada al servidor usando AJAX o cualquier otro método
            var imageData = canvas.toDataURL('image/jpeg');
            console.log(imageData); // Imprime los datos de la imagen en la consola
        });
    </script>
</x-layouts.app>
