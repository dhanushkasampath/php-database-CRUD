<?php
session_start();
if (isset($_SESSION['valid'])) {
    //$secCode = $_SESSION["section"];
} else {
    header("Location:index.php");
}
?>

<html>

<body>

	<h1>page after home</h1></br>
	<a href="logout.php">logout</a>

</body>
</html>