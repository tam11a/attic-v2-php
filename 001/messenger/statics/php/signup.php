<?php
 session_start();
 include_once "config.php";
// define('DOCROOT', $_SERVER['H:\Xampp\htdocs\chatapp-trial'], 'chatapp-trial');
 $fname = mysqli_real_escape_string($conn, $_POST['fname']);
 $lname = mysqli_real_escape_string($conn, $_POST['lname']);
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 
 if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT * FROM user WHERE email = '{$email}';");
        //echo "{$sql}";
        if(mysqli_num_rows($sql) > 0){
        //if($sql){
            //echo "$email - This email already exist!";
            echo "This email already exist!";
        }else{
                    $time = time();
                    $status = "Hey!";
                    $random_id = rand(time(), 10000000);
                    $new_img_name = "user-img-120391123.png";
                    $sql2 = mysqli_query($conn, "INSERT INTO user (unique_id, fname, lname, email, password, img, status)
                                            VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                    if($sql2){
                        $sql3 = mysqli_query($conn, "SELECT * FROM user WHERE email = '{$email}'");
                        if(mysqli_num_rows($sql3) > 0){
                        //if($sql3){
                            $row = mysqli_fetch_assoc($sql3);
                            $_SESSION['unique_id'] = $row['unique_id'];
                            echo "success";
                        }
                    } else {
                        echo "Something went wrong!";
                    }
        }
    }else{
        echo "Invalid Email Address";
    }
 }else{
     echo "All input field are required!!";
 }
?>