<?php
    session_start();
    include_once "config.php";
    $createRoomName = mysqli_real_escape_string($conn, $_POST['cpname']);
    $creator_id = mysqli_real_escape_string($conn, $_POST['creator_id']);
    //  echo $creator_id;
    $random_id = rand(time(), 10000000);
    // INSERT INTO `room` 
    // (`room_serial`, `room_id`, `room_name`, `room_desc`, `room_members`, `room_admins`, `room_tasks`, `room_creator`) 
    // VALUES (NULL, '123333', 'group1', 'test group 1', '001,\r\n002,\r\n003', '001,\r\n002', 'Hi! ', '002');
    $query0012 = "INSERT INTO `room` (`room_serial`, `room_id`, `room_name`, `room_desc`, `room_members`, `room_admins`, `room_tasks`, `room_creator`) VALUES (NULL, '$random_id', '$createRoomName', '$createRoomName', '$creator_id', '$creator_id', '0', '$creator_id')";
    // echo $query0012;
    $sql0012 = mysqli_query($conn, $query0012);
    echo $random_id;
?>