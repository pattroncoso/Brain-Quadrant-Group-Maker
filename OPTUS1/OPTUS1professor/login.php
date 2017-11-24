<html>
  <title>Professor Log In</title>
<body>
  <?php include("loginprofessor.php")?>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    body {
      background-image: url("http://eskipaper.com/images/minimal-white-wallpaper-1.jpg");
    background-color: #cccccc;
  }

         </style>

    <div class="container mlogin">
            <div id="login">
    <h1 class="alert alert-primary">Professor Log In:</h1>
<form name="loginform" id="loginform" action="" method="POST">
    <p>
        <label for="user_login">ID<br />
        <input type="text" name="idProfessor" id="Idprofessor" class="input" value="" size="20" /></label>
    </p>
    <p>
        <label for="user_pass">Password<br />
        <input type="password" name="Prof_password" id="Prof_password" class="input" value="" size="20" /></label>
    </p>

        <p class="submit">
        <input type="submit" name="login" class="button" value="Enter " />

    </p>
        <p class="regtext">Haven't register yet? <a href="register.php" >Register here!</a>!</p>

</form>

    </div>

    </div>

    <center><a href="../OPTUS1general/formulariogeneral.html" target="_self"> <input type="button" class="btn btn-success float-centre" name="boton" value=" Back" /> <center></a>




	<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>

    </body>
</html>
