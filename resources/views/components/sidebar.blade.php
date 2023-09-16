<div class="side_bar h-[--4vw] w-full fixed bottom-0 left-0 sm:top-[--4vw] sm:w-[--4vw] sm:h-full px-[--3vw] sm:p-2 bg-[--bg-light] z-[3]  md:block">
    <ul class="flex items-center justify-between sm:block">
        <li class="flex flex-col  items-center justify-center @if($activeLink=='home') active @endif" onclick="window.location='{{route('home')}}'"><iconify-icon icon="ic:baseline-home"></iconify-icon> <a class="translated_text">Home</a></li>
        <li class="flex flex-col items-center justify-center @if($activeLink=='shorts') active @endif" onclick="window.location='{{route('shorts')}}'"><iconify-icon icon="bx:movie-play"></iconify-icon><a class="translated_text">Shorts</a></li>
        <li class="hidden flex-col sm:flex items-center justify-center @if($activeLink=='subscription') active @endif" onclick="window.location='{{route('subscription')}}'"><iconify-icon icon="material-symbols:subscriptions-outline"></iconify-icon><a class="a_small_text translated_text">Subscription</a></li>
        <li class="flex flex-col sm:hidden items-center justify-center @if($activeLink=='library') active @endif" onclick="window.location='{{route('library')}}'"><iconify-icon icon="material-symbols:video-library-outline"></iconify-icon> <a class="translated_text">library</a></li>
    </ul>
    <ul class="hidden sm:block">
        <li class="flex flex-col  items-center justify-center @if($activeLink=='library') active @endif" onclick="window.location='{{route('library')}}'"><iconify-icon icon="material-symbols:video-library-outline"></iconify-icon> <a class="translated_text">library</a></li>
        <li class="flex flex-col  items-center justify-center @if($activeLink=='history') active @endif"><iconify-icon icon="material-symbols:history"></iconify-icon> <a class="translated_text">history</a></li>
    </ul>
</div>
