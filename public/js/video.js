const video=document.querySelector('#video'),
    videoProgressBar=document.querySelector('.videoProgressBar'),
    videoTimelineHover=document.querySelector('.videoTimelineHover'),
    videoTimeline=document.querySelector('.videoTimeline'),
    playVideoIcon=document.querySelector('.playVideoIcon iconify-icon'),
    speakerVideoIcon=document.querySelector('.speakerVideoIcon'),
    videoDurationContainer=document.querySelector('.videoDurationContainer'),
    settingVideoIcon=document.querySelector('.settingVideoIcon'),
    miniPlayerVideoIcon=document.querySelector('.miniPlayerVideoIcon'),
    fullscreenVideoIcon=document.querySelector('.fullscreenVideoIcon');
let isVideoPlay=false;
const playVideo = (value) => {
       video.play();
       isVideoPlay=true;
       playVideoIcon.setAttribute('icon','solar:pause-broken');
}
const pauseVideo = (value) => {
       video.pause();
       isVideoPlay=false;
       playVideoIcon.setAttribute('icon','solar:play-broken');
}
playVideoIcon.addEventListener('click',e=>{
    !isVideoPlay ? playVideo():pauseVideo();
})
video.addEventListener('click',e=>{
    !isVideoPlay ? playVideo():pauseVideo();
})
video.addEventListener('loadeddata',e=>{
    let duration=e.target.duration;
    let totalMin=Math.floor(duration /60);
    let totalSec=Math.floor(duration %60);
    totalSec < 10 ? totalSec='0'+totalSec: totalSec;
    videoDurationContainer.lastElementChild.textContent=`${totalMin} : ${totalSec}`;
})
video.addEventListener('timeupdate',e=>{
    let duration=e.target.currentTime;
    let totalMin=Math.floor(duration /60);
    let totalSec=Math.floor(duration %60);
    totalSec < 10 ? totalSec='0'+totalSec: totalSec;
    videoDurationContainer.firstElementChild.textContent=`${totalMin} : ${totalSec}`;
    let totalDuration=e.target.duration;
    let progressBarWidth= (duration / totalDuration) * 100;
    videoTimeline.style.width=`${progressBarWidth}%`;
})
