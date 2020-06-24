<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 class TracksController extends Controller
 {
 	 public function show(){
 	 	
 	 	$view_data = [];

 	 	$pack_id = session('pack_id');

 	 	$packs = DB::select('select name, description, image, author_id from packs where id = ?', [$pack_id]);

 	 	$view_data['pack'] = $packs[0];

 	 	$track = DB::table('packs')
            ->join('pack_name', 'pack.id', '=', 'pack_name.pack_id')
            ->where('pack_name.pack_id', '=', $pack_id)
            ->select('pack.name')
            ->get();

        $view_data['pack_name'] = $pack[0]->name;

       //register new pack 
       @foreach ($pack as $packs => $value) {
       	# code...
       }



 	 	// write validations, make sure the array size == 1
        return view('tracks', ['view_data' => $view_data]);
 	 	

 	 	}

 	 }
 }
?>

<!--refernce to add and save in database packs

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
--->
