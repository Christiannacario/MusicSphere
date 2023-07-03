const menubtn = document.querySelector(".menu-btn");
const container = document.querySelector(".container");
menubtn.addEventListener("click", () => {
    container.classList.toggle("active");
})

let playing = false,
    currentSong = 0,
    shuffle = false,
    repeat = false,
    favorits = [],
    audio = new Audio();

const songs = [
    {
        title: "song 1",
        artist: "artist song 1",
        img_src: "img3.jpeg",
        src: "1.mp3",
    },
    {
        title: "song 2",
        artist: "artist song 2",
        img_src: "img4.jpeg",
        src: "2.mp3",
    }
];

const playlistcontainer = document.querySelector("#playlist"),
    infoWrapper = document.querySelector(".info"),
    coverImage = document.querySelector(".cover-image"),
    currentSongTitle = document.querySelector("current-song-title"),
    currentSongFavorite = document.querySelector("#current-favorite");


function init(){
    updatePlaylist(songs);
    loadSong(currentSong);
}

init();


function updatePlaylist(songs){

    playlistcontainer.innerHTML = "";

    songs.forEach((song, index) =>{

        const { title, src} = song;

        const isFavorite = favorits.includes(index);

        const tr = document.createElement("tr");
    tr.classList.add("song");
    tr.innerHTML = `
                 <td class="no">
                            <h5>${index + 1}</h5>
                        </td>
                        <td class="title">
                            <h6>${title}</h6>
                        </td>
                        <td class="length">
                            <h5>2:03</h5>
                        </td>
                        <td>
                            <i class="fas fa-heart ${isFavorite ? "active" : ""}"></i>
                        </td>`;

        playlistcontainer.appendChild(tr);

        const audioforDuration = new Audio(`data/${src}`);
        audioforDuration.addEventListener("loadedmetadata", () => {
            const duration = audioforDuration.duration;

            let songDuration = formatTime(duration);
            tr.querySelector(".lenght h5").innerText = songDuration;
        })
    })

}

function formatTime(time){
    let minutes = Math.floor(time/60);
    let seconds = Math.floor(time%60);
    seconds = seconds < 10 ? `0${seconds}` : seconds;
    return `${minutes}:${seconds}`;
}


function loadSong(num){

    infoWrapper.innerHTML = `<h2>${songs[num].title}</h2>
    <h3>${songs[num].artist}</h3>`;

    currentSongTitle.innerHTML = songs[num].title;

    //change the cover image 
    coverImage.style.backgroundImage = `url(data/${songs[num].img_src})`;

    if(favorits.includes(num)){
        currentSongFavorite.classList.add("active");
    }else{
        currentSongFavorite.classList.remove("active");
    }

}

//for play and pause next prev function

const playPauseBtn = document.querySelector("#playpause"),
    nextBtn = document.querySelector("#next"),
    preBtn = document.querySelector("#prev");

playPauseBtn.addEventListener("click", () => {
    if(playing){
        playPauseBtn.classList.replace("fa-pause", "fa-play");
        playing = false;
        audio.pause();
    }else{ 
        playPauseBtn.classList.replace("fa-play", "fa-pause");
        playing = true;
        audio.play();
    }
})