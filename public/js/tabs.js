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
