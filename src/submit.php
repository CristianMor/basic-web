<?php

  include "../config.php";
  include_once "./backend/classes/Connection.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $cantidad = floatval($_POST['cantidad']);
    $unidadDeMedidas = $_POST['unidad_de_medidas'];
    
    $conn = new Connection($host, $user, $password, $dbname);
    $query = "INSERT INTO materias_primas(nombre, cantidad, unidad_de_medidas) values('$nombre', $cantidad, '$unidadDeMedidas')";
    $result = mysqli_query($conn->getConn(), $query);

    if($result){
      echo "Registro creado exitosamente";
      echo 'El id fue: '.$conn->nonQueryId();
    }else{
      echo "Registro no se creo";
    }
    $conn->close();
  }
?>
