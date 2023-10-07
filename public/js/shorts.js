const bottom_buttons=document.querySelectorAll('.bottom_buttons'),
    comment_box=document.querySelectorAll('.comment_box'),
    shorts_like_and_comment=document.querySelectorAll('.shorts_like_and_comment'),
    comment_btn=document.querySelectorAll('.comment_btn'),
    comment_box_off_btn=document.querySelectorAll('#comment_box_off_btn'),
    short_video=document.querySelectorAll('#short_video'),
    progressBar=document.querySelectorAll('.progressBar'),
    playShort=document.querySelectorAll('.playShort'),
    speakerShort=document.querySelectorAll('.speakerShort');

comment_btn.forEach((btn,i)=>{
    btn.addEventListener('click',e=>{
    comment_box[i].classList.toggle('active');
    shorts_like_and_comment[i].classList.toggle('active');
    bottom_buttons[i].classList.toggle('active');
    })
})
comment_box_off_btn.forEach((btn,i)=>{
    btn.addEventListener('click',e=>{
        comment_box[i].classList.toggle('active');
        shorts_like_and_comment[i].classList.toggle('active');
        bottom_buttons[i].classList.toggle('active');
    })
})
let isVideoLoad=false;
let isVideoPlay=false;
let isSoundOn=true;
playShort.forEach((btn,i)=>{
    btn.addEventListener('click',e=>{
        if (isVideoPlay){
            pausedVideo(i);
        }else {
            playVideo(i);
        }
    })
})
const playVideo=(index)=>{
    short_video[index].play();
    short_video[index].muted=false;
    playShort[index].setAttribute('icon','ic:baseline-pause');
    isVideoPlay=true;
}
short_video.forEach((video,i)=>{
    video.addEventListener('canplay',e=>{
    short_video[0].autoplay=true;
    short_video[0].muted=false;
    isVideoLoad=true;
    playVideo(0);
    });
    short_video[i].autoplay=false;
    short_video[i].muted=true;
    video.addEventListener('ended',e=>{
        console.log(e.target)
    })
})
// window.onload=function (){
//     short_video.forEach(video=>video.load());
// }
const pausedVideo=(index)=>{
    short_video[index].pause();
    playShort[index].setAttribute('icon','mdi:play');
    isVideoPlay=false;
}
speakerShort.forEach((speaker,i)=>{
    speaker.addEventListener('click',e=>{
        if (isSoundOn){
            sound_off(i);
        }else {
            sound_on(i);
        }
    })
})
function sound_on(index){
        short_video[index].volume=1;
    speakerShort[index].setAttribute('icon','akar-icons:sound-on');
        isSoundOn=true;
}
function sound_off(index){
        short_video[index].volume=0;
    speakerShort[index].setAttribute('icon','mdi:mute');
        isSoundOn=false;
}
short_video.forEach((video,i)=>{
    video.addEventListener('timeupdate',e=>{
        let currentTime=e.target.currentTime;
        let videoDuration=e.target.duration;
        let progressBarWidth=(currentTime /videoDuration) * 100;
        progressBar[i].style.width=`${progressBarWidth}%`;
    })
    video.addEventListener('play',()=>{
        playVideo(i);
    })
    video.addEventListener('pause',()=>{
        pausedVideo(i);
    })
    video.addEventListener('click',()=>{
        if (isVideoPlay){
            pausedVideo(i);
        }else {
            playVideo(i);
        }
    })
})
if (mediaQueryMax('640px')){
    shorts_like_and_comment.forEach(btn=>btn.classList.add('active'));
    bottom_buttons.forEach(btn=>btn.classList.add('active'));
    // shorts_like_and_comment[i].classList.toggle('active');
    // bottom_buttons[i].classList.toggle('active');
}
