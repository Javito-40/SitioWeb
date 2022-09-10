<?php include("template/cabecera.php"); ?>


<?php
include("Administrador/config/bd.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaProductos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>



<a name="" id="" class="btn btn-primary" href="https://www.facebook.com/mitiendapctuxpan/shop/?referral_code=page_shop_tab&preview=1" role="button">Más artículos de Reparación Celular</a>



<?php foreach ($listaProductos as $producto) { ?>
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="./img/<?php echo $producto['imagen']; ?>" height="264 px" alt="">

            <div class=" card-body">
                <h4 class="card-title text-center"><?php echo $producto['nombre']; ?></h4>


            </div>
        </div>
    </div>




<?php } ?>









<?php include("template/pie.php"); ?>