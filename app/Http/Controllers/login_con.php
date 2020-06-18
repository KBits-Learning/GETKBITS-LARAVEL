
<!--- conexion to index-->
<?php
include("conexion.php");
include("enviar_correo.php");

session_start();
if (isset( $_SESSION['id_usuario'])){
    header("Location: admin.php");
}


//Login

if (isset($_POST["ingresar"])){
    $usuario = mysqli_real_escape_string($conexion,$_POST['user']);
    $password = mysqli_real_escape_string($conexion,$_POST['pass']);

    $password_encriptada = sha1($password);

    $sql = "SELECT idusuarios FROM usuarios WHERE usuario = '$usuario' AND password = '$password_encriptada' AND Estado = '1' ";
    $resultado = $conexion->query($sql);

    $rows = $resultado->num_rows;

    if($rows > 0){
        $row = $resultado->fetch_assoc();
        $_SESSION['id_usuario'] = $row['idusuarios'];
        header("Location: admin.php");

    }else{
         echo"<script>
        alert('Usuario o password incorrecto');
        window.location = 'index.php';
        </script>";

    }


}



//Registrar usuarios

if(isset($_POST["registrar"])){
    $nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
    $correo = mysqli_real_escape_string($conexion,$_POST['correo']);
    $usuario = mysqli_real_escape_string($conexion,$_POST['user']);
    $password = mysqli_real_escape_string($conexion,$_POST['pass']);
    $password_encriptada = sha1($password);
    $Confirmar = sha1(rand(0,1000));


    $sqluser ="SELECT idusuarios FROM usuarios
               WHERE usuario = '$usuario'";

    $resultadoUser = $conexion->query($sqluser);

    $filas = $resultadoUser->num_rows;

    if ($filas > 0){
        echo"<script>
        alert('El usuario ya existe');
        window.location = 'index.php';
        </script>";

    }else{
        $sqlusuario = "INSERT INTO usuarios(NombreC,Correo,usuario,password,Confirmar)
        VALUES('$nombre','$correo','$usuario','$password_encriptada','$Confirmar')";
        $resultadoUsuario = $conexion->query($sqlusuario);

        if ($resultadoUsuario > 0){
            echo "<script>
            alert('Registro exitoso, tu cuenta fue creada satisfactoriamente, confirma tu correo para completar');
            window.location = 'index.php';
            </script>";

            $para_usuario = $correo;
            $asunto = 'verifica tu cuenta(KBITS.com)';
            $mensaje = 'Hola '.$nombre. ' gracias por registrarte!
            Confirma tu cuenta haciendo click en el siguiente link:
            http://localhost/LoginPHP2/activar_correo.php?email='.$correo.'&Confirmar='.$Confirmar;

            sendEmail($para_usuario,$asunto,$mensaje);

            }else{
            echo "<script>
            alert('Error al registrarse');
            window.location = 'index.php';
            </script>";

        }

    }
}

?>
