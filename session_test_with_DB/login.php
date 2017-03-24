 <?php
 
session_start();
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

		 
		 $uname=$_POST['userName'];
		 $upassword=sha1($_POST['passWord']);
            
			$sql = "SELECT user_name, user_pass 
					FROM
                        users
                    WHERE
                        user_name = '$uname'
                    AND
                        user_pass = '$upassword' ";
                 
			$result = $conn->query($sql);		
            
            if(!$result)
            {                
                echo 'Something went wrong while signing in. Please try again later.';
              
            }
            else
            {
                //the query was successfully executed, there are 2 possibilities
                //1. the query returned data, the user can be signed in
                //2. the query returned an empty result set, the credentials were wrong
                if(mysqli_num_rows($result) == 0)
                {
                    echo 'You have supplied a wrong user/password combination. Please try again.';
                }
                else
                {
                    //set the $_SESSION['signed_in'] variable to TRUE
                    $_SESSION['valid'] = true;
                     
                    //we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $_SESSION['user_name']  = $row['user_name'];
                        $_SESSION['user_pass'] = $row['user_pass'];
                    }                     
                    header("Location:home.php");
                }
            }
         ?>
