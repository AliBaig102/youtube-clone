<nav class="fixed top-0 left-0 flex justify-between items-center w-full h-4vw  px-5 bg-white">
    <div class="fz-1.5vw gap-1vw d-flex cursor-pointer ">
        <iconify-icon icon="heroicons:bars-3-center-left-20-solid" class="side_bar_switcher fz-1.5vw p-2 br-round hover:bg-light"></iconify-icon>
        <div class="d-flex w-[max(10vw,100px)]"><img src="{{asset('images/logo-black.png')}}" alt="Logo" id="logo"></div>
    </div>
    <div class="search_box_container gap-1vw flex items-center px-2 w-40% h-70% br-round">
        <div class="border border-[--color3] w-90% h-full flex items-center br-round">
            <div class="relative flex items-center w-90% border border-[--color3] h-full rounded-l-[5vw]">
                <iconify-icon icon="bi:search" class="w-10% fz-1vw h-full rounded-l-3xl d-flex" id="search_icon"></iconify-icon>
                <label for="search_input" id="input_label" class="translated_text absolute top-50% left-8">Search</label>
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
        <iconify-icon icon="tabler:dots-vertical" class="setting_popup_btn p-2.5 rounded-3xl cursor-pointer hover:bg-light" data-title="Setting"></iconify-icon>
        <div class="d-flex border-.1vw rounded-3xl p-1 px-2.5 fz-1vw cursor-pointer gap-1  hover:bg-blue-200">
            <iconify-icon icon="mdi:person-outline" class="fz-1.5vw text-blue-500"></iconify-icon>
            <h6 class="text-blue-500 translated_text">Sign in</h6>
        </div>
    </div>
    <div class="setting_popup absolute bg-white p-2 top-32 right-5 rounded shadow-2xl hidden">
        <ul>
            <li><iconify-icon icon="fluent:database-person-24-regular"></iconify-icon> <a class="translated_text">Your data in YouTube</a></li>
            <hr>
            <li class="appearance"><iconify-icon icon="ep:moon"></iconify-icon> <a class="translated_text">Appearance: <span class="translated_text">Device theme</span></a><iconify-icon icon="iconamoon:arrow-right-2"></iconify-icon></li>
            <li class="language_btn"><iconify-icon icon="mdi:language"></iconify-icon> <a class="translated_text">Language: <span class="translated_text">English</span></a><iconify-icon icon="iconamoon:arrow-right-2"></iconify-icon></li>
            <li><iconify-icon icon="fluent:location-16-regular"></iconify-icon> <a class="translated_text">Location: <span class="translated_text">Pakistan</span></a><iconify-icon icon="iconamoon:arrow-right-2"></iconify-icon></li>
            <li><iconify-icon icon="bi:keyboard"></iconify-icon> <a class="translated_text">Keyboard shortcuts</a></li>
            <hr>
            <li><iconify-icon icon="ant-design:setting-outlined"></iconify-icon> <a class="translated_text">Setting</a></li>
            <hr>
            <li><iconify-icon icon="material-symbols:help-outline"></iconify-icon><a class="translated_text">Help</a></li>
            <li><iconify-icon icon="material-symbols:feedback-outline"></iconify-icon><a class="translated_text">Send feedback</a></li>
        </ul>
    </div>
    <div class="setting_popup theme_popup absolute bg-white p-2 top-32 right-5 rounded shadow-2xl hidden">
        <ul>
            <div class=" py-1 cursor-pointer flex items-center gap-1vw"><iconify-icon icon="iconamoon:arrow-left-2-duotone" class="fz-1.5vw br-round hover:bg-[--color1] p-1"></iconify-icon> <a>Appearance</a></div>
            <hr>
            <li class="change_theme_btn active"><iconify-icon icon="uit:check"></iconify-icon><a class="translated_text">Use device theme</a></li>
            <li class="change_theme_btn "><iconify-icon icon="uit:check"></iconify-icon><a class="translated_text">Dark theme</a></li>
            <li class="change_theme_btn"><iconify-icon icon="uit:check"></iconify-icon> <a class="translated_text">Light theme</a></li>
        </ul>
    </div>
    <div class="setting_popup language_popup absolute bg-white p-2 top-32 right-5 rounded shadow-2xl hidden">
        <ul class="">
            <div class=" py-1 cursor-pointer flex items-center gap-1vw "><iconify-icon icon="iconamoon:arrow-left-2-duotone" class="fz-1.5vw br-round hover:bg-[--color1] p-1"></iconify-icon> <a class="mr-[--3vw] translated_text">Chose Your language</a></div>
            <hr>
        </ul>
    </div>
</nav>
