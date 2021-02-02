const menu:HTMLElement | null  = document.querySelector("header > div > button");
const nav:HTMLElement | null  = document.querySelector("header > nav");

menu?.addEventListener("click", ()=>{
    nav?.classList.toggle("open");
})