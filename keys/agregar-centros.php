<?php



$nombre = $_POST['nombre'];
$provincia = $_POST['provincia'];
$sector = $_POST['sector'];
$vacunas = $_POST['vacunas'];



if(!empty($nombre) || !empty($provincia) || !empty($sector) || !empty($vacunas)){
    require("connection.php");

    if($conn){
        echo "todo bien hasta ahora";
        $INSERT = "INSERT INTO centros (provincia,sector,nombre,vacunas)values('$provincia','$sector','$nombre','$vacunas')";
        $resultado = mysqli_query($conn,$INSERT);
        if($resultado){
            echo "registrado";
            header("Location: ../centros.php");
        }
        else{
            echo "valio verga";
        }
    }
    else{
        echo "la connecion fallo";
    }
}
else{
    echo "todos los datos son OBLIGATORIOS";
    header("Location: agregar.php");
}
?>