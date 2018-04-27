/*function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }*/


 var map;
  var geocoder;
function initMap() {
        var tunis={lat: 36.8065, lng: 10.1815};
         map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: tunis
          
        });

        var marker = new google.maps.Marker({
          position: tunis,
          map: map
       
        });


      var cdata = JSON.parse(document.getElementById('data').innerHTML);
      geocoder = new google.maps.Geocoder();
       codeAddress(cdata);


      var alldata = JSON.parse(document.getElementById('alldata').innerHTML);

      showallcoleges(alldata);

       

      }

function codeAddress(cdata) {
    Array.prototype.forEach.call(cdata, function(data){
          var adresse = data.name + ' ' + data.adresse;
    geocoder.geocode( { 'address': adresse}, function(results, status) {
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        var points ={};
        points.id =data.id;
        points.lat = map.getCenter().lat();
        points.lng = map.getCenter().lng();
        updatecollegeWithLatLng(points);

        

        
        
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });

    });
  }



function updatecollegeWithLatLng(points) {
    $.ajax({
    url:"action.php",
    method:'post',
    data : points,
    success: function(res){
      console.log(res);
    }
  })
  

}



function showallcoleges(alldata){
 

 var infoWindow = new google.maps.InfoWindow;

Array.prototype.forEach.call(alldata, function(data){
     var content = document.createElement('div');
     var strong = document.createElement('div');

     strong.textContent = data.cin+' || '+data.nom;
     content.appendChild(strong);

var img = document.createElement('img');
img.src = 'raedff/img/az.png';
img.style.width = '100px';
content.appendChild(img);



    var marker = new google.maps.Marker({
          position: new google.maps.LatLng(data.lat, data.lng),
          map: map
       
        });

    marker.addListener('mouseover' , function(){
      infoWindow.setContent(content);
      infoWindow.open(map,marker);
    })

})  


}


