
 <?php 
    function connection(){
      $host = "localhost";
      $user = "root";
      $pwd ="Rithy1234#@";
      $name = "user";

      $conn = mysqli_connect($host, $user, $pwd, $name);
      if (mysqli_connect_errno()){
          echo "Connect Error.". mysqli_connect_error();
          die();
      }else{
             return $conn;
      }
    }
?>