<?php
   session_start();
   session_unset();
   session_destroy();
   //unset($_SESSION["username"]);
  // unset($_SESSION["password"]);
   
  
  header("Location:login.php");
?>

<html>

<body>

<h4>successfully logout</h4>
</body>
</html>