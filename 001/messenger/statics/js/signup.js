const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefault();
}

continueBtn.onclick = () => {
    // let's start Ajax
    let xhr = new XMLHttpRequest(); // creating XML object
    xhr.open("POST", "statics/php/signup.php", true);
    xhr.onload = () => {
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                //console.log(data);
                if(data=="success"){
                    location.href = "chat.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";

                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}