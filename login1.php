<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['teachername'])){
        $teachername = $_POST['teachername'];
        $password = $_POST['password'];
		$teachername = stripslashes($teachername);
		$teachername = mysql_real_escape_string($teachername);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `teachers` WHERE teachers.Name='$teachername' and teachers.Password='$password'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1){
			$_SESSION['teachername'] = $teachername;
			header("Location: index1.php"); // Redirect user to index1.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login1.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="teachername" placeholder="teachername" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration1.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>
