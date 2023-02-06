<?php 

  class Connection {

    private $conn;

    public function __construct($host, $user, $password, $dbname){
     $this->conn = mysqli_connect($host, $user, $password, $dbname);
      if(!$this->conn){
        die("Ah ocurrido un error al intentar conectarse ala base de datos.");
      }
      print_r('Se ah establecido la conexion con exito');
    }

    public function close(){
      return mysqli_close($this->conn);
    }

    public function nonQuery($query){
      return mysqli_affected_rows($this->conn);
    }

    # Regresa el ultimo id que insertamos en la tabla
    public function nonQueryId(){
      if(mysqli_affected_rows($this->conn) > 0){
        return mysqli_insert_id($this->conn);
      }else{
        echo 'No se inserto';
      }
    }
    public function getConn(){
      return $this->conn;
    }
  }

?>
