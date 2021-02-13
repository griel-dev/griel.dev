"use strict";
const content = document.querySelector("#domain");
if (content) {
    console.log("Olá! Procurando algo interessante aqui?");
    const results = content.querySelector("#result");
    const btnSubmit = content.querySelector("button#submit");
    btnSubmit === null || btnSubmit === void 0 ? void 0 : btnSubmit.addEventListener("click", (event) => {
        event.preventDefault();
        let input = content.querySelector("input#domain");
        if (!input.value) {
            input.focus();
        }
        else {
            let inputValue = input.value.split(".")[0];
            window.location.search = `?domain=${inputValue}`;
        }
    });
    if (window.location.search == "") {
        results.style.display = 'none';
    }
    else {
        results.style.display = 'flex';
    }
}
