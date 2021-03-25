const msglist = document.querySelector(".chat__bar_msgbox");

setInterval(()=>{
    // let's start Ajax
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("GET", "statics/php/fetch_msgs.php", true);
    xhr.onload = () => {
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                //console.log(data);
                msglist.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 500);
 