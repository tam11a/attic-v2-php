<div class="popupwin projectDetailsScr_pop">
        <form class="popBox">
            <div class="popHeader">
                <label>Project Description</label>
                <i class="material-icons" onclick="document.querySelector('.popupwin.onPop').classList.remove('onPop');">&#xe5cd;</i>
            </div>
            <input type="text" name="creator_id" value="<?php echo $room_id?>" style="display: none;">
            <textarea type="text" name="projectDesc" class="PDesc" placeholder="Aa.." autocomplete="off"></textarea>
            <input type="submit" class="Descsubmit" value="Update">
        </form>
</div>