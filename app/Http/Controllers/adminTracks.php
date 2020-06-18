<!--tracks--->
<?php
include("conexion.php");/*-------chanche--*/
session_start();
if (!isset( $_SESSION['id_usuario'])){
    header("Location: main.blade.php");
}

$iduser = $_SESSION['id_usuario'];

$sql = "SELECT idusuarios,NombreC, company FROM usuarios WHERE idusuarios = '$iduser'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();


//Registrar Tracks

if(isset($_POST["registrar"])){


    $track = mysqli_real_escape_string($conexion,$_POST['track']);
    $descripcion = mysqli_real_escape_string($conexion,$_POST['descripcion']);
    $imagen = mysqli_real_escape_string($conexion,$_POST['imagen']);


    $sqluser ="SELECT idtrack FROM tracks
               WHERE imagen = '$imagen'";

    $resultadoUser = $conexion->query($sqluser);

    $filas = $resultadoUser->num_rows;

    if ($filas > 0){
        echo"<script>
        alert('ya existe');
        window.location = 'Tracks.php';
        </script>";

    }else{
        $sqlusuario = "INSERT INTO tracks(idusuarios,track,descripcion,imagen)
        VALUES('$iduser','$track','$descripcion','$imagen')";
        $resultadoUsuario = $conexion->query($sqlusuario);

        if ($resultadoUsuario > 0){
            echo "<script>
            alert('Completed');
            window.location = 'Tracks.php';
            </script>";
        }

    }
}

?>
