$(document).ready(function(){

    
    function getrate()
    {
        var idC=$("#id_compte").val();
        var idL=$("#id_livre").val();
                   
        $.ajax({
            url:"http://localhost/AvenirCulturel/Views/shop/Livres/Rating/getRate.php?idLivre="+idL+"&"+"idCompte="+idC,
            dataType:"html",
            success: function(data)
            {
            $("#rating1-5").html(data+"/5 Ratings");
            
                if($("#star-5").val()==data)
                {
                    $("#star-5").prop('checked',true);
                }
                else
                    {
                    $("#star-5").prop('checked',false);
                    }

                if($("#star-4").val()==data)
                {
                    $("#star-4").prop('checked',true);
                }
                else
                    {
                    $("#star-4").prop('checked',false);
                    }

                if($("#star-3").val()==data)
                {
                    $("#star-3").prop('checked',true);
                }
                else
                    {
                    $("#star-3").prop('checked',false);
                    }

                if($("#star-2").val()==data)
                {
                    $("#star-2").prop('checked',true);
                }
                else
                    {
                    $("#star-2").prop('checked',false);
                    }
                
                
                
                
                
                if($("#star-1").val()==data)
                {
                    $("#star-1").prop('checked',true);
                }
                else
                    {
                    $("#star-1").prop('checked',false);
                    }
                

            }
            });        
    }
    
getrate();
$("#star-5").click(getrate);
$("#star-4").click(getrate);
$("#star-3").click(getrate);
$("#star-2").click(getrate);
$("#star-1").click(getrate);
    
    
});