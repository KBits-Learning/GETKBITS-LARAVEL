
<!--show image of user ,name , and co-->
<?php
include("conexion.php");
session_start();
if (!isset( $_SESSION['id_usuario'])){
    header("Location: index.php");
}

$iduser = $_SESSION['id_usuario'];

$sql = "SELECT idusuarios,NombreC, company FROM usuarios WHERE idusuarios = '$iduser'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

?>
<!--- CHANCHE CONEXIONS -->