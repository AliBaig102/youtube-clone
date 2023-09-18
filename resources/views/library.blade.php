@extends('layout.layout')
@section('sidebar')
    <x-navbar></x-navbar>
    <x-sidebar active-link='library'></x-sidebar>
@endsection
@section('content')
    <div class="content_area_container bg-white min-h-[max(100vh,50vw)] w-full sm:w-[calc(100%_-_var(--4vw))] absolute right-0 ">
        <div class="content_area mt-[max(5vw,50px)] w-full h-full">
            <div class="grid w-full grid-cols-1 md:grid-cols-[80%_20%] h-full">
                <div>
                    <div class="w-full h-3vw px-3 flex items-center justify-between">
                        <div class="d-flex gap-.5vw">
                            <iconify-icon icon="material-symbols:history" class="fz-1.5vw"></iconify-icon>
                            <a class="fz-1vw">History</a>
                        </div>
                        <a class="hover:bg-[--blue-trans] text-blue-500 px-3 py-1 br-round fz-1vw cursor-pointer">See all</a>
                    </div>
                    <div class="grid px-4 grid-cols-1  md-phone:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-.5vw">
                        @for($i=0;$i<10;$i++)
                        <div class="">
                              <div class="image_container w-full relative overflow-hidden">
                                  <div class="absolute bottom-[3%] px-2 br-.3vw right-[2%] bg-[--black-trans] fz-.8vw font-bold  text-white">12:00</div>
                                  <div class="absolute bottom-0 w-full h-[2px] bg-[--white-trans]"><span class="absolute bg-red-800 w-2vw h-[2px]"></span></div>
                                  <div class="watch_latter_and_queue">
                                      <iconify-icon icon="mdi:clock-outline" data-title="Watch latter"></iconify-icon>
                                      <iconify-icon icon="mingcute:miniplayer-line" data-title="Add to queue"></iconify-icon>
                                  </div>
                                  <div class="image aspect-video br-.3vw  overflow-hidden cursor-pointer"><img src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="image"></div>
                              </div>
                            <div class="p-1 relative">
                                <h2 id="video_title">Retry payment method if you believe you're seeing this billing issue by mistake.</h2>
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

                    <hr class="w-90% mx-auto my-[--1vw]">
                    <div class="w-full h-3vw px-3 flex items-center justify-between">
                        <div class="d-flex gap-.5vw">
                            <iconify-icon icon="mdi:clock-outline" class="fz-1.5vw"></iconify-icon>
                            <a class="fz-1vw">Watch latter</a>
                        </div>
{{--                        <a class="hover:bg-[--blue-trans] text-blue-500 px-3 py-1 br-round fz-1vw cursor-pointer">See all</a>--}}
                    </div>
                    <div class="grid px-4 grid-cols-1  md-phone:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-.5vw">
                        @for($i=0;$i<5;$i++)
                        <div>
                              <div class="w-full">
                                  <div class="image aspect-video"><img src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="image"></div>
                              </div>
                            <div class="p-1 relative h-[45%]">
                                <h2 id="video_title">Retry payment method if you believe you're seeing this billing issue by mistake.</h2>
                                <div class="flex gap-.5vw sm:block">
                                    <strong class="mt-2 block fz-.8vw cursor-pointer">Sony Liv</strong>
                                    <div class="flex gap-.5vw ">
                                        <span class="fz-.8vw">2M Views</span>
                                        <p class="fz-.8vw">1 months ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    <hr class="w-90% mx-auto my-[--1vw]">
                    <div class="w-full h-3vw px-3 flex items-center justify-between">
                        <div class="d-flex gap-.5vw">
                            <iconify-icon icon="solar:like-broken" class="fz-1.5vw"></iconify-icon>
                            <a class="fz-1vw">Like videos</a>
                            <span class="fz-1vw">228</span>
                        </div>
                        <a class="hover:bg-[--blue-trans] text-blue-500 px-3 py-1 br-round fz-1vw cursor-pointer">See all</a>
                    </div>
                    <div class="grid px-4 grid-cols-1  md-phone:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-.5vw">
                        @for($i=0;$i<5;$i++)
                        <div>
                              <div class="w-full">
                                  <div class="image aspect-video"><img src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="image"></div>
                              </div>
                            <div class="p-1 relative h-[45%]">
                                <h2 id="video_title">Retry payment method if you believe you're seeing this billing issue by mistake.</h2>
                                <div class="flex gap-.5vw sm:block">
                                    <strong class="mt-2 block fz-.8vw cursor-pointer">Sony Liv</strong>
                                    <div class="flex items-center gap-.5vw ">
                                        <span class="fz-.8vw">2M Views</span>
                                        <p class="fz-.8vw">1 months ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
{{--                    <hr class="w-90% mx-auto my-[--1vw]">--}}
                </div>
                <div class=" w-full h-fit">
                    <ul class="mt-[--5vw] w-full d-flex flex-col gap-.5vw">
                        <li class="image w-[--6vw] h-[--6vw] br-round overflow-hidden"><img src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h750&dpr=1" alt="image"></li>
                        <li class="fz-1.5vw">Ali Baig</li>
                    </ul>
                    <ul class="my-[--2vw] w-80% mx-auto">
                        <hr>
                        <li class="h-3vw px-2 text-[--color2] fz-.8vw flex items-center justify-between">
                            <a>Subscription</a>
                            <a>10</a>
                        </li>
                        <hr>
                        <li class="h-3vw px-2 text-[--color2] fz-.8vw flex items-center justify-between">
                            <a>Uploads</a>
                            <a>0</a>
                        </li>
                        <hr>
                        <li class="h-3vw px-2 text-[--color2] fz-.8vw flex items-center justify-between">
                            <a>Likes</a>
                            <a>200</a>
                        </li>
                        <hr>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <x-sidebar-model active-link='library'></x-sidebar-model>
@endsection
@push('javascript')
    <script >
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
@endpush
