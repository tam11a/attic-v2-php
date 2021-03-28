<?php
    $room_id = mysqli_real_escape_string($conn, $_GET['room_id']);
    if($room_id==null){
        $line_09 = "SELECT * FROM `room` WHERE room_members LIKE '%".$_SESSION['unique_id']."%'";
        //echo $line_0;
        $sql29 = mysqli_query($conn, $line_09);
        $output = "";
        while($row29 = mysqli_fetch_assoc($sql29)){
            header("location: chat.php?room_id=".$row29['room_id']);
        }
    }
    else{
            $sql3 = mysqli_query($conn, "SELECT * FROM `room` WHERE room_id = {$room_id}");
            if(mysqli_num_rows($sql3) > 0){
                $row3 = mysqli_fetch_assoc($sql3);
            }
            $sqlself = mysqli_query($conn, "SELECT * FROM `user` WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sqlself) > 0){
                $self_data = mysqli_fetch_assoc($sqlself);
            }
        }
?>        
<div class="chat__bar">
    <div class="chat__bar__header unselectable">
        <div class="chat__bar__name"><i class="material-icons channel_icon">&#xe85d;</i><?php echo $row3['room_name']?></div>
        <div class="chat__bar__header__buttons">
            <i class="material-icons">&#xe7f4;</i>
            <!-- <i class="material-icons">&#xe7f6;</i>  -->
            <i class="material-icons" onclick="document.querySelector('.popupwin.addtoGrpScr_pop').classList.add('onPop');">&#xe7f0;</i>
            <i class="material-icons" onclick="seemore();">&#xe88e;</i>
        </div>
    </div>
    <div class="chat__bar_body">
        <div class="chat__bar_msgs">
            <div class="chat__bar_msgbox">
        
            </div>
            <?php include_once "msgSendBox.php"; ?>
        </div>
        <?php include_once "chatbar__sidebar.php"; ?>
    </div>
</div>