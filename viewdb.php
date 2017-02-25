 <!doctype html>
    <html>
    <head>
      
      <title>database connections</title>
    </head>
    <body>
      <?php
		
	include ('db.php');

      //execute the SQL query and return records
      $sql ="SELECT * FROM employee";
	  $result = $conn->query($sql);
      ?>
      <table border="1" style= "background-color: #F7BE81; color: #09010c; margin: 0 auto;" >
      <thead>
        <tr>
          <th>EmpID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Age</th>          
        </tr>
      </thead>
      <tbody>
        <?php
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
      </tbody>
    </table>
     <?php $conn->close(); ?>
    </body>
    </html>