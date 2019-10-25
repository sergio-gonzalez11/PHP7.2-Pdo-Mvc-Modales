
<?php

    include '../db/Global.php';
    include '../db/Conexion.php';
    include '../models/Registro.php';

$operacion = $_GET['operacion'];

switch ($operacion) {

    case "Listar":

        $dao = new Registro();
        $dao -> mostrarRegistros();

        header("location: ../index.php");
              
    break;


    // case "Buscar":

    //     if(!isEmpty($_GET['buscador'])){

    //         $cadena = $_GET['buscador'];

    //         $dao = new Registro();
    //         $dao -> buscarAjax($cadena);

    //         header("location: ../index.php");
            
    //     }else{

    //             echo "error";


    //         }
    // break;
    

    case "Agregar":

        $nombre = $_GET['nombre'];
        $apellidos = $_GET['apellidos'];
        $edad = $_GET['edad'];

        $dao = new Registro();
        $dao -> registroUsuario($nombre, $apellidos, $edad);

        header("location: ../index.php");
        
    break;


    case "Eliminar":

        if(isset($_GET['id_registro'])){

            $id = $_GET['id_registro'];

            $dao = new Registro();
            $dao -> borrarRegistro($id);

            header("location: ../index.php");

        }else{

                echo "error";

            }
            
    break;


    case "EliminadoMultiple":

        if(isset($_GET['borradoMultiple'])){

            $contadorIds = $_GET['borradoMultiple'];

            foreach ($contadorIds as $id){

                $conexion = new Conexion();
                $pdo = $conexion->conectar();

                $stmt = $pdo->prepare("DELETE FROM registro WHERE id_registro =".$id."");

                $stmt->execute();

                $eliminar = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            header("location: ../index.php");

        }
      
    break;


    case "Buscar":

      $dao = new Registro();

      if(isset($_GET['id_registro'])){

       $id_registro = $_GET['id_registro'];

        $dao -> buscarUsuarioporId($id_registro);
        
        header("location: ../index.php");

        }else{

             echo "<script>alert('No se obtiene datos!');location.href='../index.php'</script>";

         }

    break;


    case "Actualizar":

        if(isset($_GET['id_registro'])){

            $dao = new Registro();

            $id_registro = $_GET['id_registro'];
            $nombre = $_GET['nombre'];
            $apellidos = $_GET['apellidos'];
            $edad = $_GET['edad'];
    
            $dao -> actualizarRegistro($id_registro, $nombre, $apellidos, $edad);
            
            header("location: ../index.php");
        
        }else{

            echo "<script>alert('No se obtiene datos!');location.href='../index.php'</script>";
        }

    break;
    

}


?>