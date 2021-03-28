<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['room_id']);
        $output = "";

        $sql = "SELECT * FROM messages WHERE room_id = $incoming_id ORDER BY ts";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['author_id'] === $outgoing_id){
                    $output .= '<div class="per-msg msg-self">
                                    <div class="per-msg-body">
                                        <div class="per-msg-header">
                                            <div class="per-msg-name">'.$row['author_name'].'</div>
                                            <div class="per-msg-buttons">
                                                <i class="material-icons">&#xe14d;</i>
                                                <i class="material-icons">&#xe3c9;</i>
                                            </div>
                                        </div>
                                        <div class="per-msg-text">
                                            '.$row['text'].'
                                        </div>
                                        <div class="per-msg-timestamp">'.$row['ts'].'</div>
                                    </div>
                                </div>';
                }else{
                    $output .= '<div class="per-msg">
                                    <img class="per-msg-icon" src="statics/image/'.$row['author_img'].'">
                                    <div class="per-msg-body">
                                        <div class="per-msg-header">
                                            <div class="per-msg-name">'.$row['author_name'].'</div>
                                            <div class="per-msg-buttons">
                                                <i class="material-icons">&#xe14d;</i>
                                                <i class="material-icons">&#xe3c9;</i>
                                            </div>
                                        </div>
                                        <div class="per-msg-text">
                                         '.$row['text'].'
                                        </div>
                                        <div class="per-msg-timestamp">'.$row['ts'].'</div>
                                    </div>
                                    </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: index.php");
    }    
?>
