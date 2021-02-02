"use strict";
const menu = document.querySelector("header > div > button");
const nav = document.querySelector("header > nav");
menu === null || menu === void 0 ? void 0 : menu.addEventListener("click", () => {
    nav === null || nav === void 0 ? void 0 : nav.classList.toggle("open");
});
