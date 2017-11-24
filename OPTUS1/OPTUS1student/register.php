<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>


	<?php

if(isset($_POST["register"])){


if(!empty($_POST['idStudents']) && !empty($_POST['Stud_firstname']) && !empty($_POST['Stud_lastname']) && !empty($_POST['Stud_password']) && !empty($_POST['Stud_email'])) {
	$idStudents= $_POST['idStudents'];
  $Stud_firstname= $_POST['Stud_firstname'];
	$Stud_lastname= $_POST['Stud_lastname'];
	$Stud_password= $_POST['Stud_password'];
	$Stud_email= $_POST['Stud_email'];
	$idStudents = mysqli_real_escape_string($con, $idStudents);
	$Stud_firstname = mysqli_real_escape_string($con, $Stud_firstname);
	$Stud_lastname = mysqli_real_escape_string($con, $Stud_lastname);
	$Stud_password = mysqli_real_escape_string($con, $Stud_password);
	$Stud_email = mysqli_real_escape_string($con, $Stud_email);





	$query=mysqli_query($con, "SELECT * FROM Students WHERE idStudents='".$idStudents."'");
	$numrows=mysqli_num_rows($query);

	if($numrows==0)
	{


$sql = "INSERT INTO `mydb`.`Students` (`idStudents`, `Stud_firstname`, `Stud_lastname`, `Stud_password`, `Stud_email`, `Stud_quadrant`, `Grupo`)
VALUES ('$idStudents', '$Stud_firstname', '$Stud_lastname', '$Stud_password','$Stud_email', '0', '0')";

	$result=mysqli_query($con, $sql);


	if($result){
	 $message = "Account created";
	} else {
	 $message = "Error filling the spaces";
	}

	} else {
	 $message = "The ID given already exists!";
	}

} else {
	 $message = "All spaces must be filled";
}
}
?>


<?php if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>
	<style>
		body {
			background-image: url("http://eskipaper.com/images/minimal-white-wallpaper-1.jpg");
		background-color: #cccccc;
}

				 </style>
				 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		 	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		 	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
				 <div class="container">
				 	<ul class="nav nav-pills nav-fill">
				 		<li class="nav-item"><a href="../OPTUS1general/formulariogeneral.html">Home</a></li>
				 		<li class="nav-item"><a href="http://localhost/OPTUS1/OPTUS1general/quadrant.php">What's a brain quadrant?</a></li>
				 		<li class="nav-item active"><a href="#"> Register as a student! </a></li>
				 		<li class="nav-item"><a href="../OPTUS1professor/register.php"> Register as a professor! </a></li>
				 	</ul>
				 </div>

<div class="container mregister">
			<div id="login">
	<h1>Register</h1>
<form name="registerform" id="registerform" action="register.php" method="post">

	<p>
		<label for="user_pass">ID<br />
		<input type="text" name="idStudents" id="idStudents" class="input" value="" size="20" /></label>
	</p>

	<p>
		<label for="user_login">First name<br />
		<input type="text" name="Stud_firstname" id="Stud_firstname" class="input" size="32" value=""  /></label>
	</p>

	<p>
		<label for="user_login">Last name<br />
		<input type="text" name="Stud_lastname" id="Stud_lastname" class="input" size="32" value=""  /></label>
	</p>

	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="Stud_password" id="Stud_password" class="input" value="" size="32" /></label>
	</p>

	<p>
		<label for="user_pass">E-mail<br />
		<input type="Stud_email" name="Stud_email" id="Stud_email" class="input" value="" size="32" /></label>
	</p>




		<p class="submit">
		<input type="submit" name="register" id="register" class="button" value="Register" />
	</p>

	<p class="regtext">Already have an account? <a href="login.php" >Log in!</a></p>
</form>

	</div>
	</div>
