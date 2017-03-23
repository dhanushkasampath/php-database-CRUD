<?php
session_start();
if (isset($_SESSION['valid'])) {
    //$secCode = $_SESSION["section"];
} else {
    header("Location:login.php");
}
?>

<html>

<body>

<h1>welcome to the home </h1>
	<?php
	//echo $_SESSION['username'];
	?>
	<a href="home2.php">go to next</a></br>
	<a href="logout.php">logout</a>
</body>

</html>