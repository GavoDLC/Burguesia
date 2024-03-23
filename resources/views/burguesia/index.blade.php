

@include('burguesia.header')


{{-- justify-content-center text-center --}}


    <div class="text-center">
        <video src="img/restaurant.mp4" class="object-fit-scale" width="57%" autoplay controls muted></video>
    </div>

   
    <div class="text-center">
        <h2>———Galeria———</h2>
        <div id="carouselExample" class="carousel slide" style="width: 70%; margin: 0 auto;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/imagen1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/imagen2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/imagen3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="text-center">
        <h2>———Ubicación———</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15118.796060141516!2d-88.389356!3d18.6774977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5bb19cacac039d%3A0xf78e6e0a829b436a!2sLa%20Burgues%C3%ADa%20del%20Pueblo!5e0!3m2!1ses!2smx!4v1710813132548!5m2!1ses!2smx"
            width="50%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <div class="text-center justify-content-center">
        <h2>———Comentarios———</h2>
        <h2>Deja tu comentario</h2>

        <div style="display: flex; justify-content: center;">
            <form action="" class="col-5">
                <div class="form">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" required>
                    <small id="nombreHelp" class="form-text text-muted">Introduce tu nombre.</small>
                </div>

                <div class="form-group">
                    <label for="comentario">Comentario:</label>
                    <textarea class="form-control" id="comentario" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="calificacion">Calificación:</label>
                    <select class="form-control" id="calificacion" required>
                        <option value="">Seleccionar...</option>
                        <option value="1">1 estrella</option>
                        <option value="2">2 estrellas</option>
                        <option value="3">3 estrellas</option>
                        <option value="4">4 estrellas</option>
                        <option value="5">5 estrellas</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Enviar comentario</button>
            </form>
        </div>
        <h3>Comentarios recientes</h3>
        

 


<div class="container mt-4 col-7">
    <div class="row">
        <div class="col">
            <div class="d-flex">
                <div class="me-3">
                    <i class="fas fa-user fa-2x"></i> <!-- Icono de persona -->
                </div>
                <div class="border p-3">
                    <p class="mb-0"><strong>Usuario123:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget justo nec libero ullamcorper lacinia. Sed ut libero nec justo ultricies tincidunt. Donec non enim a odio malesuada tristique.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <!-- Comentario Falso -->
<div class="container mt-4 col-7">
    <div class="row">
        <div class="col">
            <div class="d-flex">
                <div class="me-3">
                    <i class="fas fa-user fa-2x"></i> <!-- Icono de persona -->
                </div>
                <div class="border p-3">
                    <p class="mb-0"><strong>Usuario123:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget justo nec libero ullamcorper lacinia. Sed ut libero nec justo ultricies tincidunt. Donec non enim a odio malesuada tristique.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <!-- Comentario Falso -->
<div class="container mt-4 col-7">
    <div class="row">
        <div class="col">
            <div class="d-flex">
                <div class="me-3">
                    <i class="fas fa-user fa-2x"></i> <!-- Icono de persona -->
                </div>
                <div class="border p-3">
                    <p class="mb-0"><strong>Usuario123:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget justo nec libero ullamcorper lacinia. Sed ut libero nec justo ultricies tincidunt. Donec non enim a odio malesuada tristique.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <!-- Comentario Falso -->
<div class="container mt-4 col-7">
    <div class="row">
        <div class="col">
            <div class="d-flex">
                <div class="me-3">
                    <i class="fas fa-user fa-2x"></i> <!-- Icono de persona -->
                </div>
                <div class="border p-3">
                    <p class="mb-0"><strong>Usuario123:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget justo nec libero ullamcorper lacinia. Sed ut libero nec justo ultricies tincidunt. Donec non enim a odio malesuada tristique.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('burguesia.footer')      