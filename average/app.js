// const color = ["white","red","green","blue","orange","purple"] ;
const body = document.getElementById("color");
const btn = document.querySelector(".btn");
const min = 0;
const max = 255;    
btn.addEventListener("click",function () {

    // var getRaandomcolor = color[getRandomcolor];
    var r = Math.floor(Math.random() * (min ,max));
    var g = Math.floor(Math.random() * (min ,max));
    var b = Math.floor(Math.random() * (min ,max));
    var a = Math.floor(Math.random() * (0,9));

    body.style.backgroundColor = "rgb("+r+","+g+","+b+","+0+"."+a+")";
    // console.log("rgb("+r+","+g+","+b+","+0+"."+a+")");
    // console.log(Math.floor(Math.random() * (0,10)));
});

// function getRandomcolor(){
//     return Math.floor(Math.random() + (0 , 255));
// }