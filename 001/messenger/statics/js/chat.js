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
                Tform.querySelector(".emojionearea-editor").innerHTML = "";
                scrollToBottom();
            }
        }
    }
    let formData = new FormData(Tform);
    xhr.send(formData);
}
let oldMsg = null;

setInterval(()=>{
  // let's start Ajax
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "statics/php/get-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                if(oldMsg != data)
                {
                    TchatBox.innerHTML = data;
                    //console.log(data);
                    oldMsg = data;
                    scrollToBottom();
                }
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
  

  const Timgform = document.querySelector(".chat__bar_sendbox"),
  TimginputField = Tform.querySelector(".writeBox"),
  TimgsendBtn = Tform.querySelector(".TsendBtn");
  
  //emojionearea-editor
  
  Timgform.onsubmit = (e) => {
       e.preventDefault();
  }
  
  TimgsendBtn.onclick = () => {
      // let's start Ajax
      let xhr = new XMLHttpRequest(); // creating XML object
      xhr.open("POST", "statics/php/insert-chat.php", true);
      xhr.onload = () => {
          if(xhr.readyState == XMLHttpRequest.DONE){
              if(xhr.status == 200){
                    //pass
              }
          }
      }
      let formData = new FormData(Timgform);
      xhr.send(formData);
  }