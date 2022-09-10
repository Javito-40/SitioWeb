<?php include('template/cabecera.php')  ?>

<center>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/bueno.jpg" class="d-block w-50" alt="50">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="img/reparacion.jpg" class="d-block w-50" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="img/logo.png" class="d-block w-20" alt="50">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</center>
<br>
<br>



<div class="jumbotron text-center">
    <h1 class="display-3 text-primary">Bienvenido a Reparación Celular</h1>
    <p class="lead">Consulta tus productos</p>
    <hr class="my-2">

    <p>Ver catálago</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="productos.php" role="button">Ver almacen de productos</a>
    </p>
</div>


<?php include('template/pie.php');  ?>