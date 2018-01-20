<?php

?>
<html>
<head>
<meta charset="utf-8">
<title>CT Marks</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
	
    if (isset($_POST['course_no'])){
		 $course_no = $_POST['course_no'];
		   
		   
	$course_no = stripslashes($course_no);
		$course_no = mysql_real_escape_string($course_no);
   
		$query = "select ct_1 from users,ctmarks where users.Roll=ctmarks.Roll and ctmarks.course_no='$course_no'";
	$result = mysql_query($query);
	
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/></div>";
	} }
    else{
?>
<div class="form">
<h1>CT1 marks</h1>
<form name="registration" action="" method="post">
<input type="text" name="course_no" placeholder="course_no" required />
<input type="submit" name="submit" value="Submit" />
</form>
</div>
<?php } ?>
</body>
</html>
