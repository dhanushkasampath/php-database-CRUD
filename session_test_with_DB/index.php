

<html lang = "en">
   
   <head>
      <title>simple login</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
	  <link href = "style.css" rel = "stylesheet">                  
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
      
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" action = "login.php" method = "post">
                       
			<input type = "text" class = "form-control" name = "userName" placeholder = "username" required autofocus></br>
            <input type = "password" class = "form-control" name = "passWord" placeholder = "password" required>
           
		   <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "login">Login</button>
		   
         </form>         
      </div> 
	  
              
   </body>
</html>