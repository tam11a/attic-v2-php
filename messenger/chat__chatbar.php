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
            <form class="chat__bar_sendbox">
                <i class="material-icons">&#xe226;</i>
                <span><input type="text" name="msgObj_text" class="writeBox" id="writeAmessage"></span>
                <input type="text" name="room_id" value="<?php echo $row3['room_id']?>" style="display: none;">
                <input type="text" name="author_name" value="<?php echo $self_data['fname'].' '.$self_data['lname']?>" style="display: none;">
                <input type="text" name="author_img" value="<?php echo $self_data['img']?>" style="display: none;">
                <input type="text" name="room_id" value="<?php echo $row3['room_id']?>" style="display: none;">
                <!-- <input type="submit" value="Send" class="TsendBtn"> -->
                <button  class="TsendBtn" type="submit"><i class="material-icons">&#xe163;</i></button>
            </form>
        </div>
        <div class="chat__bar_sidebar">
            <div class="chat__bar_sidebar_area">
                
                <div class="chat__bar_sidebar_child">
                    <div class="sidebar_child_header">
                        <p>Project Description</p>
                        <i class="material-icons">&#xe14d;</i>
                        <i class="material-icons">&#xe3c9;</i>
                    </div>
                    <div class="sidebar_child_p">
                    <?php echo $row3['room_desc']?>
                    </div>
                </div>
                <!-- <div class="chat__bar_sidebar_child">
                    <div class="sidebar_child_header">
                        <p>Duration <span id="duration">(4 Days Left)</span></p>
                        <i class="material-icons">&#xe616;</i>
                        <i class="material-icons setdate">&#xe3c9;</i>
                    </div>
                    <div class="sidebar_child_p">
                        <span id="startDate">23 Feb, 2021</span> - <span id="endDate">29 Feb, 2021</span>

                    </div>
                </div> -->
                <div class="chat__bar_sidebar_child">
                    <div class="sidebar_child_header">
                        <p>Progress</p>
                        <i class="material-icons">&#xe895;</i>
                        <i class="material-icons setdate">&#xe3c9;</i>
                    </div>
                    <div class="sidebar_child_p">
                        <div class="progressbar">
                            <span class="progress" style="width: <?php echo $row3['room_tasks']?>%;"></span>
                            <span class="progressmeter"><?php echo $row3['room_tasks']?>%</span>
                        </div>
                    </div>
                </div>
                <div class="chat__bar_sidebar_child">
                    <div class="sidebar_child_header">
                        <p>Shared Files</p>
                        <i class="material-icons">&#xe895;</i>                        
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>