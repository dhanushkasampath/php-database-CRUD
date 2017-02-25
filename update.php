
<?php
include('db.php');
$id = $_POST["id"];
$sql="SELECT * FROM employee WHERE empID=$id";

$result = $conn->query($sql);


          while( $row = $result->fetch_assoc() ){
            echo
            "<tr>
              <td>{$row['empID']}</td>
              <td>{$row['firstName']}</td>
              <td>{$row['lastName']}</td>
              <td>{$row['age']}</td>
            </tr>\n";
          }
        ?>

$conn->close();
		

?>

