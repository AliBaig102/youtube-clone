const body =document.body;
const change_theme_btn=document.querySelectorAll('.change_theme_btn');
const appearance=document.querySelector('.appearance');
os_theme=window.matchMedia('(prefers-color-scheme: dark)');
change_theme_btn.forEach((btn,i)=>{
    btn.addEventListener('click',e=>{
        localStorage.clear();
        change_theme_btn.forEach(btn=>btn.classList.remove('active'));
        e.currentTarget.classList.add('active');
        if (i===0){handleColorTheme(os_theme.matches,'device','Device theme');}
        if (i===1){
            handleColorTheme(true,'dark','Dark theme');
        }
        if (i===2){
            localStorage.setItem('theme','light');
            handleColorTheme(false,'light','light theme');
        }
    })
})
handleColorTheme(os_theme.matches,null,'Device theme');
const get_theme=localStorage.getItem('theme');
if (get_theme==='device'){
    handleColorTheme(os_theme.matches,null,'Device theme');
    change_theme_btn.forEach(btn=>btn.classList.remove('active'));
    change_theme_btn[0].classList.add('active');
}else if (get_theme==='dark'){
    handleColorTheme(true,null,'Dark theme');
    change_theme_btn.forEach(btn=>btn.classList.remove('active'));
    change_theme_btn[1].classList.add('active');
} else if (get_theme==='light'){
    handleColorTheme(false,null,'light theme');
    change_theme_btn.forEach(btn=>btn.classList.remove('active'));
    change_theme_btn[2].classList.add('active');
}
function handleColorTheme(con,str_message,message){
    body.classList.toggle('change_theme',con);
    if (str_message!=null){
        localStorage.setItem('theme',str_message);
    }
    appearance.querySelector('span').textContent=message;
    if (body.classList.contains('change_theme')){
        document.querySelector('#logo').src='images/logo-white.png';
        document.querySelectorAll('#logo')[1].src='images/logo-white.png';
    }else {
        document.querySelector('#logo').src='images/logo-black.png';
        document.querySelectorAll('#logo')[1].src='images/logo-black.png';
    }
}
os_theme.addEventListener('change',(e)=>handleColorTheme(e.matches))


const side_bar_switcher=document.querySelectorAll('.side_bar_switcher');
const side_bar_container=document.querySelector('.side_bar_container');
side_bar_switcher.forEach(btn=>{
    btn.addEventListener('click',e=>{
        side_bar_container.classList.remove('activate');
        side_bar_container.classList.toggle('active');
    });
})
side_bar_container.addEventListener('click',e=>{
    if (e.target===e.currentTarget){
        // setTimeout(()=>{
        // e.currentTarget.classList.remove('active');
        // e.currentTarget.classList.remove('activate');
        //     // e.currentTarget.style.display='none';
        // },100)
        e.currentTarget.classList.remove('active');
    }
})
// if (mediaQueryMax('1280px')){
//     side_bar.classList.add('active');
//     side_bar.nextElementSibling.classList.add(`active`);
//     side_bar.nextElementSibling.firstElementChild.classList.add(`active`);
// }
// side_bar_switcher.addEventListener('click',e=>{
//     if (mediaQueryMin('1280px')){
//         side_bar.classList.toggle('active');
//         side_bar.nextElementSibling.classList.toggle(`active`);
//         side_bar.nextElementSibling.firstElementChild.classList.toggle(`active`);
//     }else if (mediaQueryMin('766px')){
//         side_bar.classList.toggle('active');
//         side_bar.classList.toggle('active');
//     }
// });
// side_bar.addEventListener('click',e=>{
//     if (e.target===e.currentTarget){
//         e.currentTarget.classList.remove('active');
//         side_bar.classList.toggle('active');
//     }
// })
const search_box_switcher_mobile=document.querySelector('.search_box_switcher_mobile');
const search_box_mobile=document.querySelector('.search_box_mobile');
const search_box_off_mobile=document.querySelector('.search_box_off_mobile');
const search_input_mobile=document.querySelector('#search_input_mobile');
search_box_switcher_mobile.addEventListener('click',e=>{
    search_box_mobile.classList.toggle('active');
})
search_box_off_mobile.addEventListener('click',()=>{
    search_box_mobile.classList.remove('active');
})
search_input_mobile.addEventListener('input',e=>{
    if (e.target.value.length>0){
        e.target.nextElementSibling.classList.remove('hidden');
    }else {
        e.target.nextElementSibling.classList.add('hidden');
    }
})
search_input_mobile.addEventListener('blur',e=>{
    if (e.target.value.length>0){
        e.target.nextElementSibling.classList.remove('hidden');
    }else {
        e.target.nextElementSibling.classList.add('hidden');
    }
})
search_input_mobile.nextElementSibling.addEventListener('click',e=>{
    search_input_mobile.value='';
})


const input_search=document.getElementById('search_input');
const input_label=document.getElementById('input_label');
const search_icon=document.getElementById('search_icon');
const remove_search_text=document.querySelector('.remove_search_text');
input_search.addEventListener('focus',e=>{
    input_label.classList.add('active');
    search_icon.classList.add('active');
    e.target.parentElement.classList.remove('border-[--color3]');
    e.target.parentElement.classList.add('border-blue-800');
})
input_search.addEventListener('blur',e=>{
    if (input_search.value.length>0){
        input_label.classList.add('active');
        search_icon.classList.add('active');
    }else {
        input_label.classList.remove('active');
        search_icon.classList.remove('active');
        // e.target.parentElement.classList.remove('border-blue-800');
        e.target.parentElement.classList.add('border-[--color3]');
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
});
const setting_popup_btn=document.querySelector('.setting_popup_btn');
const setting_popup=document.querySelector('.setting_popup');
const language_popup=Qs('.language_popup');
let getLanguageCode=localStorage.getItem('language_code');
const getLanguage_code_fromHTML=Qs_class('language');

for (const con in countries) {
    let active='';
    if (getLanguageCode == null && countries[con] === 'English (US)'){
        active='active';
    }
    for (let i = 0; i < getLanguage_code_fromHTML.length; i++) {
        if(getLanguageCode != null && getLanguage_code_fromHTML[i].getAttribute('data-language-code') ===getLanguageCode){
            active='active';
        }
    }
    let liTag=`<li class="language translated_text ${active}" data-language-code="${con}"><iconify-icon icon="uit:check"></iconify-icon><a>${countries[con]}</a></li>`;
    language_popup.children[0].insertAdjacentHTML('beforeend',liTag);
}
const language=QsAll('.language');
language.forEach((lang,i)=>{
    lang.addEventListener('click',e=>{
        language.forEach(lang=>lang.classList.remove('active'));
        lang.classList.add('active');
        let language_code=lang.getAttribute('data-language-code');
        const translated_text=QsAll('.translated_text');
        let arrayText='';
        translated_text.forEach((translate,i)=>{
            arrayText+=translate.textContent +' ~ ';
        });
        const url = `https://microsoft-translator-text.p.rapidapi.com/translate?api-version=3.0&to=${language_code}`;
        const options = {
            method: 'POST', // Change the method to POST
            headers: {
                'content-type': 'application/json',
                'X-RapidAPI-Key': '43a9c3df28msheb399d4fb97099bp14157ejsnb90da966cf02',
                'X-RapidAPI-Host': 'microsoft-translator-text.p.rapidapi.com'
            },
            body: JSON.stringify([
                {
                    Text: arrayText, // Replace with the text you want to translate
                }
            ])
        };
        try {
            fetch(url, options).then(response=>response.json()).then(data=>{
                let textData=data[0].translations[0].text.split(' ~ ');
                translated_text.forEach(translate=>translate.textContent='');
                translated_text.forEach((translate,i)=>{
                    translate.textContent=`${textData[i]}`;
                });
                let detectedLanguage=data[0].detectedLanguage.language;
                localStorage.setItem('detectedLanguage',JSON.stringify(detectedLanguage));
                localStorage.setItem('language_code',JSON.stringify(detectedLanguage));
            });
        } catch (error) {
            console.error(error);
        }
    })
})
async function getLocation(){
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition((position)=>{
            fetch(`https://nominatim.openstreetmap.org/reverse?lat=${position.coords.latitude}&lon=${position.coords.longitude}&format=json`).then(response=>response.json())
                .then(data=>{
                    document.querySelector('.location span').textContent=data.address.country;
                })
        },(error)=>{
            console.log(error);
        });
    }
}
getLocation();
document.querySelector('html').addEventListener('click',e=>{
    const theme_popup=document.querySelector('.theme_popup');
    if (e.target===setting_popup_btn){
        setting_popup.classList.toggle('hidden');
    }
    else if (!setting_popup.contains(e.target)){
        setting_popup.classList.add('hidden');
    }
    if (appearance.contains(e.target)){
        setting_popup.classList.add('hidden');
        theme_popup.classList.remove('hidden');
    }else if (!theme_popup.contains(e.target)){
        theme_popup.classList.add('hidden');
    }
    if (e.target===document.querySelector('iconify-icon[icon="iconamoon:arrow-left-2-duotone"]')){
        theme_popup.classList.add('hidden');
        setting_popup.classList.remove('hidden');
    }
    if (setting_popup.querySelector('.language_btn').contains(e.target)){
        setting_popup.classList.add('hidden');
        language_popup.classList.remove('hidden');
    }else if (!language_popup.contains(e.target)){
        language_popup.classList.add('hidden');
    }
    if (e.target===language_popup.querySelector('iconify-icon[icon="iconamoon:arrow-left-2-duotone"]')){
        language_popup.classList.add('hidden');
        setting_popup.classList.remove('hidden');
    }
    if (!search_box_mobile.contains(e.target) && !search_box_switcher_mobile.contains(e.target)){
        search_box_mobile.classList.remove('active');
    }
})
