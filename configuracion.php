<?php

require("head.php");


require("keys/connection.php");



// vacunas
if (isset($_POST['vacunaagregar'])) {
    $vacunaagregar = $_POST['vacunaagregar'];
    // echo $vacuna;

    if ($conn) {
        $INSERT = "INSERT INTO vacunas (nombrevacuna)values('$vacunaagregar')";
        $resultado = mysqli_query($conn, $INSERT);
        if ($resultado) {
            echo "<script>alert('Vacuna registrada.');</script>";
        } else {
            echo " se fue a la verga";
        }
    } else {
        echo "la coneccion fallo";
    }
}



if (isset($_POST['idedit']) || isset($_POST['vacunaedit'])) {
    $idedit = $_POST['idedit'];
    $vacunaedit = $_POST['vacunaedit'];
    // echo $vacuna;

    if ($conn) {
        $UPDATE = "UPDATE vacunas SET nombrevacuna='$vacunaedit' Where id_vacuna='$idedit'";
        $resultado = mysqli_query($conn, $UPDATE);
        if ($resultado) {
            echo "<script>alert('Vacuna Modificada.');</script>";
        } else {
            echo " se fue a la verga";
        }
    } else {
        echo "la coneccion fallo";
    }
}






// provincias
if (isset($_POST['agregarpro'])) {
    $agregarpro = $_POST['agregarpro'];
    // echo $vacuna;

    if ($conn) {
        $INSERT = "INSERT INTO provincias (provincias_nombre)values('$agregarpro')";
        $resultado = mysqli_query($conn, $INSERT);
        if ($resultado) {
            echo "<script>alert('Provincia registrada.');</script>";
        } else {
            echo " se fue a la verga";
        }
    } else {
        echo "la coneccion fallo";
    }
}



if (isset($_POST['idpro']) || isset($_POST['editpro'])) {
    $idpro = $_POST['idpro'];
    $editpro = $_POST['editpro'];
    // echo $vacuna;

    if ($conn) {
        $UPDATE = "UPDATE provincias SET provincias_nombre='$editpro' Where id_provincias='$idpro'";
        $resultado = mysqli_query($conn, $UPDATE);
        if ($resultado) {
            echo "<script>alert('Provincia Modificada.');</script>";
        } else {
            echo " se fue a la verga";
        }
    } else {
        echo "la coneccion fallo";
    }
}

?>



<div class="section-container" id="contact-section-container">
    <div class="container contact-form-container">
        <div class="row">
            <div class="col-xs-12 col-md-offset-2 col-md-8">
                <div class="section-container-spacer">
                    <h2 class="text-center">Configuracion</h2>
                </div>







                <h3 class="text-center">Vacunas</h3>
                <div class="block-center">
                    <h4 class="text-center">Agregar Vacuna</h4>
                    <div class="block">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12 abc">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="vacunaagregar" id="">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>






                <div class="block-center">
                    <h4 class="text-center">Modificar Vacuna</h4>
                    <div class="block">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12 abc">
                                    <div class="form-group">
                                        <select class="form-control" id="" name="idedit" required>
                                            <option selected>Tipo Vacuna</option>
                                            <?php
                                            if ($conn) {
                                                $SELECT = "SELECT * FROM vacunas";
                                                $resultado = mysqli_query($conn, $SELECT);
                                                if ($resultado) {
                                                    while ($van = $resultado->fetch_array()) {
                                            ?>
                                                        <option value="<?php echo $van['id_vacuna']; ?>"><?php echo $van['nombrevacuna']; ?></option>
                                            <?php
                                                    }
                                                } else {
                                                    echo " se fue a la verga";
                                                }
                                            } else {
                                                echo "la coneccion fallo";
                                            }
                                            ?>
                                        </select>
                                        <input type="text" class="form-control" placeholder="Nuevo Nombre" name="vacunaedit" id="">


                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Modificar</button>
                        </form>
                    </div>
                </div>




                <br>
                <br>
                <br>
                <br>

                <h3 class="text-center">Provincias</h3>
                <div class="block-center">
                    <h4 class="text-center">Agregar Provincias</h4>
                    <div class="block">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12 abc">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="agregarpro" id="">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>






                <div class="block-center">
                    <h4 class="text-center">Modificar Provincias</h4>
                    <div class="block">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12 abc">
                                    <div class="form-group">
                                        <select class="form-control" id="" name="idpro" required>
                                            <option selected>Provincias</option>
                                            <?php
                                            if ($conn) {
                                                $SELECT = "SELECT * FROM provincias";
                                                $resultado = mysqli_query($conn, $SELECT);
                                                if ($resultado) {
                                                    while ($pro = $resultado->fetch_array()) {
                                            ?>
                                                        <option value="<?php echo $pro['id_provincias']; ?>"><?php echo $pro['provincias_nombre']; ?></option>
                                            <?php
                                                    }
                                                } else {
                                                    echo " se fue a la verga";
                                                }
                                            } else {
                                                echo "la coneccion fallo";
                                            }
                                            ?>
                                        </select>
                                        <input type="text" class="form-control" placeholder="Nuevo Nombre de la Provincia" name="editpro" id="">


                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Modificar</button>
                        </form>
                    </div>
                </div>

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