<?php

require("head.php");

?>


<!-- <div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 section-container-spacer">
                <h1 class="text-center">Vacunados</h1>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</div> -->


<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 section-container-spacer">
                <h2 class="text-center">Consultas Por Nombre</h2>
            </div>
        </div>
        <div class="row">
            <div class="conteiner">
                <div class="head-box">
                    <div class="category">
                        <a href="consulta-va.php">
                            <h4>Consulta por Vacunas</h4>
                        </a>
                    </div>
                    <div class="category">
                        <a href="consulta-pro.php">
                            <h4>Consulta por Provincia</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="section-container" id="contact-section-container">
    <div class="container contact-form-container">
        <div class="row">
            <div class="col-xs-12 col-md-offset-2 col-md-8">
                <div class="section-container-spacer">
                    <span>Buscar registro por Nombre o Apellido.</span>
                </div>
                <form action="" method="post">
                    <div class="form-group col-sm-10">
                        <input type="text" name="busqueda" class="form-control" placeholder="Nombre o Apellido" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require("keys/connection.php");
if (isset($_POST['busqueda'])) {
    $word = $_POST['busqueda'];
    // echo $vacuna;

    if ($conn) {
        $SELECT = "SELECT * FROM vacunados WHERE (nombre LIKE '%$word%') OR (apellido LIKE '%$word%')";
        $resultado = mysqli_query($conn, $SELECT);
        if ($resultado) {
            require("modulos/datos.php");
        } else {
            echo " se fue a la verga";
        }
    } else {
        echo "la coneccion fallo";
    }
} else {
    if ($conn) {
        $SELECT = "SELECT * FROM vacunados";
        $resultado = mysqli_query($conn, $SELECT);
        if ($resultado) {
            require("modulos/datos.php");
        } else {
            echo " se fue a la verga";
        }
    } else {
        echo "la coneccion fallo";
    }
}
?>


<div class="conteiner-fotos">
    <div class="foto">
        <img src="img/01.jpg" alt="">
    </div>
    <div class="foto">
        <img src="img/02.jpg" alt="">
    </div>
    <div class="foto">
        <img src="img/03.jpg" alt="">
    </div>
</div>
<div class="conteiner-fotos">
    <div class="foto">
        <img src="img/04.jpg" alt="">
    </div>
    <div class="foto">
        <img src="img/05.jpg" alt="">
    </div>
    <div class="foto">
        <img src="img/06.jpg" alt="">
    </div>
</div>





<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        googleMapInit();
        scrollToAnchor();
        scrollRevelation('reveal');
    });
</script>

<?php
require("footer.php");
?>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        navbarToggleSidebar();
    });
</script>


<script type="text/javascript" src="./main.faaf51f9.js"></script>