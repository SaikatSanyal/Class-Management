<?php

?>

<?php
session_start();
if(!isset($_SESSION["teachername"])){
header("Location: homepage.php");
exit(); }
?>
