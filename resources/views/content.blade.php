@extends('layout.layout')
@section('sidebar')
<x-navbar></x-navbar>
<x-sidebar active-link='home'></x-sidebar>
@endsection
@section('content')
    <div
        class="content_area_container bg-white min-h-[max(100vh,50vw)] w-full sm:w-[calc(100%_-_var(--4vw))] absolute right-0 ">
        @include('layout._tabs')
        <div class="content_area mt-[max(8vw,80px)] w-full">
            <div
                class="grid w-full px-[--05vw] gap-1vw mb-3 grid-cols-1 md-phone:grid-cols-2 2xl:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 min-[2000px]:grid-cols-5">
                @for($i=0;$i<4;$i++)
                    <div class="card p-1 cursor-pointer grid grid-cols-1  br-.3vw">

                        <div class="image_container relative w-full">
                            <div class="video_container aspect-video relative">
                                <video src="{{asset('videos/video.mp4')}}" id="main_video"></video>
                                <div class="absolute top-0 right-0 p-1">
                                    <iconify-icon icon="octicon:unmute-24" class="bg-black p-1 br-round cursor-pointer"></iconify-icon>
                                </div>
                                <div class="absolute bottom-0 left-0 w-full h-3vw px-4 flex items-center" style="background:linear-gradient(to top,var(--black-trans),transparent);">
                                    <span class="videoDuration fz-.8vw font-light"><b>00:00</b> / <b>12:00</b></span>
                                </div>
                            <div class="progressbar_container absolute bottom-0 flex flex-col justify-end w-full h-[--1vw]">
                                <div class="progressbar_video hidden absolute aspect-video w-[--6vw] shadow-2xl border-2 overflow-hidden br-.3vw top-[-500%]">
                                    <span class="absolute bg-[--black-trans] w-full text-center left-50% bottom-0 text-[max(.6vw,5px)]" style="background:linear-gradient(to top,var(--black-trans),transparent);">12:00</span>
                                    <video id="small_video"><source src="{{asset('videos/video.mp4')}}"/></video>
                                </div>
                                <div class="progressbar bg-[--white-trans] w-full h-[4px]">
                                <span class="progressbar_hover absolute h-[4px] w-1/2 bg-[--white-trans]"></span>
                                <span class="progressbar_thump absolute bg-red-800 h-[4px]"></span>
                                </div>
                            </div>
                            </div>
                            <div class="image absolute top-0 left-0 aspect-video">
                            <div class="absolute bottom-[3%] px-2 br-.3vw right-[2%] bg-[--black-trans] fz-.8vw font-bold  text-white videoDuration2">12:00</div>
                            <img
                                src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Img">
                            </div>
                        </div>
                        <div class="info p-[--05vw]">
                            <div class="w-full h-fit grid grid-cols-[max(2.5vw,20px)_auto] gap-.5vw">
                                <div class="">
                                    <img
                                        src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="" class="h-[max(2.5vw,20px)] br-round">
                                </div>
                                <h3 id="video_title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque
                                    architecto doloremque quidem et libero explicabo, labore velit voluptatem neque
                                    hic.</h3>
                            </div>
                            <div class="ml-[--3vw] mt-[--03vw] flex flex-row items-center sm:flex-col sm:items-start">
                                <div
                                    class="text-[--color2] hover:text-[--bg-dark] flex items-center text-[clamp(10px,.9vw,30px)]">
                                    Sony
                                    Liv <span class="flex sm:hidden"> . </span>
                                </div>
                                <div class="text-[--color2] text-[max(.8vw,8px)]"><span> 10k views</span> . <span>3 months ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </div>
    <x-sidebar-model active-link='home'></x-sidebar-model>
@endsection
@push('javascript')
    <script src="{{asset('js/tabs.js')}}"></script>
    <script >
        const main_container=document.querySelectorAll('.image_container');
        const image_container=document.querySelectorAll('.image_container .image');
        const videoDuration=document.querySelectorAll('.videoDuration b:nth-child(2)');
        const videoDuration1=document.querySelectorAll('.videoDuration b:nth-child(1)');
        const progressbar_thump=document.querySelectorAll('.progressbar_thump');
        const progressbar_hover=document.querySelectorAll('.progressbar_hover');
        const progressbar_container=document.querySelectorAll('.progressbar_container');
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
                let totalDuration=small_videos[i].duration;
                let react=e.currentTarget.getBoundingClientRect();
                let totalWidth=react.width;
                let xPosition=e.clientX - react.left;
                progressbar_hover[i].style.width=`${(xPosition / totalWidth) *100}%`;
                // main_videos[i].currentTime=Math.floor((e.offsetX /progress.clientWidth) * totalDuration);

                // // console.log((e.clientX /progress.clientWidth) * totalDuration)
                // console.log(Math.floor((e.offsetX /progress.clientWidth) * totalDuration))
            })
            progress.addEventListener('click',e=>{
                // let totalDuration=small_videos[i].duration;
                // main_videos[i].currentTime=Math.floor((e.offsetX /progress.clientWidth) * totalDuration);
                // let setDuration=10;
                // setDuration+=10;
                // main_videos[i].addEventListener('canplay',function (){
                //     this.currentTime +=20;
                // })
                if (main_videos[i].seekable.length>0){
                main_videos[i].currentTime +=10;
                }
                main_videos[i].addEventListener('play',e=>{
                main_videos[i].currentTime +=10;
                })
                console.log(main_videos[i].seekable);
                // main_videos[i].media.addEventListener('playing',function (){
                // main_videos[i].setCurrentTime(10);

                // });
            })
        })
    </script>
@endpush
