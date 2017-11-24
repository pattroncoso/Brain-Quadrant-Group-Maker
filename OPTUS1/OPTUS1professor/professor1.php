<?php
session_start();
if(!isset($_SESSION["session_idProfessors"])) {
  header("location:login.php");
} else {
?>
<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
  body {
    background-image: url("http://eskipaper.com/images/minimal-white-wallpaper-1.jpg");
  background-color: #cccccc;
}

       </style>
<title>Brain quadrant professor</title>



 <?php
 $dbhost = 'localhost';
     $dbuser = 'root';               // Datos para acceder a la base de datos , por defecto siempre los mismos
     $dbpass = '';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error de conexion mysql');
     $dbname = 'mydb';
     mysqli_select_db($conn, $dbname);

$id = $_SESSION["session_idProfessors"];


 $resulta = mysqli_query($conn, "SELECT Prof_firstname FROM mydb.Professors WHERE idProfessors =".$id."");
 $row = mysqli_fetch_array($resulta);


 ?>
<div class="page-header">
<h1>Welcome Professor <span><?php echo $row['Prof_firstname']; ?>, </span>
<a href="logout.php" target="_self"> <input type="button" class="btn btn-success float-right" name="boton" value="Log out" /> </a><h2>
</div>
<h1>
</div>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>

</div>
      <center>
    <br>  <br>  <br>
     <button type="button" class="btn btn-primary btn-block btn-lg" onclick="mandar();">Make groups</button>
</div></center>

<script type="text/javascript">

             mandar=function(){
           window.location="http://localhost/OPTUS1/OPTUS1professor/makegroup.php";};

</script>
<?php
$dbhost = 'localhost';
    $dbuser = 'root';               // Datos para acceder a la base de datos , por defecto siempre los mismos
    $dbpass = '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error de conexion mysql');
$resulta = mysqli_query($conn, "SELECT idStudents, Stud_firstname, Stud_lastname, Stud_email, Stud_quadrant, Grupo
  FROM mydb.Students ")
 or die(mysqli_error($conn));  ;

echo "<br><br><br><center><table border='1' width= 1000px>";
echo "<tr><th> ID </th><th> Name </th><th> Last name </th><th> Email </th><th> Quadrant</th><th>Group</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $resulta,  MYSQLI_ASSOC)) {
  // Print out the contents of each row into a table
  echo "<tr><td>";
  echo $row['idStudents'];
  echo "</td><td>";
  echo $row['Stud_firstname'];
  echo "</td><td>";
  echo $row['Stud_lastname'];
    echo "</td><td>";
  echo $row['Stud_email'];
  echo "</td><td>";
  echo $row['Stud_quadrant'];
  echo "</td><td>";
  echo $row['Grupo'];
  echo "</td></tr>";
}

echo "</table><center>";
?>
<br><br><a href="logout.php" target="_self"> <input type="button" class="btn btn-success" name="boton" value="Log out" /> </a></h2>
</body>
</html>

<?php
}
?>
