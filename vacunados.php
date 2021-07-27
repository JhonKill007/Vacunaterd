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
                <h2 class="text-center">Cantida de Vacunados</h2>
            </div>
        </div>
        <div class="row">
            <div class="numbercase">
                <?php
                require("keys/connection.php");
                if ($conn) {
                    $SELECT = "SELECT * FROM vacunados";
                    $resultado = mysqli_query($conn, $SELECT);
                    $nume = $resultado->num_rows;
                    if ($resultado) {
                ?>
                        <h1>
                            <?php echo $nume; ?>
                        </h1>
                <?php

                    } else {
                        echo " se fue a la verga";
                    }
                } else {
                    echo "la coneccion fallo";
                }
                ?>
            </div>
        </div>
    </div>
</div>


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


<div class="section-container" id="contact-section-container">
    <div class="container contact-form-container">
        <div class="row">
            <div class="col-xs-12 col-md-offset-2 col-md-8">
                <div class="section-container-spacer">
                    <h2 class="text-center">Ingresar Nuevo Vacunado</h2>
                    <span>NOTA: Intrducir digitos sin guiones.</span>
                </div>
                <form action="registrovac.php" method="post">
                    <div class="form-group col-sm-10">
                        <input type="number" name="cedula" class="form-control" placeholder="Cedula" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Siguiente</button>
                </form>
            </div>
        </div>
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