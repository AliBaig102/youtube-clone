@extends('layout.layout')
@section('sidebar')
    <x-navbar></x-navbar>
    <x-sidebar active-link='history'></x-sidebar>
@endsection
@section('content')
    <div class="content_area_container bg-white min-h-[max(100vh,50vw)] w-full sm:w-[calc(100%_-_var(--4vw))] absolute right-0 ">
        <div class="content_area mt-[max(5vw,50px)] w-full h-full">
            <div class="grid w-full grid-cols-1 md:grid-cols-[75%_25%] h-full">
                <div>
                    <div class="w-full h-3vw px-3 flex items-center justify-between">
                        <div class="d-flex gap-.5vw">
                            <iconify-icon icon="material-symbols:history" class="fz-1.5vw"></iconify-icon>
                            <a class="fz-1vw">History</a>
                        </div>
                    </div>
                    <div class="grid px-4 grid-cols-1  gap-1vw">
                        @for($i=0;$i<10;$i++)
                            <div class="history_card grid grid-cols-[auto_70%] relative cursor-pointer gap-1vw ">
                                <div class="image_container aspect-video relative overflow-hidden">
                                    <div class="absolute bottom-[3%] px-2 br-.3vw right-[2%] bg-[--black-trans] fz-.8vw font-bold  text-white">12:00</div>
                                    <div class="absolute bottom-0 w-full h-[2px] bg-[--white-trans]"><span class="absolute bg-red-800 w-2vw h-[2px]"></span></div>
                                    <div class="watch_latter_and_queue">
                                        <iconify-icon icon="mdi:clock-outline" data-title="Watch latter"></iconify-icon>
                                        <iconify-icon icon="mingcute:miniplayer-line" data-title="Add to queue"></iconify-icon>
                                    </div>
                                    <div class="image aspect-video br-.3vw  overflow-hidden cursor-pointer"><img src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="image"></div>
                                </div>
                                <div class="p-1 relative">
                                    <h2 id="video_title" class="w-90%">Retry payment method if you believe you're seeing this billing if you believe you're seeing this billing  issue by mistake.</h2>
                                        <div class="flex items-center sm:mt-[--05vw] gap-.5vw">
                                        <strong class=" block fz-.8vw cursor-pointer">Sony Liv</strong>
                                            <span class="fz-.8vw">2M Views</span>
                                        </div>
                                    <div class="delete_video_from_watch_history absolute top-0 w-2vw-h-2vw hidden br-round hover:bg-[--color1] fz-1.5vw right-[--1vw]">&times;</div>
                                    <p id="video_description" class="fz-.8vw invisible sm:visible sm:mt-[--05vw]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis consectetur consequatur quas harum ut ad velit repellat. Praesentium autem quidem assumenda in ut suscipit repudiandae ipsam eveniet asperiores quam nulla qui rerum, ipsum veritatis, commodi sed enim alias. Ad corrupti vero eum quas eos dolores vel eveniet laudantium nihil iusto rem a hic sed aut dolor, adipisci suscipit cupiditate molestias rerum neque. Debitis dignissimos repellendus sit laudantium odio distinctio fuga provident natus ipsum doloremque, hic, quos culpa cupiditate, obcaecati atque. Commodi ad at, a, itaque assumenda dolores ipsum deserunt blanditiis illum, totam non sequi dolorem corporis eius error debitis officiis.</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="-order-1 md:order-1 w-full h-fit">
                    <ul class="">
                        <li class="mx-auto flex items-center border-b w-fit">
                            <iconify-icon icon="mdi:search" class="fz-1.5vw w-2vw-h-2vw br-round cursor-pointer d-flex hover:bg-[--color1]"></iconify-icon>
                            <input type="text" id="search_history" class="w-[50vw] md:w-[max(15vw,150px)] fz-1vw px-2" placeholder="Search Watch History">
                            <iconify-icon icon="prime:times" class="search_history_clear fz-1.5vw w-2vw-h-2vw br-round cursor-pointer hidden hover:bg-[--color1]"></iconify-icon>
                        </li>
                    </ul>
                    <div class="mx-auto flex items-center gap-1vw px-4 py-1 hover:bg-[--color3] w-fit cursor-pointer br-round mt-[--1vw]">
                        <iconify-icon icon="pajamas:remove"></iconify-icon>
                        <a class="fz-1vw">Clear all watch history</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-sidebar-model active-link='history'></x-sidebar-model>
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
        const search_history=document.querySelector('#search_history');
        const search_history_clear=document.querySelector('.search_history_clear');
        search_history.addEventListener('blur',e=>{
            if (search_history.value.length>0){
                search_history_clear.classList.add('d-flex');
            }else {
                search_history_clear.classList.remove('d-flex');
            }
        })
        search_history.addEventListener('input',e=>{
            if (e.target.value.length >0){
                search_history_clear.classList.add('d-flex');
            }else {
                search_history_clear.classList.remove('d-flex');
            }
        });
        search_history_clear.addEventListener('click',()=>{
            if (search_history.value.length>0){
                search_history.value='';
                search_history.focus();
            }
        });
    </script>
@endpush
