<?php
    session_start();
    include_once "statics/php/config.php";
    if(!isset($_SESSION['unique_id'])){
        header("location: index.php");
    }
?>
<?php include_once "header.php"; ?>
<body>
    <div class="container">
        <?php include_once "chat__sidebar.php"; ?>
        <?php include_once "chat__chatbar.php"; ?>
    </div>
    <?php include_once "create_pop.php"; ?>
    <?php include_once "addToGroup_pop.php"; ?>
    <?php include_once "popups/projectDesc_pop.php"; ?>
    <?php include_once "popups/projectDuration_pop.php"; ?>
    <?php include_once "popups/projectTask_pop.php"; ?>
    <?php include_once "popups/uploadImage_pop.php"; ?>
    <?php include_once "popups/uploadFile_pop.php"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="statics/js/emojionearea.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#writeAmessage").emojioneArea({
                filtersPosition: "bottom",
                searchPlaceholder: "Search Emoji",
                placeholder: "Aa"
            });
        });
    </script>
    <script src="statics/js/chat.js"></script>
    <script src="statics/js/createRoom.js"></script>
    <script src="statics/js/addToRoom.js"></script>
    <script src="statics/js/getData-01.js"></script>
    <script src="statics/js/toggle.js"></script>
</body>
</html>