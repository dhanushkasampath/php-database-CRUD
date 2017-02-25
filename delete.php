
<?php
include('db.php');
$id = $_POST["id"];
$sql="DELETE FROM employee WHERE empID=$id";

$result = $conn->query($sql);

if ($result === TRUE) {
    echo "record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
		

?>

