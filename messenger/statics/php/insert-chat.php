<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $room_id = mysqli_real_escape_string($conn, $_POST['room_id']);
        $message = mysqli_real_escape_string($conn, $_POST['msgObj_text']);
        $author_name = mysqli_real_escape_string($conn, $_POST['author_name']);
        $author_img = mysqli_real_escape_string($conn, $_POST['author_img']);
        $timestamp = time();
        $sql22 = mysqli_query($conn, "INSERT INTO messages (mid, text, author_id, room_id, ts, author_name, author_img)
                                        VALUES (null, '{$message}', {$outgoing_id}, {$room_id}, {$timestamp}, '{$author_name}', '{$author_img}')");
        echo $sql22;
    }else{
        header("location: index.php");
    }
?>