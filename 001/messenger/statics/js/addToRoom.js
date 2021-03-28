const Addform = document.querySelector(".addtoGrpScr_pop .popBox"),
AddNameField = Addform.querySelector(".addpname"),
AddToGrpBtn = Addform.querySelector(".addsubmit");

Addform.onsubmit = (e) => {
    e.preventDefault();
}

AddToGrpBtn.onclick = () => {
    // let's start Ajax
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "statics/php/add_toGroup.php", true);
    xhr.onload = () => {
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                //AddNameField.value = "";
                console.log(xhr.response);
                //location.href = "chat.php?room_id="+xhr.response;
                document.querySelector('.popupwin.onPop').classList.remove('onPop');
            }
        }
    }
    let formData = new FormData(Addform);
    xhr.send(formData);
}
