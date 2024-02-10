const apiKey = "a09da4da208fccf318a70ffa4a0cad6e";
const apiUrl = "https://api.openweathermap.org/data/2.5/weather?&units=metric&q=";

const cityname = document.querySelector(".search input");
const searchbtn = document.querySelector(".search button");
const weatherIcon = document.querySelector(".weather-icon");

document.addEventListener("DOMContentLoaded",async function(){
    var checks =await checkcity("chennai");
    checkWeather(checks);
});

function checkWeather(data){
    
    document.querySelector(".city").innerHTML = data.name;
    document.querySelector(".temp").innerHTML = Math.round(data.main.temp) + "°C";
    document.querySelector(".humidity").innerHTML =data.main.humidity + "%";
    document.querySelector(".wind").innerHTML =data.wind.speed + "Km/h";

    if(data.weather[0].main=="Clouds"){
        weatherIcon.src = "./images/clouds.png";
    } 
    else if(data.weather[0].main=="Clear"){
        weatherIcon.src = "./images/clear.png";
    } 
    else if(data.weather[0].main=="Drizzle"){
        weatherIcon.src = "./images/drizzle.png";
    } 
    else if(data.weather[0].main=="Mist"){
        weatherIcon.src = "./images/mist.png";
    } 
    else if(data.weather[0].main=="Rain"){
        weatherIcon.src = "./images/rain.png";
    } 
    else if(data.weather[0].main=="Snow"){
        weatherIcon.src = "./images/snow.png";
    }
}

async function checkcity(cityname){
    const response = await fetch(apiUrl + cityname +`&appid=${apiKey}`);
    var data = await response.json();
    return data; 
}

searchbtn.addEventListener("click", async function () {
    var check = await checkcity(cityname.value);

    if (typeof check.name === "undefined") {
        cityname.style.border = "3px solid red";
        cityname.value = "Invalid City";
        // cityname.style.color = "red";
    } else {
        cityname.style.border = "none";
        checkWeather(check);
    }
});