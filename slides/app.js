const slide_color = document.querySelectorAll(".color");
const prevbtn = document.querySelector(".btnprev");
const nextbtn = document.querySelector(".btnnext");

slide_color.forEach(function (color, index) {
    color.style.left = `${index * 100}%`;
});

let count = 0;
 
nextbtn.addEventListener("click", function(){
    count++;
    slide();
});

 prevbtn.addEventListener("click",function(){ 
    count--; 
    slide(); 
});

function slide(){
    if(count < 0){
        count = 0;
    }

    if(count < slide_color.length - 1){
        nextbtn.style.display = "block";
    } else {
        nextbtn.style.display = "none";
    }

    if(count > 0){
        prevbtn.style.display = "block";
    } else {
        prevbtn.style.display = "none";
    }

    slide_color.forEach(function(color){
        color.style.transform = `translateX(-${count * 100}%)`;
    });
}

prevbtn.style.display = "none";
