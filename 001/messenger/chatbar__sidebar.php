<div class="chat__bar_sidebar">
    <div class="chat__bar_sidebar_area">                
        <div class="chat__bar_sidebar_child">
            <div class="sidebar_child_header">
                <p>Project Description</p>
                <i class="material-icons">&#xe14d;</i>
                <i class="material-icons" onclick="document.querySelector('.popupwin.projectDetailsScr_pop').classList.add('onPop');">&#xe3c9;</i>
            </div>
            <div class="sidebar_child_p">
            <?php echo $row3['room_desc']?>
            </div>
        </div>
        <div class="chat__bar_sidebar_child">
            <div class="sidebar_child_header">
                <p>Duration <span id="duration">(4 Days Left)</span></p>
                <i class="material-icons">&#xe616;</i>
                <i class="material-icons setdate" onclick="document.querySelector('.popupwin.projectDurationScr_pop').classList.add('onPop');">&#xe3c9;</i>
            </div>
            <div class="sidebar_child_p">
                <span id="startDate">23 Feb, 2021</span> - <span id="endDate">29 Feb, 2021</span>

            </div>
        <div class="chat__bar_sidebar_child">
            <div class="sidebar_child_header">
                <p>Progress</p>
                <i class="material-icons"onclick="document.querySelector('.popupwin.projectTaskShow_pop').classList.add('onPop');">&#xe895;</i>
                <i class="material-icons setdate" onclick="document.querySelector('.popupwin.projectTaskScr_pop').classList.add('onPop');">&#xe3c9;</i>
            </div>
            <div class="sidebar_child_p">
                <div class="progressbar">
                    <span class="progress" style="width: <?php echo $row3['room_tasks']?>%;"></span>
                    <span class="progressmeter"><?php echo $row3['room_tasks']?>%</span>
                </div>
            </div>
        </div>
        <div class="chat__bar_sidebar_child">
            <div class="sidebar_child_header">
                <p>Shared Files</p>
                <i class="material-icons">&#xe895;</i>                        
            </div>
        </div>
    </div>    
</div>