<?php

?>

<!DOCTYPE html>
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
    if (isset($_POST['teachername'])){
		 $teachername = $_POST['teachername'];
		  $teacherid= $_POST['teacherid'];
		   $department = $_POST['department'];
			 $password = $_POST['password'];
			  $confirm = $_POST['confirm'];
	$teachername = stripslashes($teachername);
		$teachername = mysql_real_escape_string($teachername);
		$teacherid = stripslashes($teacherid);
		$teacherid = mysql_real_escape_string($teacherid);
		$department = stripslashes($department);
		$department = mysql_real_escape_string($department);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
        $confirm = stripslashes($confirm);
		$confirm = mysql_real_escape_string($confirm);
          $query = "INSERT into teachers (Name,Id,Department, Password, Confirm) VALUES ('$teachername','$teacherid','$department', '$password','$confirm')";
        $result = mysql_query($query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login1.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="teachername" placeholder="Teachername" required />
<input type="id" name="teacherid" placeholder="teacher id" required />
<input type="department" name="department" placeholder="department" required />
<input type="password" name="password" placeholder="password" required />
<input type="password" name="confirm" placeholder="confirm password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
