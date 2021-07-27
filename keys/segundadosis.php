<?php



$segunda = $_POST['segunda'];
$cedula = $_POST['cedula'];


// echo $cedula;
// echo $segunda;

if (!empty($cedula) || !empty($segunda)) {
    require("connection.php");
    
    if ($conn) {
        $UPDATE = "UPDATE vacunados SET fechasegunda ='$segunda' Where cedula='$cedula'";
        $resultado = mysqli_query($conn,$UPDATE);
        if ($resultado) {
            echo "registrado";
            session_start();
            if (isset($_SESSION['id'])) {
                header("Location: ../vac-usu.php");
            } else {
                header("Location: ../vacunados.php");
            }
        } else {
            echo "valio verga";
        }
    } else {
        echo "la connecion fallo";
    }
} else {
    echo "todos los datos son OBLIGATORIOS";
    header("Location: agregar.php");
}
