<?php
    $conn = mysqli_connect("localhost", "root", "", "messenger");
    if(!$conn){
             echo "Database connected" . mysqli_connect_error();
        }
?>