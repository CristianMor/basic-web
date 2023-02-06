<?php
  
  include "../config.php";
  include_once "./backend/classes/Connection.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST['id_input'];

    $conn = new Connection($host, $user, $password, $dbname);
    $query = "DELETE FROM materias_primas WHERE materias_primas.id = $id";
    $result = mysqli_query($conn->getConn(), $query);
    
    if($result){
      echo "Se elimino con exito";
    }else{
      echo "Ocurrio un problema al momento de eliminar el registro cn el id: $id";
    }

  }else{

  }

?>
