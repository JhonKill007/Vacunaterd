<?php



$cedula = $_POST['cedula'];


// echo $cedula;
// echo $segunda;

if (!empty($cedula)) {
    require("connection.php");
    
    if ($conn){
        $DELETE = "DELETE FROM vacunados WHERE cedula='$cedula'";
        $resultado = mysqli_query($conn,$DELETE);
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
