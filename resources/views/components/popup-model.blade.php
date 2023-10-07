<div class="popup_model_container fixed bg-[--black-trans] d-flex inset-0 z-[11111]">
<div {{$attributes->merge(['class'=>'popup_model  w-[50vw] h-[50vh] bg-[--color1] br-.5vw shadow-2xl'])}}>
{{ $slot}}
</div>
</div>
<script>
    const popup_model_container=document.querySelector('.popup_model_container');
    const popup_model=document.querySelector('.popup_model');
    popup_model_container.addEventListener('click',e=>{
        if (e.target===e.currentTarget){
            e.currentTarget.classList.remove('active');
        }
    })
</script>
