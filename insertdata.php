<?php
include("db.php");

$firstname=$lastname=$age="";

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$age=$_POST["age"];

$sql="INSERT INTO employee VALUES (null,'$firstname','$lastname','$age')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully now";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>