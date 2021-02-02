const menu:Element|null = document.querySelector("header > div > button");
const nav:Element = document.querySelector("header > nav");

menu?.addEventListener("click", ()=>{
    nav.classList.toggle("open");
})