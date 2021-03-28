<?php
    session_start();
    include_once "config.php";
    if(!isset($_SESSION['unique_id'])){
        header("location: index.php");
    }
?>
<?php
    $line_0 = "SELECT * FROM `room` WHERE room_members LIKE '%".$_SESSION['unique_id']."%'";
    //echo $line_0;
    $sql2 = mysqli_query($conn, $line_0);
    $output = "";
        while($row2 = mysqli_fetch_assoc($sql2)){
             $output .= '<a href="chat.php?room_id='.$row2['room_id'].'">
                             <div class="chat_window">
                                 <i class="material-icons channel_icon">&#xe85d;</i>
                                 <span class="chat_win_channel_name">'.$row2['room_name'].'</span>
                             </div>
                         </a>
                        ';
        }
    echo $output;
    /*
    <i class="material-icons">&#xe7f0;</i>
    
    <div class="chat_window">
        <i class="material-icons channel_icon">&#xe85d;</i>
        <span class="chat_win_channel_name">Cold Tracker</span>
        <i class="material-icons">&#xe7f0;</i>
    </div>
    */
    // INSERT INTO `room` (`room_serial`, `room_id`, `room_name`, `room_desc`, `room_members`, `room_admins`, `room_tasks`, `room_creator`) VALUES (NULL, '123333', 'group1', 'test group 1', '001,\r\n002,\r\n003', '001,\r\n002', 'Hi! ', '002'); 
    // SELECT * FROM `room` WHERE room_members LIKE "%003%" 
?>
