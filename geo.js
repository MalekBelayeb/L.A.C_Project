  var n=document.getElementById('id1');
        var loc=navigator.geolocation;
        
      
        
        (function(){
            if(loc)
                {     
                   loc.getCurrentPosition(coordonnes);
                }
            else {
                
                n.innerHTML='location indisponible';
            }
            
        })();
        
        
        function coordonnes(x)
        {
            n.innerHTML='latitude: '+x.coords.latitude+'<br> longitutde: '+ x.coords.longitude;
            window.open('https://www.google.tn/maps/@'+x.coords.latitude+','+x.coords.longitude+',15z?hl=fr','_blank','width=500 , height=300');
        }