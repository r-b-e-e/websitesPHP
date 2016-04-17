<!-- Created by Rakesh Balan Lingakumar -->

<?php
$host="localhost"; //hostname
$dbusername="root"; //database username
$dbpassword=""; //database password
$dbname="its_data_warriors"; //database name

$dbcon=mysqli_connect($host,$dbusername,$dbpassword,$dbname)or die("Error " . mysqli_error($dbcon));

?>