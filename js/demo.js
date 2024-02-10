// var name  = 100;
// var x = `${name * 1}%`;
// console.log(typeof(x));


let api = "https://api.openweathermap.org/data/2.5/weather?q=Chennai&appid=a09da4da208fccf318a70ffa4a0cad6e&units=matrics";
let data = api.json();
console.log(data);
