<?php


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$vacuna = $_POST['vacuna'];
$provincia = $_POST['provincia'];
$primera = $_POST['primerafecha'];
$segunda = $_POST['segundafecha'];
$cedula = $_POST['cedula'];
// $fecha = $_POST['fecha'];



if (!empty($nombre) || !empty($apellido) || !empty($vacuna) || !empty($primera) || !empty($primera)) {
    require("connection.php");
    
    if ($conn) {
        echo $cedula;
        $INSERT = "INSERT INTO vacunados (nombre,apellido,vacuna,provincia,fechaprimera,fechasegunda,cedula)values('$nombre','$apellido','$vacuna','$provincia','$primera','$segunda','$cedula')";
        $resultado = mysqli_query($conn, $INSERT);
        if ($resultado) {
            echo "registrado";
                header("Location: ../vacunados.php");
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
