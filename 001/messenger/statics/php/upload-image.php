<?php
    $outgoing_id = $_SESSION['unique_id'];
    $room_id = mysqli_real_escape_string($conn, $_POST['room_id']);
    $author_name = mysqli_real_escape_string($conn, $_POST['author_name']);
    $author_img = mysqli_real_escape_string($conn, $_POST['author_img']);
    $file_type = "image";
    if(isset($_FILES['image'])){
        $img_name = $_FILES['image']['name'];
        $img_type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];

        $img_explode = explode('.', $img_name);
        $img_ext = end($img_explode);

        $extensions = ['png', 'jpeg', 'jpg'];
        if(in_array($img_ext, $extensions) === true){
            $time = time();
            $new_img_name = $time.$img_name;
            if(move_uploaded_file($tmp_name, "msg-image/".$new_img_name)){
                $random_id = rand(time(), 10000000);
                $sql23 = mysqli_query($conn, "INSERT INTO messages (mid, attachment_type, attachment_url, author_id, room_id, ts, author_name, author_img)
                            VALUES (null, '{$file_type}', '{$new_img_name}', {$outgoing_id}, {$room_id}, {$time}, '{$author_name}', '{$author_img}')");
                echo $sql23;
                }else{
                    echo "Something went wrong!";
                }

            }
        }else{
            echo "Please select an Image file - jpeg, jpg, png!";
        }
    }else{
        echo "Please select an image file!";
    }
?>