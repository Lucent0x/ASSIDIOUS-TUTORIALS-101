const form = document.querySelector("div.form form");
const submit = document.getElementById("btn");
const msg = document.getElementById("status");

form.onsubmit = (e) =>{
    e.preventDefault();
    console.log("submitted");
}

submit.onclick = () => {
    xhr = new XMLHttpRequest;
    xhr.open('POST', './upload.php', true);
    
    //checking for good signs

    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                //fetch response

                let response = xhr.response;
                msg.textContent = response;
            }
        }
    }

    let data = new FormData(form);
    xhr.send(data);
}