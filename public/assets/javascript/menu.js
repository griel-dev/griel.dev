"use strict";
const menu = document.querySelector("header > div > button");
const nav = document.querySelector("header > nav");
menu === null || menu === void 0 ? void 0 : menu.addEventListener("click", () => {
    menuHandler()
        .then(() => {
        console.log('Abriu');
    })
        .catch(() => {
        console.log("Error");
    });
});
function menuHandler() {
    return new Promise((success, error) => {
        nav === null || nav === void 0 ? void 0 : nav.classList.toggle("open");
    });
}
