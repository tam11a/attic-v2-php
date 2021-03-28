<?php
    session_start();
    include_once "statics/php/config.php";
    if(!isset($_SESSION['unique_id'])){
        header("location: index.php");
    }
    //session_start();
    //include_once "statics/php/config.php";
    $sql = mysqli_query($conn, "SELECT * FROM user WHERE unique_id = {$_SESSION['unique_id']}");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Settings - Planet X Inc.</title>
    <link rel="shortcut icon" href="statics/image/Planet-X-logo.png" type="image/png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='statics/css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='statics/css/settings.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="container">
        <div class="sidebar__st">
            <ul>
                <li class="sidebar__stHeader">user settings</li>
                <li class="sidebar__stOptions">my account</li>
                <li class="sidebar__stOptions">privacy & safety</li>
                <!-- <li class="sidebar__stOptions"></li> -->
            </ul>
            <ul>
                <li class="sidebar__stHeader">security</li>
                <li class="sidebar__stOptions">security & login</li>
                <!-- <li class="sidebar__stOptions"></li> -->
            </ul>
            <ul>
                <a href="logout.php"><li class="sidebar__stOptions logoutBtn">log out</li></a>
            </ul>
        </div>
        <div class="mainscr__st">
            <div class="mainscr__child">
                <div class="mainscr__profile">
                    <div class="mainscr__child_header">my account</div>
                    <div class="mainscr__child_p mainscr__updateImg">
                        <div class="mainscr__img">
                            <img src="statics/image/<?php echo $row['img'] ?>" alt="<?php echo $row['lname'] ?>" class="mainscr__dp">
                        </div>
                        <!-- statics/image/Planet-X-logo.png -->
                        <div class="main__scr_icons">
                            <i class="material-icons">&#xe254;</i>
                            <i class="material-icons">&#xe872;</i>
                        </div>
                    </div>
                    <div class="mainscr__child_p">
                        <label>username</label>
                        <div class="showdata"><?php echo $row['fname']." ".$row['lname'] ?> #<?php echo $_SESSION['unique_id'] ?></div>
                        <i class="material-icons">&#xe254;</i>
                    </div>
                    <div class="mainscr__child_p">
                        <label>email</label>
                        <div class="showdata"><?php echo $row['email'] ?></div>
                        <i class="material-icons">&#xe254;</i>
                    </div>
                    <div class="mainscr__child_p">
                        <label>phone</label>
                        <div class="showdata"></div>
                        <i class="material-icons">&#xe254;</i>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <div class="backBtn__st">
            <i class="material-icons backBtn__st0" onclick="window.history.back();">&#xe317;</i>
        </div>
    </div>
</body>
</html>