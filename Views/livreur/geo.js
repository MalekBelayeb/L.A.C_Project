var x = document.getElementById("demo");
var y = document.getElementById("demo2");

var z = document.getElementById("demo3");
var w = document.getElementById("demo4");

var loc=navigator.geolocation;



(function() {
    if (loc) {
        loc.watchPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
    })();
    
function showPosition(position) {

    /*x.innerHTML="Latitude: " + position.coords.latitude;
    y.innerHTML= "<br>Longitude: " + position.coords.longitude;*/
    z.value= position.coords.latitude;
    w.value= position.coords.longitude;
  }