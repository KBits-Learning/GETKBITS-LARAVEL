<!---
<?php
include("conexion.php");
session_start();
if (!isset( $_SESSION['id_usuario'])){
    header("Location: index.php");
}

$iduser = $_SESSION['id_usuario'];

$sql = "SELECT idusuarios, NombreC FROM usuarios WHERE idusuarios = '$iduser'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

//Obtener id de track
//$idtrack = "SELECT idtrack FROM tracks WHERE track = track";
//$resultado1 = $conexion->query($idtrack);
//$row1 = $resultado1->fetch_assoc();
//$idt = utf8_decode($row1['idtrack']);


//Registrar Packs

if(isset($_POST["registrar"])){


    $pack = mysqli_real_escape_string($conexion,$_POST['pack']);
    $descripcion = mysqli_real_escape_string($conexion,$_POST['descripcion']);
    $imagen = mysqli_real_escape_string($conexion,$_POST['imagen']);
    $link = mysqli_real_escape_string($conexion,$_POST['link']);


    $sqluser ="SELECT idpack FROM packs
               WHERE link = '$link'";

    $resultadoUser = $conexion->query($sqluser);

    $filas = $resultadoUser->num_rows;

    if ($filas > 0){
        echo"<script>
        alert('ya existe');
        window.location = 'Packs.php';
        </script>";

    }else{
        $sqlusuario = "INSERT INTO packs(pack,descripcion,imagen,link)
        VALUES('$pack','$descripcion','$imagen','$link')";
        $resultadoUsuario = $conexion->query($sqlusuario);

        if ($resultadoUsuario > 0){
            echo "<script>
            alert('Completed');
            window.location = 'Packs.php';
            </script>";



        }

    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Packs</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">



</head>

<body>

    <input type="checkbox" id="check">

    <nav class="navbar fixed-bottom navbar-light bg-primary">
        <a class="navbar-brand">Kbits</a>

        <label for="check">
            <li class="fas fa-bars" id="sidebar_btn"></li>
        </label>

        <form class="form-inline">
            <input type="button" id="log" class="btn btn-danger" onclick="location = 'salir.php'" value="Logout">
        </form>
    </nav>

    <!--sidebar start-->
    <div class="sidebar">
        <center>
            <img src="assets/images/avatars/profile-pic.jpg" class="profile_image" alt="">
            <!-- Mostrar Nombre del Usuario Logueado-->
            <h3><?php echo utf8_decode($row['NombreC']);?></h3>

        </center>

        <a href="admin.php"><i class="fas fa-desktop"></i><span>Home</span></a>
        <a href="Tracks.php"><i class="fas fa-table"></i><span>Tracks</span></a>
        <a href="Packs.php"><i class="fas fa-bezier-curve"></i><span>Packs</span></a>
        <a href="#tab4"><i class="fas fa-info-circle"></i><span>support</span></a>
        <a href="#tab5"><i class="fas fa-cogs"></i><span>Settings</span></a>

    </div>
    <!--sidebar end-->

    <div class="content">




        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add pack</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Pack</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Pack:</label>
                                    <input type="text" class="form-control" name="pack" placeholder="Pack" required />
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Description:</label>
                                    <input type="message-text" class="form-control" name="descripcion" placeholder="Description" required />
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Image:</label>
                                    <input type="text" class="form-control" name="imagen" placeholder="Image (URL)" required />
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Link:</label>
                                    <input type="text" class="form-control" name="link" placeholder="Link" required />
                                </div>


                                <button type="submit" name="registrar" class="width-65 pull-right btn btn-sm btn-success">
                                    <span class="bigger-110">Add Pack</span>
                                    <i class="fas fa-plus"></i>
                                </button>
                                <fieldset>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>





        <div class="container mt-3">
            <div class="row">

                <?php

            $sql = "SELECT idpack,idtrack,pack,descripcion,imagen,link FROM packs";
            $resultSet = mysqli_query($conexion, $sql);
            while ($row = mysqli_fetch_row($resultSet)) {
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card" style="width: 15rem;">
                        <img src="<?php echo $row[4]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row[2]?></h5>
                            <p class="card-text">
                                <?php echo $row[3]; ?>
                            </p>




                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Link
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Link</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="<?php echo $row[5]; ?>" title="Tutorials" height="430" width="750"></iframe>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
        </div>




    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>





</body>

</html>
