const chatlist = document.querySelector(".sidebar__body__chats");

function UpdateChatlist(){
    // <?php include_once('statics/php/fetch_chats.php'); ?>
}

setInterval(()=>{
    // let's start Ajax
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("GET", "statics/php/fetch_chats.php", true);
    xhr.onload = () => {
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                //console.log(data);
                chatlist.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 500);