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
    <title>Sign Up - Planet X Inc.</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='statics/css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='statics/css/login.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <section class="form signup">
            <header>Sign Up</header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                <div class="name-details">
                    <div class="field input">
                        <input type="text" name="fname" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <input type="text" name="lname" placeholder="Last Name">
                    </div>
                </div>
                    <div class="field input">
                        <input type="text" name="email" placeholder="Email Address">
                    </div>
                    <div class="field input">
                        <input type="password" name="password" placeholder="New Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <!-- <div class="field input">
                        <label>Confirm Password</label>
                        <input type="text" placeholder="Enter password again">
                    </div> -->
                    <!-- <div class="field image">
                        <label>Select Image</label>
                        <input type="file"> 
                    </div>-->
                    <div class="field button">
                        <input type="submit" value="Sign Up">
                    </div>
            </form>
            <div class="link">Already have an account? <a href="./">Login</a></div>
        </section>
    </div>
    <script src="statics/js/pass-show-hide.js"></script>
    <script src="statics/js/signup.js"></script>
</body>
</html>