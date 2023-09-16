@extends('layout.layout')
@section('sidebar')
    <x-navbar></x-navbar>
    <x-sidebar active-link='subscription'></x-sidebar>
@endsection
@section('content')
    <div
        class="content_area_container bg-white min-h-[max(100vh,50vw)] w-full sm:w-[calc(100%_-_var(--4vw))] absolute right-0 ">
        <div class="content_area mt-[max(5vw,50px)] w-full">
            <div class="w-full flex items-center justify-between h-3vw px-4">
                <div><h3>Latest</h3></div>
                <div class="d-flex gap-1vw">
                    <a class="text-blue-500 hover:bg-[--blue-trans] p-1 px-3 cursor-pointer br-round">manage</a>
                </div>
            </div>
            <div
                class="grid w-full px-[--05vw] gap-1vw mb-3 grid-cols-1 md-phone:grid-cols-2 2xl:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 min-[2000px]:grid-cols-5">
                @for($i=0;$i<12;$i++)
                    <div class="card p-1 cursor-pointer grid grid-cols-1  br-.3vw">
                        <div class="img w-full br-.3vw overflow-hidden aspect-video">
                            <img
                                src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Img">
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
    <x-sidebar-model active-link='subscription'></x-sidebar-model>
@endsection
{{--@push('javascript')--}}
{{--    <script src="{{asset('js/tabs.js')}}"></script>--}}
{{--@endpush--}}
