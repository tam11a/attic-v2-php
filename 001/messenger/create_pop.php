<div class="popupwin createScr_pop">
        <form class="popBox">
            <div class="popHeader">
                <label>Create Project</label>
                <i class="material-icons" onclick="document.querySelector('.popupwin.onPop').classList.remove('onPop');">&#xe5cd;</i>
            </div>
            <input type="text" name="creator_id" value="<?php echo $_SESSION['unique_id']?>" style="display: none;">
            <input type="text" name="cpname" class="cpname" placeholder="Group Name" autocomplete="off">
            <input type="submit" class="csubmit" value="Create">
        </form>
</div>