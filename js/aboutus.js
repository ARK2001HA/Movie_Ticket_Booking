//TOGGLE

const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
  ".container,.movie-list-title,.navbar-container,.sidebar,.left-menu-icon,.toggle"
);

ball.addEventListener("click", () => {
  items.forEach((item) => {
    item.classList.toggle("active");
  });
  ball.classList.toggle("active");
});

 var videoPlayer = document.getElementById("videoPlayer");
 var myVideo = document.getElementById("myVideo");

 function stopVideo() {
 videoPlayer.style.display = "none";

///Mute
 var video = document.getElementById("myVideo");
 video.muted= true;
 }

 function playVideo(file) {
    myVideo.src = file;
    videoPlayer.style.display = "block";
  }