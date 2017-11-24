<?php
session_start();

 require_once("includes/connection.php");
 require_once("includes/header.php");

if(isset($_SESSION["session_idProfessors"])){
// echo "Session is set"; // for testing purposes
header("Location: professor1.php");
}

if(isset($_POST["login"])){

if(!empty($_POST['idProfessor']) && !empty($_POST['Prof_password'])) {
    $idProfessors=$_POST['idProfessor'];
    $Prof_password=$_POST['Prof_password'];
    $idProfessors=mysqli_real_escape_string($con, $idProfessors);
    $Prof_password=mysqli_real_escape_string($con, $Prof_password);

    $query =mysqli_query($con, "SELECT idProfessors,Prof_password FROM Professors WHERE idProfessors='".$idProfessors."' AND Prof_password='".$Prof_password."'");

    $numrows=mysqli_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbusername=$row['idProfessors'];
    $dbpassword=$row['Prof_password'];
    }

    if($idProfessors == $dbusername && $Prof_password == $dbpassword)

    {


    $_SESSION['session_idProfessors']=$idProfessors;

    /* Redirect browser */
    header("Location: professor1.php");
    }
    } else {

 $message =  "Invalid ID or password";
    }

} else {
    $message = "You need to fill all spaces";
}
}
?>
