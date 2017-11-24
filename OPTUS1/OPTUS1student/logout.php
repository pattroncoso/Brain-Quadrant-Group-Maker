<?php
session_start();
unset($_SESSION['session_username']);
session_destroy();
header("location:http://localhost/OPTUS1/OPTUS1general/formulariogeneral.html");
?>
