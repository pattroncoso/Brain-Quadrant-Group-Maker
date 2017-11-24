<?
session_start();
if(!isset($_SESSION["session_username"])) {
  header("location:login.php");
}

$dbhost = 'localhost';
     $dbuser = 'root';               // Datos para acceder a la base de datos , por defecto siempre los mismos
     $dbpass = '';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error de conexion mysql');
     $dbname = 'mydb';
     mysqli_select_db($conn, $dbname);


		 $id = $_SESSION["session_username"];



     ?>
