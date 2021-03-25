const Tform = document.querySelector(".chat__bar_sendbox"),
TinputField = Tform.querySelector(".writeBox"),
TchatBox = document.querySelector(".chat__bar_msgbox"),
TsendBtn = Tform.querySelector(".TsendBtn");

//emojionearea-editor

Tform.onsubmit = (e) => {
     e.preventDefault();
}

TsendBtn.onclick = () => {
    // let's start Ajax
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "statics/php/insert-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                Tform.querySelector(".emojionearea-editor").value = "";
                scrollToBottom();
            }
        }
    }
    let formData = new FormData(Tform);
    xhr.send(formData);
}


setInterval(()=>{
  // let's start Ajax
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "statics/php/get-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                TchatBox.innerHTML = data;
                console.log(data);
            }
        }
    }
    let formData = new FormData(Tform);
    xhr.send(formData);
    //xhr.send();
}, 500);

function scrollToBottom(){
    TchatBox.scrollTop = TchatBox.scrollHeight;
  }
  