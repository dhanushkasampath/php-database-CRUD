<?php
session_start();
if (isset($_SESSION['valid'])) {
    
} else {
    header("Location:index.php");
}
?>

<html>

<body>

<h1>welcome <?php echo $_SESSION['user_name'];?> to the home </h1>
	
	<a href="home2.php">go to next</a></br>
	<a href="logout.php">logout</a>
</body>

</html>