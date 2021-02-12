const menu:HTMLElement | null  = document.querySelector("header > div > button");
const nav:HTMLElement | null  = document.querySelector("header > nav");

menu?.addEventListener("click", ()=>{
    menuHandler()
    .then(()=>{
        console.log('Abriu');
    })
    .catch(()=>{
        console.log("Error")
    })
})

function menuHandler() {
    return new Promise((success, error)=>{
        nav?.classList.toggle("open");
    });
}