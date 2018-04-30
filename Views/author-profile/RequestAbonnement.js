$(document).ready(function(){
    
$("#abonner").click(function(){
    var aut=$("#AUT").val();
    
              $.ajax({
            type:"POST",
                  data:{AUT:aut},
                
              url:"http://localhost/AvenirCulturel/Views/author-profile/AbonnementCore.php",
              success:function(data)
              {
             
              }
}); 
    
});     
    
});