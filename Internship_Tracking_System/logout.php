<?php
session_start();
unset($_SESSION['personid']);
unset($_SESSION['usertype']);
session_unset();
session_destroy();
header("location:index.php");
?>