"use strict";
const businessSpan = document.querySelector("#header > div > h2 > span");
const businessType = [
    'uma barbearia',
    'um petshop',
    'uma clínica',
    'um salão'
];
if (businessSpan) {
    let text = businessType[0].split("");
    console.log(text.length, text[12]);
    let sum = -1;
    let stringCounter = setInterval(() => {
        sum = sum + 1;
        writeToPage(businessSpan.innerHTML, sum);
        if (sum == text.length - 1) {
            clearInterval(stringCounter);
            unwriteToPage();
        }
    }, 200);
    function getBusiness() {
    }
    function writeToPage(initial, count) {
        businessSpan.innerHTML = `${initial}${text[count]}`;
    }
    function unwriteToPage() {
        console.log(businessSpan.innerHTML.length - 1);
        //businessSpan.innerHTML = businessSpan.innerHTML.substr(businessSpan.innerHTML.length-1, businessSpan.innerHTML.length)
        /*setInterval(()=>{
            businessSpan!.innerHTML = `${initial}${text[count]}`;
        }, 200);*/
    }
}
