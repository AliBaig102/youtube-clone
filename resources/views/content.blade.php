@extends('layout.layout')
@section('sidebar')
<x-navbar></x-navbar>
<x-sidebar active-link='home'></x-sidebar>
@endsection
@section('content')
    <div class="content_area_container bg-white min-h-[max(100vh,50vw)] w-full sm:w-[calc(100%_-_var(--4vw))] absolute right-0 ">
        @include('layout._tabs')
        <div class="content_area mt-[max(8vw,80px)] w-full">
            <div
                class="grid w-full px-[--05vw] gap-1vw mb-3 grid-cols-1 md-phone:grid-cols-2 2xl:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 min-[2000px]:grid-cols-5">
                @for($i=0;$i<4;$i++)
                    <div class="card p-1 cursor-pointer grid grid-cols-1  br-.3vw">

                        <div class="image_container br-.5vw  relative w-full">
                            <div class="video_container aspect-video relative">
                                <video id="main_video">
                                    <source src="{{asset(path: 'videos/video.mp4')}}" type="video/mp4" />
                                </video>
                                <div class="absolute top-0 right-0 p-1">
                                    <iconify-icon icon="octicon:unmute-24" class="video_speaker bg-black p-1 br-round cursor-pointer"></iconify-icon>
                                </div>
                                <div class="absolute bottom-0 left-0 w-full h-3vw px-4 flex items-center" style="background:linear-gradient(to top,var(--black-trans),transparent);">
                                    <span class="videoDuration fz-.8vw font-light"><b>00:00</b> / <b>12:00</b></span>
                                </div>
                            <div class="progressbar_container absolute bottom-0 flex flex-col justify-end w-full h-[--1vw]">
                                <div class="progressbar_video hidden absolute aspect-video w-[--6vw] shadow-2xl border-2 overflow-hidden br-.3vw top-[-500%]">
                                    <span class="absolute bg-[--black-trans] w-full text-center left-50% bottom-0 text-[max(.6vw,5px)]" style="background:linear-gradient(to top,var(--black-trans),transparent);">12:00</span>
                                    <video id="small_video"><source src="{{asset('videos/video.mkv')}}" type="video/mkv"/></video>
                                </div>
                                <div class="progressbar bg-[--white-trans] w-full br-round h-[4px]">
                                <span class="progressbar_hover absolute h-[4px] bg-[--white-trans]"></span>
                                <span class="progressbar_thump absolute bg-red-800 h-[4px]"></span>
                                </div>
                            </div>
                            </div>
                            <div class="image scale-x-[1.02] absolute br-.5vw overflow-hidden top-0 left-0 aspect-video">
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
    <script src="{{asset('js/content.js')}}"></script>
@endpush
