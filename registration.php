<?php

?>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		 $username = $_POST['username'];
		  $roll = $_POST['roll'];
		   $department = $_POST['department'];
		    $series = $_POST['series'];
			$email = $_POST['email'];
			 $password = $_POST['password'];
			  $confirm = $_POST['confirm'];
	$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$roll = stripslashes($roll);
		$roll = mysql_real_escape_string($roll);
		$department = stripslashes($department);
		$department = mysql_real_escape_string($department);
        $series = stripslashes($series);
		$series = mysql_real_escape_string($series);
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
        $confirm = stripslashes($confirm);
		$confirm = mysql_real_escape_string($confirm);
          if($password!=$confirm){
		echo "Do not match your password";
		die();
		}
				
          $query=mysql_query("select * from users where Name='$username'");
		  if(mysql_num_rows($query)>0){
			  echo "aalready exists";
		  }

				
		 
	else{
		$query = "INSERT into users (Name,Roll,Department,Series,Email, Password, Confirm) VALUES ('$username','$roll','$department', '$series','$email','$password','$confirm')";
	$result = mysql_query($query);
	
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
	} }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="roll" name="roll" placeholder="roll" required />     <br/>
<input type="series" name="series" placeholder="series" required /> <br/>
<input type="department" name="department" placeholder="department" required />
<input type="email" name="email" placeholder="email" required />
<input type="password" name="password" placeholder="password" required />
<input type="password" name="confirm" placeholder="confirm" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
