<div class="popupwin projectDurationScr_pop">
        <form class="popBox">
            <div class="popHeader">
                <label>Duration</label>
                <i class="material-icons" onclick="document.querySelector('.popupwin.onPop').classList.remove('onPop');">&#xe5cd;</i>
            </div>
            <input type="text" name="creator_id" value="<?php echo $room_id?>" style="display: none;">
            <label class="dateLabel">from:</label>
            <input type="date" name="startDate" id="" value="2021-03-27" min="2021-03-27">
            <label class="dateLabel">to:</label>
            <input type="date" name="endDate" id="" value="2021-03-27" min="2021-03-27">
            <input type="submit" class="Descsubmit" value="Update">
        </form>
</div>