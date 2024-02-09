let audioLists = document.querySelectorAll("#audioLists")
let audioPoster = document.querySelector("#audioPoster")
let audio = document.querySelector("audio")
let currentSongEl = document.querySelector("#currentSong")
let viewsEl = document.getElementById("views")
let audioTitle = document.getElementById("audioTitle")
let index = 0;
audioPoster.src = `albumArts/${audioLists[index].children[1].value}`
currentSongEl.src = `audio/${audioLists[index].children[2].textContent}`
audioLists.forEach(audioList => {
    audioList.addEventListener("click", (e) => {
        let audioId = audioList.children[0].value
        let audioSrc = e.srcElement.children[2].textContent
        // update dom
        audio.src = `audio/${audioSrc}`;
        audioPoster.src =  `albumArts/${audioList.children[1].value}`
        audio.setAttribute("autoplay", "true")
        audioTitle.textContent = audioList.children[2].textContent
        // update audio views
        let xhr = new XMLHttpRequest();
        let params = `id=${audioId}`
        xhr.open("post","addView.php",true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded")
        xhr.onload = function(){
            // console.log(this.response);
            viewsEl.textContent = `${this.response} views`
        }
        xhr.send(params)
    })
})