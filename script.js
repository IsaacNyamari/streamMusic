"use strict"
let submitBtn = document.getElementById("submitBtn");
let audioInput = document.getElementById("audio");
let alerts = document.querySelector(".alert");
let terms = document.querySelector(".terms");
let termsCheck = document.getElementById("terms");
let form = document.querySelector("form");
let imgInput = document.getElementById("poster");
let uploadImageOutput = document.getElementById("uploadImage");
let audioName = document.getElementById("audioName");

//
imgInput.onchange = function () {
    let fileReader = new FileReader()
    fileReader.readAsDataURL(imgInput.files[0])
    fileReader.onloadend = () => {
        uploadImageOutput.src = `${fileReader.result}`
        uploadImageOutput.style.display = "block";
    }
}
audioInput.onchange = function () {
    let fileReader = new FileReader()
    fileReader.readAsDataURL(audioInput.files[0])
    fileReader.onloadend = () => {
        audioName.textContent = `${audioInput.files[0].name}`
    }
}
// verify conditions and upload
termsCheck.addEventListener("click", () => {
    terms.classList.toggle("termsOpacity")
    if (termsCheck.checked) {
        if ((imgInput.value) && (audioInput.value)) {
            submitBtn.toggleAttribute("disabled")
        }
    }
})
if (alerts) {
    setInterval(() => {
        alerts.remove()
    }, 4000)
}