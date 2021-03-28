<?php
    session_start();
    include_once "config.php";
    $room_id = mysqli_real_escape_string($conn, $_POST['room_id']);
    $addpname = mysqli_real_escape_string($conn, $_POST['addpname']);
    //  echo $creator_id;
    //$random_id = rand(time(), 10000000);
    // INSERT INTO `room` 
    // (`room_serial`, `room_id`, `room_name`, `room_desc`, `room_members`, `room_admins`, `room_tasks`, `room_creator`) 
    // VALUES (NULL, '123333', 'group1', 'test group 1', '001,\r\n002,\r\n003', '001,\r\n002', 'Hi! ', '002');
    
    $query0012 = "SELECT * FROM `room` WHERE room_id = '$room_id'";
    // echo $query0012;
    $sql0012 = mysqli_query($conn, $query0012);
    if(mysqli_num_rows($sql0012) > 0){
            $row0012 = mysqli_fetch_assoc($sql0012);
    }

    $query0013 = "SELECT unique_id FROM `user` WHERE email = '$addpname'";
    // echo $query0013;
    $sql0013 = mysqli_query($conn, $query0013);
    if(mysqli_num_rows($sql0013) > 0){
            $row0013 = mysqli_fetch_assoc($sql0013);
    }
    $updateQ = $row0012['room_members'].",".$row0013['unique_id'];
    $query0014 =  "UPDATE `room` SET room_members='$updateQ' WHERE room_id='$room_id'";
    $sql0014 = mysqli_query($conn, $query0014);
?>