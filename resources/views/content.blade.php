@extends('layout_1.layout')
@section('content')
    <div class="bg-white min-h-[max(100vh,50vw)] w-[84%] absolute right-0 ">
        @include('layout_1._tabs')
        <div class="content_area mt-[max(8vw,80px)]">
            <div
                class="grid w-full px-4 gap-1vw mb-3 grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 min-[2000px]:grid-cols-5">
                @for($i=0;$i<12;$i++)
                    <div class="card p-1 cursor-pointer grid grid-cols-1  br-.3vw">

                        <div class="img w-full br-.3vw overflow-hidden aspect-video">
                            <img
                                src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Img">
                        </div>
                        <div class="info p-2">
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
                            <div class="ml-[--3vw] flex flex-row items-center sm:flex-col sm:items-start">
                                <div class="text-[--color2] hover:text-[--bg-dark] text-[clamp(10px,.9vw,30px)]">Sony
                                    Liv
                                </div>
                                <div class="text-[--color2] text-[max(.8vw,8px)]"><span>10k views</span> . <span>3 months ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </div>
@endsection
