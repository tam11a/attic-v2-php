<div class="popupwin addtoGrpScr_pop">
        <form class="popBox">
            <div class="popHeader">
                <label>Add Member</label>
                <i class="material-icons" onclick="document.querySelector('.popupwin.onPop').classList.remove('onPop');">&#xe5cd;</i>
            </div>
            <input type="text" name="room_name" value="<?php echo $row3['room_name']?>" readonly>
            <input type="text" name="room_id" value="<?php echo $room_id?>" style="display: none;">
            <input type="text" name="author_id" value="<?php echo $_SESSION['unique_id']?>" style="display: none;">
            <input type="text" name="addpname" class="cpname searchOption" placeholder="Search Person" autocomplete="off">
            <div class="suggestionBox">
                <ul class="searchOptionSuggestion">
                    <li>ibnesiam12@gmail.com</li>
                    <li>ibrahimsadiktamim@gmail.com</li>
                    <li>iby_0912@gmail.com</li>
                </ul>
            </div>
            <input type="submit" class="addsubmit" value="Invite">
        </form>
</div>

<!-- style="display: none;" -->