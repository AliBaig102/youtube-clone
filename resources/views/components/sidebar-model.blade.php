<div class="side_bar_container fixed top-0 left-0 w-full">
    <div class="side_bar_popup h-[max(100vh,50vw)] w-[clamp(200px,15vw,50%)] bg-white">
        <div class="fz-1.5vw h-[--3vw] gap-1vw overflow-hidden flex items-center cursor-pointer ">
            <iconify-icon icon="heroicons:bars-3-center-left-20-solid" class="side_bar_switcher fz-1.5vw p-2 br-round hover:bg-light"></iconify-icon>
            <div class="d-flex w-[max(9vw,100px)]" onclick="window.location='{{route('home')}}'"><img src="{{asset('images/logo-black.png')}}" alt="Logo" id="logo"></div>
        </div>
        <ul>
            <li class="@if($activeLink=='home') active @endif" onclick="window.location='{{route('home')}}'"><iconify-icon icon="ic:baseline-home"></iconify-icon> <a class="translated_text">Home</a></li>
            <li class="@if($activeLink=='shorts') active @endif" onclick="window.location='{{route('shorts')}}'"><iconify-icon icon="bx:movie-play"></iconify-icon><a class="translated_text">Shorts</a></li>
            <li class="@if($activeLink=='subscription') active @endif" onclick="window.location='{{route('subscription')}}'"><iconify-icon icon="material-symbols:subscriptions-outline"></iconify-icon><a class="a_small_text translated_text">Subscription</a></li>
        </ul>
        <hr>
        <ul>
            <li class="@if($activeLink=='library') active @endif" onclick="window.location='{{route('library')}}'"><iconify-icon icon="material-symbols:video-library-outline"></iconify-icon> <a class="translated_text">library</a></li>
            <li class="@if($activeLink=='history') active @endif" onclick="window.location='{{route('history')}}'"><iconify-icon icon="material-symbols:history"></iconify-icon> <a class="translated_text">history</a></li>
        </ul>
        <hr>
        <div>
            <p class="w-80% ml-5 my-[--03vw] text-[--1vw] translated_text">Sign in to like videos, comment, and subscribe.</p>
            <a class="flex items-center gap-1  border-.1vw w-fit p-[--03vw] px-[--05vw] br-round text-blue-500 ml-5 my-2.5 cursor-pointer hover:bg-blue-200 fz-1vw"> <iconify-icon icon="mdi:person-outline" class="fz-1.5vw text-blue-500"></iconify-icon> Sign in</a>
        </div>
        <hr>
        <ul>
            <h4 class="ml-5 my-3 text-[--1vw] translated_text">Explore</h4>
            <li><iconify-icon icon="material-symbols:trending-up"></iconify-icon> <a class="translated_text">trending</a></li>
            <li><iconify-icon icon="basil:music-outline"></iconify-icon> <a class="translated_text">music</a></li>
            <li><iconify-icon icon="ph:game-controller-light"></iconify-icon><a class="translated_text">Gaming</a></li>
            <li><iconify-icon icon="game-icons:newspaper"></iconify-icon><a class="translated_text">News</a></li>
            <li><iconify-icon icon="bi:trophy"></iconify-icon><a class="translated_text">Sports</a></li>
        </ul>
        <hr>
        <ul>
            <li><iconify-icon icon="ant-design:setting-outlined"></iconify-icon> <a class="translated_text">Setting</a></li>
            <li><iconify-icon icon="material-symbols:flag-outline"></iconify-icon><a class="translated_text">Report History</a></li>
            <li><iconify-icon icon="material-symbols:help-outline"></iconify-icon><a class="translated_text">Help</a></li>
            <li><iconify-icon icon="material-symbols:feedback-outline"></iconify-icon><a class="translated_text">Send feedback</a></li>
        </ul>
    </div>
</div>
