<?php 
    include_once("modulos/header.php");
    include_once("modulos/p_navbar.php");
?>

<main class="container mt-5">
    <style>
        body {
            background-color: #222;
            font-family: 'Arial', sans-serif; 
            color: #fff; 
        }

        .hero {
            background-color: rgba(36, 248, 3, 0.414); 
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); 
        }

        h2, h3 {
            font-weight: 700; 
            font-size: 2.5em; 
        }

        p.lead {
            font-size: 1.2em; 
        }

        .carousel-inner img {
            width: 100%; 
            max-height: 400px;
            object-fit: cover;
        }

        .productos-destacados .card {
            background-color: rgba(0, 0, 0, 0.6); 
            border: none;
            color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
            border-radius: 10px; 
        }

        .productos-destacados .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0, 255, 0, 0.8);
        }

        .btn-secondary {
            background-color: #005f5f; 
            border: none;
        }

        .btn-secondary:hover {
            background-color: #007777; 
        }

        .testimonios {
            background-color: rgba(0, 0, 0, 0.6); 
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            color: white; 
        }

        blockquote {
            font-size: 1.5em; 
            background-color: rgba(0, 255, 0, 0.4);
            border-radius: 8px; 
            padding: 15px; 
        }
    </style>

    <!-- Sección Hero -->
    <section class="hero text-center p-5">
        <h2>Bienvenido a Visual Guide</h2>
        <p class="lead">Mantén tu autonomía, seguridad y confianza con nuestra tecnología de guía.</p>
    </section>
    <br>
    <?php
    include_once("mapa/mapa.php");
    ?>
    <br>

    <!-- Carrusel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/visual_guide/img/carrusel2.png" class="d-block" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="http://localhost/visual_guide/img/carrusel1.jpg" class="d-block" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="http://localhost/visual_guide/img/carrusel3.png" class="d-block" alt="Imagen 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <br>

    <!-- Productos Destacados -->
    <section class="productos-destacados text-center">
        <h3 class="mb-4">Productos Destacados</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="http://localhost/visual_guide/img/baston1.jpg" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">Bastón Inteligente</h5>
                        <p class="card-text">Bastón con sensores que detecta obstáculos y guía al usuario.</p>
                        <a href="http://localhost/visual_guide/paginas/beneficios.php" class="btn btn-secondary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="http://localhost/visual_guide/img/menbaston.jpg" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Explora el mundo</h5>
                        <p class="card-text">Sal libremente por las calles.</p>
                        <a href="http://localhost/visual_guide/paginas/beneficios.php" class="btn btn-secondary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="http://localhost/visual_guide/img/mujerb.png" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">Diseños comodos </h5>
                        <p class="card-text">Aparatos diseñados para el uso diario.</p>
                        <a href="http://localhost/visual_guide/paginas/beneficios.php" class="btn btn-secondary">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    <!-- Testimonios -->
    <section class="testimonios text-center p-5">
        <h3 class="mb-4">Testimonios de Clientes</h3>
        <div class="row">
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p class="mb-0">“El bastón electronico ha cambiado mi vida. Puedo moverme con confianza.”</p>
                    <footer class="blockquote-footer mt-3">Tequila Marin</footer>
                </blockquote>
            </div>
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p class="mb-0">“Gracias a Visual Guide, me siento más seguro al salir a la calle.”</p>
                    <footer class="blockquote-footer mt-3">Gary Osorio</footer>
                </blockquote>
            </div>
        </div>
    </section>
</main>

<?php
    include_once("modulos/footer.php");
?>  
