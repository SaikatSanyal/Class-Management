<?php


?>

<?php include("auth1.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['teachername']; ?>!</p>
<p>This is secure area.</p>
<p><a href="dashboard1.php">Class and attendece</a></p>
<a href="logout1.php">Logout</a>
</div>
</body>
</html>
