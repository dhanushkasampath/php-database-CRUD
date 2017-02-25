<html>
<head></head>
<body>

<form method="post">

<table>
    <tr>
	<td><h4>FirstName:</h4></td>
	<td><input type="text" name="firstname"/></td>
	</tr>
	
	<tr>
	<td><h4>LastName:</h4></td>
	<td><input type="text" name="lastname"/></td>
	</tr>
	
	<tr>
	<td><h4>Age:</h4></td>
	<td><input type="text" name="age"/></td>
	</tr>
	
</table>	

<input type="submit" name="submit3" formaction="insertdata.php" value="Insert">
<input  type="submit" name="submit4" formaction="viewdb.php" value="View Database">

</form>

<div>	
<p>insert the id to delete or update</p>
<form method="post">

<input type="text" name="id">

<input type="submit" name="submit3" formaction="delete.php" value="Delete">
<input  type="submit" name="submit4" formaction="update.php" value="Update">

</form>	
</div>

</body>
</html>