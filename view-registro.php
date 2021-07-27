<?php

require("head.php");





$cedula = $_GET['registro'];
// $cedula = 7487834784;
require("keys/connection.php");
if ($conn) {
    $SELECT = "SELECT * FROM vacunados WHERE cedula = $cedula";
    $resultado = mysqli_query($conn, $SELECT);

    if ($vac = $resultado->fetch_array()) {
        if ($vac['fechasegunda'] == '') {
?>
            <div class="section-container" id="contact-section-container">
                <div class="container contact-form-container">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-2 col-md-8">
                            <div class="section-container-spacer">
                                <h2 class="text-center">Ingrese Segunda Dosis</h2>
                            </div>
                            <form action="keys/segundadosis.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $cedula; ?>" disabled>
                                    <input type="hidden" value="<?php echo $cedula; ?>" name="cedula">

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $vac['nombre']; ?>" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $vac['apellido']; ?>" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" value="<?php echo $vac['vacuna']; ?>" class="form-control" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" value="<?php echo $vac['provincia']; ?>" class="form-control" disabled>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="primera">Fecha Primera Dosis</label>
                                            <input type="text" value="<?php echo $vac['fechaprimera']; ?>" class="form-control" disabled>

                                            <!-- <input type="text" name="primera" class="form-control" placeholder="10/01/2021"> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="segunda">Fecha Segunda Dosis</label>
                                            <input type="date" class="form-control" name="segunda" id="">
                                            <!-- <input type="text"  class="form-control" placeholder="10/01/2021"> -->
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } else {

        ?>
            <div class="section-container" id="contact-section-container">
                <div class="container contact-form-container">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-2 col-md-8">
                            <div class="section-container-spacer">
                                <h2 class="text-center">Dosis Completas</h2>
                            </div>
                            <form action="keys/eliminar-registro.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $cedula; ?>" disabled>
                                    <input type="hidden" value="<?php echo $cedula; ?>" name="cedula">

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $vac['nombre']; ?>" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" value="<?php echo $vac['apellido']; ?>" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" value="<?php echo $vac['vacuna']; ?>" class="form-control" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" value="<?php echo $vac['provincia']; ?>" class="form-control" disabled>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="primera">Fecha Primera Dosis</label>
                                            <input type="text" value="<?php echo $vac['fechaprimera']; ?>" class="form-control" disabled>

                                            <!-- <input type="text" name="primera" class="form-control" placeholder="10/01/2021"> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="segunda">Fecha Segunda Dosis</label>
                                            <input type="text" value="<?php echo $vac['fechasegunda']; ?>" class="form-control" disabled>
                                            <!-- <input type="text"  class="form-control" placeholder="10/01/2021"> -->
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php

        }
    }
} else {
    echo "la coneccion fallo";
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