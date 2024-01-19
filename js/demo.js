
function getdata(){
    const XMLHttp = new XMLHttpRequest();
    
    XMLHttp.onload = function(){
        if(XMLHttp.status == 200){
            var getValue = JSON.parse(XMLHttp.response);
            console.log(getValue['message']);
            alert(getValue['message']);
        } else{
            console.log("file not found");
            alert("file not found");
        }
    }
    XMLHttp.open("GET", "script.php");
    XMLHttp.send();
}

getdata();