const menubtn = document.querySelector(".menu-btn"),
    container = document.querySelector(".container");

menubtn.addEventListener("click", () => {
    container.classList.toggle("active");
});

let playing = false,
    currentsong = 0,
    shuffle = false,
    repeat = false,
    favorits = [],
    audio = new Audio();

const songs = [
    {
        title: "Starboy",
        artist: "artist song 1",
        img_src: "img1.jpeg",
        src: "Starboy(48k).mp3",
    },
    {
        title: "Die for you",
        artist: "artist song 2",
        img_src: "img1.jpeg",
        src: "Weeknd2.mp3",
    },
];

const playlistContainer = document.querySelector("#playlist"),
    infoWrapper = document.querySelector(".info"),
    coverImage = document.querySelector(".cover-image"),
    currentSongTitle = document.querySelector(".current-song-title"),
    currentFavorit = document.querySelector("#current-favorite");

function init(){
    updatePlaylist(songs);
    loadSong(currentsong);
}

init();


function updatePlaylist(songs){
    //remove any existing elements
    playlistContainer.innerHTML = "";
    songs.forEach((song, index) => {
        //extract data from song
        const {title,src} = song;

        const isFavorite = favorits.includes(index);

         //create a tr to wrapper song
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
                    </td>
    `;

        playlistContainer.appendChild(tr);

        tr.addEventListener("click", (e) => {

            //let add to favorite when clicked on heart
            if(e.target.classList.contains("fa-heart")){
                addToFavorits(index);
                e.target.classList.toggle("active");
                return;
            }

            currentsong = index;
            loadSong(currentsong);
            audio.play();
            container.classList.remove("active");
            playPauseBtn.classList.replace("fa-play", "fa-pause");
            playing = true;
        })



        const audioForDuration = new Audio(`data/${src}`);
        audioForDuration.addEventListener("loadedmetadata", () => {
            let songDuration = formatTime(duration);
            tr.querySelector(".length h5").innerText = songDuration;
        });

    });
   
}

function formatTime(time){
    //format time like 2:30
    let minutes = Math.floor(time/60);
    let seconds = Math.floor(time%60);
        seconds = seconds < 10 ? `0${seconds}` : seconds;
        return `${minutes}:${seconds}`;
}

function loadSong(num){
    //change all the title artist and times to current song
    infoWrapper.innerHTML = `
        <h2>${songs[num].title}</h2>
        <h3>${songs[num].artist}</h3>
    `;

    currentSongTitle.innerHTML = songs[num].title;

    //change the cover image
    coverImage.style.backgroundImage = `url(data/${songs[num].img_src})`;

    audio.src = `data/${songs[num].src}`;

    //if song is in favorite highlight
    if (favorits.includes(num)) {
        currentFavorit.classList.add("active");
    }else{
        currentFavorit.classList.remove("active");
    }
}



//lets add play pause next prev functionality

const playPauseBtn = document.querySelector("#playpause"),
    nextBtn = document.querySelector("#next"),
    prevBtn = document.querySelector("#prev");

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
});

function nextSong() {

    if (shuffle) {
        shuffleFunc();
        loadSong(currentsong);
    }

    else if (currentsong < songs.length - 1) {
        currentsong++;
    }else{
        currentsong = 0;
    }

    loadSong(currentsong);

    if(playing){
        audio.play();
    }
}

nextBtn.addEventListener("click", nextSong);

function prevSong() {

    if (shuffle) {
        shuffleFunc();
        loadSong(currentsong);
    }

    else if (currentsong > 0) {
        currentsong--;
    }else{
        currentsong = songs.length - 1;
    }
    loadSong(currentsong);

    if (playing) {
        audio.play();
    }
}

prevBtn.addEventListener("click", prevSong);

function addToFavorits(index){
    if (favorits.includes(index)) {
        favorits = favorits.filter((item) => item ===! index);
        currentFavorit.classList.remove("active");
    }else{
        favorits.push(index);

        if (index === currentsong) {
            currentFavorit.classList.add("active");
        }
    }

    updatePlaylist(songs);
}

currentFavorit.addEventListener("click", () => {
    currentFavorit.classList.toggle("active");
    addToFavorits(currentsong);
});


//for shuffle funtionality

const shuffleBtn = document.querySelector("#shuffle");

function shuffleSongs(){
    shuffle = !shuffle;
    shuffleBtn.classList.toggle("active");
}

shuffleBtn.addEventListener("click", shuffleSongs);

function shuffleFunc(){
    if(shuffle){
        currentsong = Math.floor(Math.random() * songs.length);
    }
}


//loader

var loader = document.getElementById("preloader");

window.addEventListener("load", function(){
    loader.style.display = "none";
})