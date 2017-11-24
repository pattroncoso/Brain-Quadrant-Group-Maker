<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<?php

if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: student1.php");
}

if(isset($_POST["login"])){

if(!empty($_POST['idStudents']) && !empty($_POST['Stud_password'])) {
    $idStudents=$_POST['idStudents'];
    $Stud_password=$_POST['Stud_password'];
    $idStudents=mysqli_real_escape_string($con, $idStudents);
    $Stud_password=mysqli_real_escape_string($con, $Stud_password);

    $query =mysqli_query($con, "SELECT * FROM Students WHERE idStudents='".$idStudents."' AND Stud_password='".$Stud_password."'");

    $numrows=mysqli_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbusername=$row['idStudents'];
    $dbpassword=$row['Stud_password'];
    }

    if($idStudents == $dbusername && $Stud_password == $dbpassword)

    {


    $_SESSION['session_username']=$idStudents;

    /* Redirect browser */
    header("Location: student1.php");
    }
    } else {

 $message =  "ID or password invalid!";
    }

} else {
    $message = "All spaces must be filled!";
}
}
?>


<style>
  body {
    background-image: url("http://eskipaper.com/images/minimal-white-wallpaper-1.jpg");
  background-color: #cccccc;
}


       </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <div class="container mlogin">
            <div id="login">
    <h1 class="alert-alert-primary">Student Log in</h1>
<form name="loginform" id="loginform" action="" method="POST">
    <p>
        <label for="user_login">ID<br />
        <input type="text" name="idStudents" id="idStudents" class="input" value="" size="20" /></label>
    </p>
    <p>
        <label for="user_pass">Password<br />
        <input type="password" name="Stud_password" id="Stud_password" class="input" value="" size="20" /></label>
    </p>
        <p class="submit">
        <input type="submit" name="login" class="button" value="Enter" />
    </p>
        <p class="regtext">You are not register? <a href="register.php" > Register here!</a>!</p>
</form>

    </div>

    </div>
<center><a href="../OPTUS1general/formulariogeneral.html" target="_self"> <input type="button" class="btn btn-success float-centre" name="boton" value=" Back" /> <center></a>


	<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
