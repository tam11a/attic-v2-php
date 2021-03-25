<?php
session_start();
unset($_SESSION["unique_id"]);
header("location: index.php");
?>