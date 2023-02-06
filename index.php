<!DOCTYPE html>
<html>
  <head>
    <title>ABC materias primas</title>
    <link rel="stylesheet" type="text/css" href="src/css/styles.css">
  </head>
  <body>
    <!-- <form action="src/submit.php" method="post"> -->
    <!--   <label for="nombre">Nombre:</label> -->
    <!--   <input type="text" id="nombre" name="nombre"><br><br> -->
    <!--   <label for="cantidad">Cantidad:</label> -->
    <!--   <input type="text" id="cantidad" name="cantidad"><br><br> -->
    <!--   <label for="unidad_de_medidas">Unidad de medidas:</label> -->
    <!--   <input type="text" id="unidad_de_medidas" name="unidad_de_medidas"><br><br> -->
    <!--   <input type="submit" value="Submit"> -->
    <!-- </form> -->

    <header>
      <div>
        <form action="src/eliminarRegistro.php" method="post">
          <input type="number" id="id_input" name ="id_input" >
          <input type="submit" value="Eliminar" >
        </form>
      </div>
    </header>

    <table>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Unidad de medidas</th>
      </tr>
      <?php
        include "config.php";
        require_once "src/backend/classes/Connection.php";
        
        $conn = new Connection($host, $user, $password, $dbname);
        $query = "SELECT * FROM materias_primas";
        $result = mysqli_query($conn->getConn(), $query);
        
        if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<td>'.$row['id'].'</br>';
            echo '<td>'.$row['nombre'].'</br>';
            echo '<td>'.$row['cantidad'].'</br>';
            echo '<td>'.$row['unidad_de_medidas'].'</br>';
            echo '</tr>';
          }
        }else{
          echo "no existen registros";
        }

      ?>
    </table>
    <script>
      
    /* 
    * funcion que manejara el evento de eliminar el registro
    *
    */
      function eliminarRegistro(){

        const inputID = document.getElementById("id_input");
        const valorID = inputID.value;

        if(valorID !== ""){
        //fetch('localhost')
        }else{
          alert("Por favor ingrese un valor al campo id");
        }

      }
    </script>
  </body>
</html>
