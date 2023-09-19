const main_container=document.querySelectorAll('.image_container');
const image_container=document.querySelectorAll('.image_container .image');
const videoDuration=document.querySelectorAll('.videoDuration b:nth-child(2)');
const videoDuration1=document.querySelectorAll('.videoDuration b:nth-child(1)');
const progressbar_thump=document.querySelectorAll('.progressbar_thump');
const video_speaker=document.querySelectorAll('.video_speaker');
const progressbar_hover=document.querySelectorAll('.progressbar_hover');
const progressbar_container=document.querySelectorAll('.progressbar_container');
const progressbar_duration=document.querySelectorAll('.progressbar_container span');
const progressbar_video=document.querySelectorAll('.progressbar_video');
const progressbar=document.querySelectorAll('.progressbar');
const videoDuration2=document.querySelectorAll('.videoDuration2');
const main_videos=document.querySelectorAll('.video_container #main_video');
const small_videos=document.querySelectorAll('.video_container #small_video');
main_container.forEach((btn,i)=>{
    btn.addEventListener('mouseover',e=>{
        try {
            image_container[i].classList.add('active');
            playVideo(i);
        }catch (error){
            console.log(error);
        }
    })
    btn.addEventListener('mouseleave',e=>{
        try {
            image_container[i].classList.remove('active');
            pauseVideo(i);
        }catch (error){
            console.log(error);
        }
    })
})
const playVideo = (index) => {
    main_videos[index].play();
}
const pauseVideo = (index) => {
    main_videos[index].pause();
}
main_videos.forEach((video,i)=>{
    video.addEventListener('loadeddata',e=>{
        let Duration=e.target.duration;
        let totalMin=Math.floor(Duration /60);
        let totalSec=Math.floor(Duration %60);
        totalSec < 10 ? totalSec='0'+totalSec: totalSec;
        videoDuration[i].textContent=`${totalMin} : ${totalSec}`;
        videoDuration2[i].textContent=`${totalMin} : ${totalSec}`;
    })
    video.addEventListener('timeupdate',e=>{
        let currentDuration=e.target.currentTime;
        let totalMin=Math.floor(currentDuration /60);
        let totalSec=Math.floor(currentDuration %60);
        totalSec < 10 ? totalSec='0'+totalSec: totalSec;
        videoDuration1[i].textContent=`${totalMin} : ${totalSec}`;
        let totalDuration=e.target.duration;
        let progressBarWidth= (currentDuration / totalDuration) * 100;
        progressbar_thump[i].style.width=`${progressBarWidth}%`;
    })
    video.addEventListener('play',e=>{
        playVideo(i);
    })
    video.addEventListener('pause',e=>{
        pauseVideo(i);
    })
})
progressbar_container.forEach((progress,i)=>{
    progress.addEventListener('mousemove',e=>{
        progressbar_video[i].classList.remove('hidden');
        let totalDuration=main_videos[i].duration;
        let react=e.currentTarget.getBoundingClientRect();
        let totalWidth=react.width;
        let xPosition=e.clientX - react.left;
        let x=xPosition - progressbar_video[i].offsetWidth /2;
        let maxXPosition=totalWidth - progressbar_video[i].offsetWidth;
        if (x>maxXPosition)x=maxXPosition;
        if (x<0)x=0;
        progressbar_hover[i].style.width=`${(xPosition / totalWidth) *100}%`;
        progressbar_video[i].style.left=`${x}px`;
        small_videos[i].currentTime=Math.floor((e.offsetX /progress.clientWidth) * totalDuration);
        let currentDuration=small_videos[i].currentTime;
        let totalMin=Math.floor(currentDuration /60);
        let totalSec=Math.floor(currentDuration %60);
        totalSec < 10 ? totalSec='0'+totalSec: totalSec;
        progressbar_duration[i].textContent=`${totalMin} : ${totalSec}`;
    })
    progress.addEventListener('mouseleave',e=>{
        progressbar_hover[i].style.width=`0%`;
        progressbar_video[i].classList.add('hidden');
    })
    progress.addEventListener('click',e=>{
        let totalDuration=main_videos[i].duration;
        let react=e.currentTarget.getBoundingClientRect();
        let totalWidth=react.width;
        let xPosition=e.clientX - react.left;
        progressbar_thump[i].style.width=`${(xPosition / totalWidth) *100}%`;
        main_videos[i].currentTime=Math.floor((e.offsetX /progress.clientWidth) * totalDuration);
    });
});
let isSound=true;
function sound(condition,index){
    if (condition==='on'){
        main_videos[index].volume=1;
        video_speaker[index].setAttribute('icon','octicon:unmute-24');
        isSound=true;
    }else {
        main_videos[index].volume=0;
        video_speaker[index].setAttribute('icon','octicon:mute-24');
        isSound=false;
    }
}
video_speaker.forEach((speaker,i)=>{
    speaker.addEventListener('click',e=>{
        if(isSound){
            sound('off',i);
        }else{
            sound('on',i);
        }
    })
})
