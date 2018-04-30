$(document).ready(function(){
    
    
function getAbonn()
    {
                   $.ajax({
           
              url:"http://localhost/AvenirCulturel/Views/author-profile/getAbonn.php?AUT="+$("#AUT").val(),
              success:function(data)
              {
         
if(data=='')
    {
        $("#abonner").val("S'abonner");
    }
                  else{
        $("#abonner").val("Desabonner");
                      
                
                  }
                  
              }    
});
    }
    
    

function totalAbonn()
    {
        
                     $.ajax({
                         
              url:"http://localhost/AvenirCulturel/Views/author-profile/totalAbonn.php?AUT="+$("#AUT").val(),
              success:function(data)
              {
        $("#heart").html(data+' Abonnées');
              }    
});  

    }
     
        totalAbonn();
        getAbonn();
      $("#abonner").mouseout(totalAbonn);
      $("#abonner").mouseout(getAbonn);
      

    
    });