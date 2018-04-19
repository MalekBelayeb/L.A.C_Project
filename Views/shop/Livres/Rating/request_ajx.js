$(document).ready(function(){

            $('#star-5').click(function(){
                                var s5=$("#star-5").val();
                                var id=$("#id_livre").val();

                                $.ajax({
                                    type:"POST",
                                    url:"http://localhost/AvenirCulturel/Views/shop/Livres/Rating/Rating.php?Livre="+id,
                                    data:{ratings:s5},
                                    success:function(data)
                                    {
                                    
                                    }

                                });
                            }); 
    
           $('#star-4').click(function(){
                                var s4=$("#star-4").val();
                                var id=$("#id_livre").val();

                                $.ajax({
                                    type:"POST",
                                    url:"http://localhost/AvenirCulturel/Views/shop/Livres/Rating/Rating.php?Livre="+id,
                                    data:{ratings:s4},

                                });
                            });
    
    
               $('#star-3').click(function(){
                                var s3=$("#star-3").val();
                                var id=$("#id_livre").val();
                                $.ajax({
                                    type:"POST",
                                    url:"http://localhost/AvenirCulturel/Views/shop/Livres/Rating/Rating.php?Livre="+id,
                                    data:{ratings:s3},

                                });
                            });
    
    
    
        $('#star-2').click(function(){
                                var s2=$("#star-2").val();
                                var id=$("#id_livre").val();
                                $.ajax({
                                    type:"POST",
                                    url:"http://localhost/AvenirCulturel/Views/shop/Livres/Rating/Rating.php?Livre="+id,
                                    data:{ratings:s2},

                                });
                            });
    
    
     $('#star-1').click(function(){
                                var s1=$("#star-1").val();
                                var id=$("#id_livre").val();
                                $.ajax({
                                    type:"POST",
                                    url:"http://localhost/AvenirCulturel/Views/shop/Livres/Rating/Rating.php?Livre="+id,
                                    data:{ratings:s1},

                                });
                            });
    
                        });
