<div class="popupwin uploadImage_pop">
    <style>
        .image-preview{
            width: 80%;
            min-height: 100px;
            border: 2px dotted #00000022;

            /* Default text */
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #000;
        }
        .image-preview__image{
            display: none;
            max-width: 250px;
        }
    </style>

    <form class="popBox">
        <div class="popHeader">
            <label>Send Image</label>
            <i class="material-icons" onclick="document.querySelector('.popupwin.onPop').classList.remove('onPop');">&#xe5cd;</i>
        </div>
        <center>
            <div class="image-preview" id="imagePreview">
                <img src="" class="image-preview__image">
                <span class="image-preview__default-text">
                    <i class="material-icons">&#xe871;</i>
                </span>
                <!-- &#xe871; -->
            </div>
        </center>
        <input type="file" name="sendImage" id="imgInpt">
        <input type="text" name="room_id" value="<?php echo $row3['room_id']?>" style="display: none;">
        <input type="text" name="author_name" value="<?php echo $self_data['fname'].' '.$self_data['lname']?>" style="display: none;">
        <input type="text" name="author_img" value="<?php echo $self_data['img']?>" style="display: none;">
        <input type="text" name="room_id" value="<?php echo $row3['room_id']?>" style="display: none;">
        <input type="submit" class="Descsubmit" value="Send">
    </form>
    <script>
        const imgInpt = document.getElementById("imgInpt");
        const previewContainer = document.getElementById("imagePreview");
        const previewImage = previewContainer.querySelector(".image-preview__image");
        const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

        imgInpt.addEventListener("change", function(){
            const file = this.files[0];
            if(file){
                const reader = new FileReader();

                previewDefaultText.style.display = "none";
                previewImage.style.display = "block";

                reader.addEventListener("load", function(){
                    previewImage.setAttribute("src", this.result);
                });
                reader.readAsDataURL(file);
            }else{
                previewDefaultText.style.display = null;
                previewImage.style.display = null;
                previewImage.setAttribute("src", "");
            }
        });
    </script>
</div>