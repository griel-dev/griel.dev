const content:HTMLElement | null = document.querySelector("#domain");

if (content) {
    console.log("Olá! Procurando algo interessante aqui?");

    const results:HTMLElement | null = content.querySelector("#result");
    const btnSubmit:HTMLElement | null = content.querySelector("button#submit");
    btnSubmit?.addEventListener("click", (event)=>{
        event.preventDefault();
        let input = content.querySelector("input#domain");
        if (!input.value) {
            input.focus();
        } else {
            let inputValue:Array<string> = input.value.split(".")[0];
            window.location.search = `?domain=${inputValue}`;
        }
        
    });

    if (window.location.search == "") {
        results.style.display = 'none';
    } else {
        results.style.display = 'flex';
    }
}

