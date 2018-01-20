<?php

?>

<?php 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Attendence and Class Test</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>This is another secured page.</p>
<p><a href="index.php">Home</a></p>
<p><a href="attendenceevent.php">Give Attendence</a></p>
<a href="ctmarks.php">Class Test Marks</a> <br> <br>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
