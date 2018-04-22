<?php




function like{



<?php 
if(session_status()==PHP_SESSION_NONE)
{
  session_start();
}

$conn= new PDO('mysql:host=localhost;dbname=crud_tutorial','root','');
// lets assume a user is logged in with id $user_id
        
  if(isset($_SESSION['id_user']))
  { 
$user_id = $_SESSION['id_user'];
}else
{
  $user_id=0;
}

if (!$conn) {
 // die("Error connecting to database: " . mysqli_connect_error($conn));
  exit();
}





}




?>