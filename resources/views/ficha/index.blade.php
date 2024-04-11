<x-layouts.app>
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Ficha Medica</h2>
            <ol>
              <li><a href="{{route('welcome')}}">Home</a></li>
              <li>Ficha</li>
            </ol>
          </div>

          <video id="video" autoplay></video>
    <button id="capture-btn">Tomar Foto</button>
    <canvas id="canvas" style="display: none;"></canvas>
    
    <script>
        // Acceder al video de la cámara
        navigator.mediaDevices.getUserMedia({ video: true })
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
  
        </div>
      </section>
</x-layouts.app>