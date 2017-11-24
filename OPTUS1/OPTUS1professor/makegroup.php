


<html>
  <style>
    body {
    background-image: url("http://www.spirehealthcare.com/ImageFiles/Roding/MICROSITE-IMAGE.jpg");
    background-color: #cccccc;
}

         </style>
          <title>student</title>
  <?php
 $dbhost = 'localhost';
     $dbuser = 'root';               // Datos para acceder a la base de datos , por defecto siempre los mismos
     $dbpass = '';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error de conexion mysql');
     $dbname = 'mydb';
     mysqli_select_db($conn, $dbname);

$resulta = mysqli_query($conn, "SELECT DISTINCT idStudents, Stud_quadrant FROM mydb.Students ")
or die(mysqli_error($conn));  ;


while($row = mysqli_fetch_array( $resulta )) {

$b=$row['idStudents'];


$a = (rand(1,3));
$editar = "UPDATE `mydb`.`Students` SET `Grupo` = '$a' WHERE `students`.`idStudents` = '$b' ";
$resultadin=mysqli_query($conn, $editar); }

echo "New groups were created!"




?>





<br><br>
  <button><a href="professor1.php">back</a></button>

</html>
