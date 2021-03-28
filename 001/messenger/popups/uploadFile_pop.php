<div class="popupwin uploadFile_pop">
    <form class="popBox">
        <div class="popHeader">
            <label>Send File</label>
            <i class="material-icons" onclick="document.querySelector('.popupwin.onPop').classList.remove('onPop');">&#xe5cd;</i>
        </div>
        <input type="file" name="sendImage" id="imgInpt">
        <input type="text" name="room_id" value="<?php echo $row3['room_id']?>" style="display: none;">
        <input type="text" name="author_name" value="<?php echo $self_data['fname'].' '.$self_data['lname']?>" style="display: none;">
        <input type="text" name="author_img" value="<?php echo $self_data['img']?>" style="display: none;">
        <input type="text" name="room_id" value="<?php echo $row3['room_id']?>" style="display: none;">
        <input type="submit" class="Descsubmit" value="Send">
    </form>
</div>