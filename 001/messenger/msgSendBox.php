<form class="chat__bar_sendbox">
    <div class="formIcons">
        <i class="material-icons" onclick="document.querySelector('.popupwin.uploadFile_pop').classList.add('onPop');">&#xe226;</i>
        <i class="material-icons" onclick="document.querySelector('.popupwin.uploadImage_pop').classList.add('onPop');">&#xe3f4;</i>
    </div>
    <span><input type="text" name="msgObj_text" class="writeBox" id="writeAmessage"></span>
    <input type="text" name="room_id" value="<?php echo $row3['room_id']?>" style="display: none;">
    <input type="text" name="author_name" value="<?php echo $self_data['fname'].' '.$self_data['lname']?>" style="display: none;">
    <input type="text" name="author_img" value="<?php echo $self_data['img']?>" style="display: none;">
    <input type="text" name="room_id" value="<?php echo $row3['room_id']?>" style="display: none;">
    <input type="text" name="last_mid" value="0" style="display: none;">
    <!-- <input type="submit" value="Send" class="TsendBtn"> -->
    <button  class="TsendBtn" type="submit"><i class="material-icons">&#xe163;</i></button>
</form>