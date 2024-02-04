const count = document.querySelector("#count");
const decrease = document.querySelector(".btn-decrease");
const reset = document.querySelector(".btn-reset");
const increase = document.querySelector(".btn-increase");

let number = 0;
increase.addEventListener("click",() => {
    number++;
    count.innerHTML = number;
});

decrease.addEventListener("click",function(){
    number--;
    count.innerHTML = number;
});

reset.addEventListener("click",function(){
    number=0;
    count.innerHTML = number;
});

count.innerHTML = number;

