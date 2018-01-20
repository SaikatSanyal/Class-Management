

<html>
<body>
<?php
require('db.php');
if(isset($_POST['submit']))
{
$course_no=$_POST['course_no'];
$ct_1=$_POST['ct_1'];
$ct_2=$_POST['ct_2'];
$ct_3=$_POST['ct_3'];
$ct_4=$_POST['ct_4'];
if($course_no!="" )
{
$query=mysql_query("insert into ctmarks(course_no,ct_1,ct_2,ct_3,ct_4) values('$course_no','$ct_1','$ct_2','$ct_3','$ct_4')");
if($query)
{
echo "Updated successfully!";
}
else
{
echo "there is a problem in Databse";
}
}
else
{
echo "Please fill all details";
}
 
}
else
{
?>
<form>
<fieldset>
    
	<form method="post">

	
	<h1><p><a href="classtest_1.php">ct_1</a></p></h>
	<h1><p><a href="classtest_2.php">ct_2</a></p></h>
	<h1><p><a href="classtest_3.php">ct_3</a></p></h>
	<h1><p><a href="classtest_4.php">ct_4</a></p></h>
	<h1><p><a href="classtest_5.php">ct_5</a></p></h>
	<h1><p><a href="classtest_6.php">ct_6</a></p></h>
	
</fieldset>

</form>
<?php } ?>
</body>
</html>
