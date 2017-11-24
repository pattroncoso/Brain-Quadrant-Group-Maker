<?php
session_start();
if(!isset($_SESSION["session_username"])) {
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
          <title>student</title>
  <?php
 $dbhost = 'localhost';
     $dbuser = 'root';               // Datos para acceder a la base de datos , por defecto siempre los mismos
     $dbpass = '';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error de conexion mysql');
     $dbname = 'mydb';
     mysqli_select_db($conn, $dbname);


$id = $_SESSION["session_username"];

$resulta = mysqli_query($conn, "SELECT idStudents, Stud_firstname FROM mydb.Students WHERE idStudents =".$id."");
 $row = mysqli_fetch_array($resulta) ?>

<div class="page-header">
<h1 class="display-5">Welcome <span><?php echo $row['Stud_firstname']; ?>, </span>
  <a href="logout.php" target="_self"> <input type="button" class="btn btn-success float-right" name="boton" value=" Log out" /> </a></h2>
</div>
         <html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<center><div>
<a href="questions.php?id=<?php echo $row['idStudents']?>"><input type="button" class="btn btn-primary btn-block float-center  btn-lg" value="Do your survey!"/></a>

</div></center>

<script type="text/javascript">


        mandar=function(){
      window.location="http://localhost/OPTUS1/OPTUS1student/Questions.php";};
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("myBtn").style.display = "block";
          } else {
              document.getElementById("myBtn").style.display = "none";
          }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
          document.body.scrollTop = 0; // For Chrome, Safari and Opera
          document.documentElement.scrollTop = 0; // For IE and Firefox
      }


</script>
 <?php

$grupvar = mysqli_query($conn, "SELECT Grupo FROM mydb.Students WHERE idStudents =".$id."");
 $grupowo= mysqli_fetch_array($grupvar);
 $final = $grupowo ['Grupo'];

 $resulta = mysqli_query($conn, "SELECT idStudents, Stud_firstname, Stud_lastname, Stud_email, Stud_quadrant, Grupo
  FROM mydb.Students WHERE Grupo =".$final."")
 or die(mysqli_error($conn));  ;



echo "<br><br><br><center><table  class='table table-hover'  border='2px'>";
echo "<tr><th> Name </th><th> Last name </th><th> Email </th><th> Quadrant</th><th>Group</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $resulta )) {
  // Print out the contents of each row into a table

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

<br><br><a href="logout.php" target="_self"> <input type="button" class="btn btn-success float-right" name="boton" value=" Log out" /> </a></h2>
<?php
}
?>
</html>
