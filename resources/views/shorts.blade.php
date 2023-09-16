@extends('layout.layout')
@section('sidebar')
<x-navbar></x-navbar>
<x-sidebar active-link='shorts'></x-sidebar>
@endsection
@section('content')
    <div
        class="content_area_container bg-white min-h-[max(100vh,50vw)]  w-full sm:w-[calc(100%_-_var(--4vw))] absolute right-0 ">
        <div class="content_area mt-[max(4vw,40px)] grid justify-center w-full">
            @for($i=0;$i<5;$i++)
                <div class="relative w-full sm:w-[clamp(300px,22vw,600px)] my-[--1vw]">
                    <div
                        class="comment_box absolute top-0 left-[100%] w-full sm:w-[clamp(300px,22vw,600px)] sm:aspect-[9/16] py-3">
                        <div class="relative bg-light w-full h-full rounded-r-2xl">
                            <div class="flex items-center justify-between h-3vw px-2 shadow rounded-tr-2xl">
                                <h2>Comments <span>13K</span></h2>
                                <div class="d-flex gap-1vw fz-1.5vw cursor-pointer">
                                    <iconify-icon icon="solar:hamburger-menu-broken"></iconify-icon>
                                    <iconify-icon icon="clarity:times-line" id="comment_box_off_btn"></iconify-icon>
                                </div>
                            </div>
                            <div class="overflow-y-scroll w-full h-[83%] overflow-x-hidden">
                                @for($j=0;$j<10;$j++)
                                    <div class="grid grid-cols-[2vw_95%] gap-.5vw px-2 my-2">
                                        <div class="w-2vw-h-2vw br-round mt-2 overflow-hidden cursor-pointer">
                                            <img
                                                src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                alt="User-logo">
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-.5vw">
                                                <strong class="cursor-pointer text-[max(.8vw,10px)] font-light">@username</strong>
                                                <span class="text-[max(.6vw,5px)]">1month ago</span>
                                            </div>
                                            <div>
                                                <p class="w-90% text-[max(.7vw,10px)]">User Message User Message User
                                                    Message User Message User Message User Message</p>
                                            </div>
                                            <div class="flex items-center">
                                                <iconify-icon icon="iconamoon:like-thin"
                                                              class="w-2vw-h-2vw fz-1vw br-round d-flex cursor-pointer hover:bg-[--color3]"></iconify-icon>
                                                <iconify-icon icon="iconamoon:dislike-thin"
                                                              class="w-2vw-h-2vw fz-1vw br-round d-flex cursor-pointer hover:bg-[--color3]"></iconify-icon>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div
                                class="absolute bottom-0 left-0 w-full h-10% shadow-[2px_2px_0_--color2] px-2 bg-light rounded-br-2xl">
                                <div class="grid w-full h-full grid-cols-[15%_80%] gap-.5vw items-center">
                                    <div class="w-3vw-h-3vw br-round overflow-hidden">
                                        <img
                                            src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                            alt="">
                                    </div>
                                    <div class="flex w-full">
                                        <input type="text" name="" id="comment_input" placeholder="Write Here">
                                        <button>
                                            <iconify-icon icon="carbon:send-filled"
                                                          class="w-2vw-h-2vw d-flex br-round hover:bg-[--color3]"></iconify-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative gap-.5vw">
                        <div class="video bg-light br-.5vw overflow-hidden">
                            <video id="short_video" src="{{asset('videos/video.mkv')}}">
                            </video>
                            <div
                                class="top_buttons absolute top-0 left-0  w-full flex items-center justify-between h-3vw px-[--1vw]">
                                <iconify-icon icon="mdi:play"
                                              class="playShort fz-1.5vw text-white cursor-pointer"></iconify-icon>
                                <iconify-icon icon="akar-icons:sound-on"
                                              class="speakerShort fz-1.5vw text-white cursor-pointer"></iconify-icon>
                            </div>
                            <div class="bottom_buttons absolute bottom-0 left-0  w-full  px-[--1vw]">
                                <div>
                                    <h1 id="video_title" class="text-white">lorem lorem lorem lorem lorem lorem</h1>
                                </div>
                                <div class="flex items-center justify-between my-2 ">
                                    <div class="flex items-center gap-.5vw cursor-pointer">
                                        <img class="w-3vw-h-3vw br-round"
                                             src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                             alt="Channel-logo">
                                        <span class="text-white">@channel</span>
                                    </div>
                                    <a class="bg-white py-1.5 px-4 br-round cursor-pointer">Subscribe</a>
                                </div>
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-[3px] bg-[--white-trans]">
                                <span class="absolute progressBar transition-all top-0 left-0 bg-red-800 h-full"></span>
                            </div>
                        </div>
                        <div
                            class="shorts_like_and_comment absolute h-full left-[105%] top-0 flex flex-col py-3 items-center justify-end gap-1vw">
                            <div class="w-full d-flex flex-col gap-.5vw py-[--05vw]">
                                <iconify-icon icon="mdi:like"
                                              class="w-3vw-h-3vw fz-1.5vw br-round d-flex bg-light cursor-pointer hover:bg-[--color3]"></iconify-icon>
                                <span>4.3M</span>
                            </div>
                            <div class="w-full d-flex flex-col gap-.5vw py-[--05vw]">
                                <iconify-icon icon="mdi:dislike"
                                              class="w-3vw-h-3vw fz-1.5vw br-round d-flex bg-light cursor-pointer hover:bg-[--color3]"></iconify-icon>
                                <span>Dislike</span>
                            </div>
                            <div class="w-full d-flex flex-col gap-.5vw py-[--05vw]">
                                <iconify-icon icon="mdi:comments-text-outline"
                                              class="comment_btn w-3vw-h-3vw fz-1.5vw br-round d-flex bg-light cursor-pointer hover:bg-[--color3]"></iconify-icon>
                                <span>4.3M</span>
                            </div>
                            <div class="image w-3vw-h-3vw d-flex flex-col cursor-pointer">
                                <img class="rounded"
                                     src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                     alt="Channel-logo">
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <x-sidebar-model active-link='shorts'></x-sidebar-model>
@endsection
@push('javascript')
    <script src="{{asset('js/shorts.js')}}"></script>
@endpush
