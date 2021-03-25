<?php
    //session_start();
    //include_once "statics/php/config.php";
    $sql = mysqli_query($conn, "SELECT * FROM user WHERE unique_id = {$_SESSION['unique_id']}");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
    }
?>

<div class="sidebar unselectable">
    <div class="sidebar__header">
        <span class="AppName">Ashd Attic</span>
        <i class="material-icons">&#xe313;</i>
    </div>
    <div class="sidebar__body">
        <div class="sidebar__body__header">
            <div class="sidebar__body__header_createBtn" onclick="document.querySelector('.popupwin.createScr_pop').classList.add('onPop');">
                <i class="material-icons channel_icon">&#xe85d;</i>
                <span style="flex: 1;">Create Project</span>
                <i class="material-icons">&#xe145;</i>
            </div>
            <i class="material-icons">&#xe8b6;</i>
        </div>
        <div class="sidebar__body__chats">
        </div>
    </div>
    <div class="sidebar__profile">
        <i class="material-icons">&#xe7fd;</i>
        <span class="profile__name">
            <span class="profile__nameI"><?php echo $row['fname']." ".$row['lname'] ?></span>
            <span class="profile__codeI">#<?php echo $_SESSION['unique_id'] ?></span>
        </span>
        <a href="settings.php"><i class="material-icons">&#xe8b8;</i></a>
    </div>
</div>