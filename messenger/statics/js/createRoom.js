const Cform = document.querySelector(".popBox"),
nameField = Cform.querySelector(".cpname"),
createBtn = Cform.querySelector(".csubmit");

Cform.onsubmit = (e) => {
    e.preventDefault();
}

createBtn.onclick = () => {
    // let's start Ajax
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "statics/php/createRoom.php", true);
    xhr.onload = () => {
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                nameField.value = "";
                location.href = "chat.php?room_id="+xhr.response;
            }
        }
    }
    let formData = new FormData(Cform);
    xhr.send(formData);
    
}
