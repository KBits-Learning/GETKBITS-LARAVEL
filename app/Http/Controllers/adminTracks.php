<!--tracks--->
<?php
include("conexion.php");/*-------chanche--*/
session_start();
if (!isset( $_SESSION['id_usuario'])){
    header("Location: main.blade.php");
}

//Registrar Tracks

if(isset($_POST["registrar"])){

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
