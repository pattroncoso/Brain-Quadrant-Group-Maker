<?
$idStudents = $_POST['id'];
$brainQuadrant = $_POST['bq'];
$dbhost = 'localhost';
     $dbuser = 'root';               // Datos para acceder a la base de datos , por defecto siempre los mismos
     $dbpass = '';
     $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error de conexion mysql');
     $dbname = 'mydb';
     mysql_select_db($dbname);

     $edit = "UPDATE students SET Stud_quadrant = '.$brainQuadrant.' WHERE idStudents ='.$idStudents.'";
     $resultadin=mysqli_query($conn, $edit);

     if( !$resultadin){
       return "error puta la wea";
     }

  ?>
