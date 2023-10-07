@extends('layout.layout')
@section('sidebar')
    <x-navbar></x-navbar>
{{--    <x-sidebar active-link="home"></x-sidebar>--}}
    <x-sidebar-model active-link="home"></x-sidebar-model>
@endsection
@section('content')
    <div class="content_area_container bg-white min-h-[max(100vh,50vw)] w-full sm:w-[calc(100%_-_var(--4vw))] absolute right-0 ">
        <div class="content_area mt-[max(5vw,50px)] w-full">
            <div class="grid grid-cols-1 md:grid-cols-[70%_30%]">
                <div class="px-2 sm:p-0">
                    <div class="video_container relative">
                        <video class="aspect-video br-.5vw" id="video"><source src="{{asset('videos/video.mp4')}}" type="video/mp4"/></video>
                        <div class="videoControls_container  w-full h-[--3vw] absolute bottom-0 left-0 px-[--05vw]">
                            <div class="videoProgressBar cursor-pointer relative bg-[--white-trans] w-full h-[--03vw] br-round">
                                <span class="videoTimelineHover absolute top-0 left-0 h-full bg-[--white-trans] w-80% br-round"></span>
                                <span class="videoTimeline absolute top-0 left-0 h-full bg-red-800 w-2vw br-round"></span>
                            </div>
                            <div class="absolute">
                                <video class="aspect-video br-.5vw" id="video"><source src="{{asset('videos/video.mp4')}}" type="video/mp4"/></video>
                            </div>
                            <div class="p-[--05vw] flex items-center justify-between">
                                <div class="flex gap-1vw ">
                                    <div class="playVideoIcon"><iconify-icon icon="solar:play-broken"></iconify-icon></div>
                                    <div class="speakerVideoIcon"><iconify-icon icon="fluent:speaker-2-24-regular"></iconify-icon></div>
                                    <div class="fz-.8vw videoDurationContainer">
                                    <span>0:00</span> / <span>3:00</span>
                                    </div>
                                </div>
                                <div class="flex gap-1vw ">
                                    <div class="settingVideoIcon"><iconify-icon icon="uil:setting"></iconify-icon></div>
                                    <div class="miniPlayerVideoIcon"><iconify-icon icon="mingcute:miniplayer-line"></iconify-icon></div>
                                    <div class="fullscreenVideoIcon"><iconify-icon icon="mingcute:fullscreen-line"></iconify-icon></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[--1vw]">
                        <h1 id="video_title" class="fz-1.5vw">Hamne Ankho Se Dekha Nahi He Magar || Full Naat 2022</h1>
                        <div class="mt-[--1vw] flex items-center justify-between">
                            <div class="d-flex gap-1vw">
                                    <div class="w-3vw-h-3vw br-round overflow-hidden"><img src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="channel"></div>
                                    <div class="flex flex-col cursor-pointer">
                                        <a class="fz-1vw">@channel</a>
                                        <a class="fz-.8vw text-[--color2]">1.5M Subscribers</a>
                                    </div>
                                        <span class="sm:ml-5 fz-1vw bg-[--bg-color] text-[--bg-light] py-[--05vw] px-[--1vw] br-round cursor-pointer">subscribe</span>
                            </div>
                            <div class="d-flex gap-1.5vw">
                                <div class="d-flex bg-light br-round overflow-hidden">
                                    <div class="likeVideo hover:bg-[--color3] relative flex items-center cursor-pointer py-[--05vw] gap-.5vw px-[--05vw]"><iconify-icon class="fz-1.5vw" icon="solar:like-outline"></iconify-icon> <span class="fz-.8vw">23K</span></div>
                                    <div class="d-flex hover:bg-[--color3] py-[--05vw] px-[--1vw] cursor-pointer"><iconify-icon class="fz-1.5vw d-flex" icon="solar:dislike-outline"></iconify-icon></div>
                                </div>
                                <div class="hidden md-phone:d-flex fz-1.5vw gap-.5vw bg-light br-round px-[--1vw] py-[--05vw] cursor-pointer hover:bg-[--color3]">
                                    <iconify-icon icon="solar:playlist-broken"></iconify-icon>
                                    <span class="fz-1vw">save</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="videoDescription relative mt-[--2vw] p-2 br-.5vw bg-light hover:bg-[--color3]">
                        <p>
                             Jamshed
                            New Recording at Istanbul Turkey
                            "Mein Tu Ummati Hon"
                            Junaid Jamshed Shaheed
                            #Darsequran1 #Darsequran #JunaidJamshedShaheed
                            SC#1612607</p>
                        <a id="descriptionShowMore" class="cursor-pointer fz-1vw">Show more</a>
                    </div>
                    <div class="videoComments_container mt-[--2vw]">
                        <div class="flex items-center gap-1.5vw fz-1vw">
                            <h2>Comments <span>13K</span></h2>
                            <div class="d-flex fz-1.5vw cursor-pointer">
                                <iconify-icon icon="solar:hamburger-menu-broken"></iconify-icon>
                            </div>
                        </div>
                        <div class="w-full h-10% mt-[--2vw]">
                            <div class="grid w-full h-full grid-cols-[max(3vw,30px)_auto] gap-.5vw items-center">
                                <div class="w-3vw-h-3vw br-round overflow-hidden">
                                    <img
                                        src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="">
                                </div>
                                <div class="flex w-full">
                                    <input type="text" name="" id="comment_input" class="px-2" placeholder="Add a comment">
                                    <button>
                                        <iconify-icon icon="carbon:send-filled" class="w-2vw-h-2vw d-flex br-round hover:bg-[--color3]"></iconify-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            @for($j=0;$j<10;$j++)
                                <div class="grid grid-cols-[max(3vw,30px)_auto] gap-.5vw px-2 my-[--1vw]">
                                    <div class="w-3vw-h-3vw br-round mt-2 overflow-hidden cursor-pointer">
                                        <img
                                            src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                            alt="User-logo">
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-.5vw">
                                            <strong class="cursor-pointer fz-1vw font-light">@username</strong>
                                            <span class="fz-.8vw">1month ago</span>
                                        </div>
                                        <div>
                                            <p class="w-90% fz-1vw">User Message User Message User
                                                Message User Message User Message User Message User Message User Message User Message User Message</p>
                                        </div>
                                        <div class="flex items-center gap-1vw">
                                            <iconify-icon icon="iconamoon:like-thin"
                                                          class="w-2vw-h-2vw fz-1.5vw br-round d-flex cursor-pointer hover:bg-[--color3]"></iconify-icon>
                                            <iconify-icon icon="iconamoon:dislike-thin"
                                                          class="w-2vw-h-2vw fz-1.5vw br-round d-flex cursor-pointer hover:bg-[--color3]"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="px-[--1vw]">
                    <div class="grid  grid-cols-1 md-phone:grid-cols-2 md:grid-cols-1 xl:grid-cols-2 gap-1vw">
                        @for($i=0;$i<40;$i++)
                            <div class="">
                                <div class="image_container w-full relative overflow-hidden">
                                    <div class="absolute bottom-[3%] br-.3vw right-[2%] bg-[--black-trans] fz-.8vw font-bold  text-white">12:00</div>
                                    <div class="watch_latter_and_queue">
                                        <iconify-icon icon="mdi:clock-outline" data-title="Watch latter"></iconify-icon>
                                        <iconify-icon icon="mingcute:miniplayer-line" data-title="Add to queue"></iconify-icon>
                                    </div>
                                    <div class="image aspect-video br-.3vw  overflow-hidden cursor-pointer"><img src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="image"></div>
                                </div>
                                <div class="p-1 relative">
                                    <h2 id="video_title" class="fz-1vw">Retry payment method if you believe you're seeing this billing issue by mistake.</h2>
                                    <div class="flex gap-.5vw sm:block">
                                        <strong class=" md:mt-2 block fz-.8vw cursor-pointer">Sony Liv</strong>
                                        <div class="flex  gap-.5vw ">
                                            <span class="fz-.8vw">2M Views</span>
                                            <p class="fz-.8vw">1 months ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('javascript')
    <script>
        const videoDescription=document.querySelector('.videoDescription');
        const descriptionShowMore=document.getElementById('descriptionShowMore');
        descriptionShowMore.addEventListener('click',e=>{
            videoDescription.classList.toggle('active');
        });
        const image_container=document.querySelectorAll('.image_container');
        const watch_latter_and_queue=document.querySelectorAll('.watch_latter_and_queue');
        image_container.forEach((btn,i)=>{
            btn.addEventListener('mouseover',e=>{
                watch_latter_and_queue[i].classList.add('active');
            })
            btn.addEventListener('mouseleave',e=>{
                watch_latter_and_queue[i].classList.remove('active');
            })
        })
    </script>
    <script src="{{asset('js/video.js')}}"></script>
@endpush
