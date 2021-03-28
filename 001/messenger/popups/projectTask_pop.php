<div class="popupwin projectTaskScr_pop">
        <form class="popBox">
            <div class="popHeader">
                <label>Tasks</label>
                <i class="material-icons" onclick="document.querySelector('.popupwin.onPop').classList.remove('onPop');">&#xe5cd;</i>
            </div>
            <input type="text" name="creator_id" value="<?php echo $room_id?>" style="display: none;">
            <label for="">Progress: <span>50%</span></label>
            <ul class="tasklist">
                <li>
                    <i class="material-icons">&#xe5ca;</i>
                    <div class="task-title">task name</div>
                    <i class="material-icons">&#xe028;</i>
                    <i class="material-icons">&#xe872;</i>
                </li>    
                <li>
                    <i class="material-icons">&#xe5ca;</i>
                    <div class="task-title">task name</div>
                    <i class="material-icons">&#xe028;</i>
                    <i class="material-icons">&#xe872;</i>
                </li>    
                <li>
                    <i class="material-icons">&#xe5cd;</i>
                    <div class="task-title">task name</div>
                    <i class="material-icons">&#xe028;</i>
                    <i class="material-icons">&#xe872;</i>
                </li>    
                <li>
                    <i class="material-icons">&#xe5cd;</i>
                    <div class="task-title">task name</div>
                    <i class="material-icons">&#xe028;</i>
                    <i class="material-icons">&#xe872;</i>
                </li>    
            </ul>
            <div class="addNewDiv">
                <input type="text" name="newTask" id="newTask" placeholder="Add New Task">    
                <button class="addTask"><i class="material-icons">&#xe145;</i></button>
            </div>
            <input type="submit" class="Descsubmit" value="Update">
        </form>
</div>

<div class="popupwin projectTaskShow_pop">
        <form class="popBox">
            <div class="popHeader">
                <label>Tasks</label>
                <i class="material-icons" onclick="document.querySelector('.popupwin.onPop').classList.remove('onPop');">&#xe5cd;</i>
            </div>
            <input type="text" name="creator_id" value="<?php echo $room_id?>" style="display: none;">
            <label for="">Progress: <span>50%</span></label>
            <ul class="tasklist">
                <li>
                    <i class="material-icons">&#xe5ca;</i>
                    <div class="task-title">task name</div>
                </li>    
                <li>
                    <i class="material-icons">&#xe5ca;</i>
                    <div class="task-title">task name</div>
                </li>    
                <li>
                    <i class="material-icons">&#xe5cd;</i>
                    <div class="task-title">task name</div>
                </li>    
                <li>
                    <i class="material-icons">&#xe5cd;</i>
                    <div class="task-title">task name</div>
                </li>    
            </ul>
        </form>
</div>