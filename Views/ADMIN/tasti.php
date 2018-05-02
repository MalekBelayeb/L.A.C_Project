<?php include_once "/core/topiccore.php";



$TopicC=new topiccore();
 $liste= $TopicC->afficher_rec1();

?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11,fc-3.2.1/datatables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11,fc-3.2.1/datatables.min.js"> </script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!DOCTYPE html>
<html>

<head>
	<title>test recherche</title>
	<form class="form-wrapper">
<link rel="stylesheet" type="text/css" href="recherche.css">
</head>
<body>
<input class="form-control" id="myInput" type="text" placeholder="Search..">

 <TABLE id="myTable" class="table table-bordered"> 
<center><font color="#C8AD7F" style="font-style: italic;"><h2> les Reclamations </h2>  </font></center>

<TR > 
<Td  style=" font-style: italic;color: red; font-weight: bold; "> id  </Td> 
<Td  style=" font-style: italic;color: red; font-weight: bold; "> Type de reclamation  </Td> 
<Td style=" font-style: italic;color: red; font-weight: bold; "> Contenu </Td>
<Td style=" font-style: italic;color: red; font-weight: bold; "> Date de deposition </Td> 

<TH>  </TH> 
</TR> 
<?php
foreach( $liste as $row) { ?>

<tr>
<td><big><?= $row['id'] ?> </big></td>
   
<td><big><?= $row['type'] ?> </big></td>
   <td>
  
    
    
   
    <big><?= $row['rec'] ?> </big>

   
    </td>
    <td><big><?= $row['date'] ?> </big></td></tr>


 
</tr>
<?php  }
 
 ?>
</TABLE>

</body>
</html>