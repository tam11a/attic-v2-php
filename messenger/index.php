<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: chat.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Log In - Ashd Attic</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='statics/css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='statics/css/login.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <section class="form login">
            <header>Sign In</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                    <div class="field input">
                        <!-- <label>Email Address</label> -->
                        <input type="text" name="email" placeholder="Enter Email Address">
                    </div>
                    <div class="field input">
                        <!-- <label>Password</label> -->
                        <input type="password" name="password" placeholder="Enter Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Sign in">
                    </div>
            </form>
            <div class="link"><a href="signup.php">Create an account</a></div>
        </section>
    </div>
    <script src="statics/js/pass-show-hide.js"></script>
    <script src="statics/js/login.js"></script>
</body>
</html>