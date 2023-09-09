<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YouTube</title>
    <link rel="shortcut icon" href="{{asset('images/youtube.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="fixed top-0 left-0 flex justify-between items-center w-full h-4vw  px-5 bg-white">
        <div class="fz-1.5vw gap-1vw d-flex cursor-pointer ">
            <iconify-icon icon="heroicons:bars-3-center-left-20-solid" class="side_bar_switcher fz-1.5vw p-2 br-round hover:bg-light"></iconify-icon>
            <iconify-icon icon="logos:youtube"></iconify-icon>
        </div>
        <div class=" search_box_container gap-1vw flex items-center px-2 w-40% h-70% br-round">
            <div class="border w-90% h-full flex items-center br-round">
                <div class="relative flex items-center w-90% border h-full rounded-l-[5vw]">
                    <iconify-icon icon="bi:search" class="w-10% fz-1vw h-full rounded-l-3xl d-flex" id="search_icon"></iconify-icon>
                    <label for="search_input" id="input_label" class="absolute top-50% left-8">Search</label>
                    <input type="text" id="search_input" class=" w-100% h-full pr-8 pl-1  rounded-l-[5vw] text-2xl">
                    <span class="remove_search_text absolute right-2 cursor-pointer fz-2vw d-flex hover:bg-light br-round"><iconify-icon icon="prime:times"></iconify-icon></span>
                </div>
                <button type="submit" class="d-flex w-10% bg-light h-full rounded-r-[5vw] fz-1vw"><iconify-icon icon="bi:search"></iconify-icon></button>
            </div>
            <div class="w-3vw bg-light h-3vw cursor-pointer d-flex fz-1.5vw br-round">
                <iconify-icon icon="mdi:microphone" data-title="Micro Phone"></iconify-icon>
            </div>
        </div>
        <div class="d-flex gap-1vw">
            <iconify-icon icon="tabler:dots-vertical" class="p-2.5 rounded-3xl cursor-pointer hover:bg-light" data-title="Setting"></iconify-icon>
            <div class="d-flex border rounded-3xl p-1 px-2.5 fz-1vw text-blue-500 cursor-pointer gap-1  hover:bg-blue-100">
                <iconify-icon icon="mdi:person-outline" class="fz-1.5vw"></iconify-icon>
                <h6>Sign in</h6>
            </div>
        </div>
    </nav>

    <div class="side_bar h-[max(95vh,46vw)] w-[16%] fixed top-[--4vw] left-0 overflow-scroll">
        <ul class="exists">
            <li class="active"><iconify-icon icon="ic:baseline-home"></iconify-icon> <a>Home</a></li>
             <li><iconify-icon icon="bx:movie-play"></iconify-icon><a>Shorts</a></li>
            <li><iconify-icon icon="material-symbols:subscriptions-outline"></iconify-icon><a>Subscription</a></li>
        </ul>
        <hr>
        <ul class="exists">
            <li><iconify-icon icon="material-symbols:video-library-outline"></iconify-icon> <a>library</a></li>
             <li><iconify-icon icon="material-symbols:history"></iconify-icon> <a>history</a></li>
        </ul>
        <hr>
        <div>
            <p class="w-80% ml-5 my-[--03vw] text-[.9vw]">Sign in to like videos, comment, and subscribe.</p>
            <a class="flex items-center gap-1 border w-fit p-[--03vw] px-[--05vw] br-round text-blue-500 ml-5 my-2.5 cursor-pointer hover:bg-blue-200 fz-1vw"> <iconify-icon icon="mdi:person-outline" class="fz-1.5vw"></iconify-icon> Sign in</a>
        </div>
        <hr>
        <ul>
            <h4 class="ml-5 my-3 text-[--1vw]">Explore</h4>
            <li><iconify-icon icon="material-symbols:trending-up"></iconify-icon> <a>trending</a></li>
            <li><iconify-icon icon="basil:music-outline"></iconify-icon> <a>music</a></li>
            <li><iconify-icon icon="ph:game-controller-light"></iconify-icon><a>Gaming</a></li>
            <li><iconify-icon icon="game-icons:newspaper"></iconify-icon><a>News</a></li>
            <li><iconify-icon icon="bi:trophy"></iconify-icon><a>Sports</a></li>
        </ul>
        <hr>
        <ul>
            <li><iconify-icon icon="ant-design:setting-outlined"></iconify-icon> <a>Setting</a></li>
            <li><iconify-icon icon="material-symbols:flag-outline"></iconify-icon><a>Report History</a></li>
            <li><iconify-icon icon="material-symbols:help-outline"></iconify-icon><a>Help</a></li>
            <li><iconify-icon icon="material-symbols:feedback-outline"></iconify-icon><a>Send feedback</a></li>
        </ul>
    </div>
    <div class="bg-white min-h-[max(100vh,50vw)] w-[84%] absolute right-0 ">
    <div class="w-[84%] h-3vw bg-white mb-[5vw] fixed top-[--4vw] right-0">
        <div class="w-full h-full relative d-flex">
            <div class="tag_slider_arrow right-0 flex"><span><iconify-icon icon="ep:arrow-right"></iconify-icon></span></div>
            <div class="tag_slider_arrow left-0 flex hidden"><span><iconify-icon icon="ep:arrow-left"></iconify-icon></span></div>
            <ul class="tag_slider flex items-center gap-1vw w-[95%] h-full">
                <li>lorem</li>
                <li>lorem</li>
                <li>lorem lorem</li>
                <li>lorem</li>
                <li class="active">lorem lorem</li>
                <li>lorem</li>
                <li>lorem</li>
                <li>lorem lorem</li>
                <li>lorem</li>
                <li>lorem lorem</li>
                <li>lorem</li>
                <li>lorem</li>
                <li>lorem lorem</li>
                <li>lorem</li>
                <li>lorem lorem</li>
                <li>lorem</li>
                <li>lorem</li>
            </ul>
        </div>
    </div>
    <div class="content_area mt-[max(8vw,80px)]">
        <div class="grid w-full px-4 gap-1vw mb-3 grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 min-[2000px]:grid-cols-5">
            @for($i=0;$i<12;$i++)
            <div class="card p-1 cursor-pointer grid grid-cols-1  br-.3vw hover:bg-cyan-100 ">

                <div class="img w-full br-.3vw overflow-hidden aspect-video">
                    <img src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Img">
                </div>
                <div class="info p-2">
                    <div class="w-full h-fit grid grid-cols-[max(2.5vw,20px)_auto] gap-.5vw">
                        <div class="">
                            <img src="https://images.pexels.com/photos/18074917/pexels-photo-18074917/free-photo-of-close-up-of-an-atlantic-puffin.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="h-[max(2.5vw,20px)] br-round">
                        </div>
                        <h3 id="video_title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque architecto doloremque quidem et libero explicabo, labore velit voluptatem neque hic.</h3>
                    </div>
                    <div class="ml-[--3vw] flex flex-row items-center sm:flex-col sm:items-start">
                    <div class="text-[--color2] hover:text-[--bg-dark] text-[clamp(10px,.9vw,30px)]">Sony Liv </div>
                    <div class="text-[--color2] text-[max(.8vw,8px)]"><span>10k views</span> . <span>3 months ago</span></div>
                    </div>
                </div>
            </div>
            @endfor

        </div>
    </div>
    </div>
</body>
</html>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script>
    const side_bar_switcher=document.querySelector('.side_bar_switcher');
    const side_bar=document.querySelector('.side_bar');

    side_bar_switcher.addEventListener('click',e=>{
        side_bar.classList.toggle('active');
        side_bar.nextElementSibling.classList.toggle('w-[96%]');
        side_bar.nextElementSibling.firstElementChild.classList.toggle('w-[96%]');
    })
    const input_search=document.getElementById('search_input');
        const input_label=document.getElementById('input_label');
        const search_icon=document.getElementById('search_icon');
        const remove_search_text=document.querySelector('.remove_search_text');
    input_search.addEventListener('focus',e=>{
        input_label.classList.add('active');
        search_icon.classList.add('active');
        e.target.parentElement.classList.add('border-blue-800');
    })
    input_search.addEventListener('blur',e=>{
        if (input_search.value.length>0){
            input_label.classList.add('active');
            search_icon.classList.add('active');
        }else {
        input_label.classList.remove('active');
        search_icon.classList.remove('active');
        e.target.parentElement.classList.remove('border-blue-800');
        }
    })
    input_search.addEventListener('input',e=>{
        if (e.target.value.length >0){
            remove_search_text.classList.add('active');
        }else {
            remove_search_text.classList.remove('active');
        }
    });
    remove_search_text.addEventListener('click',()=>{
        if (input_search.value.length>0){
            input_search.value='';
            input_search.focus();
        }
    })
    const tabsContainer = document.querySelector(".tag_slider"),
        tabs = tabsContainer.querySelectorAll("li"),
        arrow = document.querySelectorAll(".tag_slider_arrow > span"),
        {clientWidth,scrollWidth}=tabsContainer;
    tabs.forEach(tab=>{
        tab.addEventListener("click",()=>{
            tabs.forEach(tab=>tab.classList.remove('active'));
            tab.classList.add('active');
            tab.scrollIntoView({ inline : 'center'});
        });
    });
    tabsContainer.addEventListener('scroll',(e)=>{
        updateIcons(e.target.scrollLeft);
    });
    // tabsContainer.addEventListener('wheel',(e)=>{
    //     tabsContainer.scrollLeft += e.deltaY;
    // });
    function updateIcons(scrolledWidth){
        arrow[1].parentElement.classList.toggle('hidden', scrolledWidth <=1)
        arrow[0].parentElement.classList.toggle('hidden', scrollWidth-(clientWidth+ scrolledWidth) <=1)
    }
    arrow[0].addEventListener('click',()=>{
        tabsContainer.scrollLeft+=100;
    })
    arrow[1].addEventListener('click',()=>{
        tabsContainer.scrollLeft+=-100;
    })

</script>
