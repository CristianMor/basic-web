<?php

  include "../config.php";
  include_once "./backend/classes/Connection.php";

  echo "Ehjectando el archivo submit";
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $cantidad = floatval($_POST['cantidad']);
    $unidadDeMedidas = $_POST['unidad_de_medidas'];
    
    $conn = new Conection($host, $user, $password, $dbname);
    $query = "INSERT INTO materias_primas(nombre, cantidad, unidad_de_medidas) values('$nombre', $cantidad, '$unidadDeMedidas')";
  echo $query;
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
