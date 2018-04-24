
<?php 
// connect to database
$conn= new PDO('mysql:host=localhost;dbname=malek','root','');

if(session_status()==PHP_SESSION_NONE)
{
  session_start();
}


// lets assume a user is logged in with id $user_id
        
   if(isset($_SESSION['id']))
{

$user_id =$_SESSION['id'] ;


}
else{
  $user_id=0;
}




if (!$conn) {
 // die("Error connecting to database: " . mysqli_connect_error($conn));
  exit();
}

// if user clicks like or dislike button
if (isset($_POST['action'])) {
  $post_id = $_POST['post_id'];
  $action = $_POST['action'];
  switch ($action) {
    case 'like':
         $sql="INSERT INTO rating_info (user_id, post_id, rating_action) 
             VALUES ('$user_id', $post_id, 'like') 
             ON DUPLICATE KEY UPDATE rating_action='like'";
         break;
    case 'dislike':
          $sql="INSERT INTO rating_info (user_id, post_id, rating_action) 
               VALUES ('$user_id', $post_id, 'dislike') 
             ON DUPLICATE KEY UPDATE rating_action='dislike'";
         break;
    case 'unlike':
        $sql="DELETE FROM rating_info WHERE user_id='$user_id' AND post_id=$post_id";
        break;
    case 'undislike':
          $sql="DELETE FROM rating_info WHERE user_id='$user_id' AND post_id=$post_id";
      break;
    default:
      break;
  }

  // execute query to effect changes in the database ...
  $conn->query($sql);
  //$ds->execute();
  //mysqli_query($conn, $sql);
  echo getRating($post_id);
  exit(0);
}

// Get total number of likes for a particular post
function getLikes($id)
{
  global $conn;
  $sql = "SELECT COUNT(*) as nb FROM rating_info 
        WHERE post_id = $id AND rating_action='like'";

        $rs=$conn->query($sql);
  //$rs = mysqli_query($conn, $sql);
      
  $result=$rs->fetch();
 //$result = mysqli_fetch_array($rs);
//print_r($result['nb']);
  return $result['nb'];
}

// Get total number of dislikes for a particular post
function getDislikes($id)
{
  global $conn;
  $sql = "SELECT COUNT(*)  as nb FROM rating_info 
        WHERE post_id = $id AND rating_action='dislike'";
      
        $rs=$conn->query($sql);
  //$rs = mysqli_query($conn, $sql);
     $result=$rs->fetch();

  //$result = mysqli_fetch_array($rs);
     //print_r($result['nb']);

 return $result['nb'];
}

// Get total number of likes and dislikes for a particular post
function getRating($id)
{
  global $conn;
  $rating = array();
  $likes_query = "SELECT COUNT(*) as nb FROM rating_info WHERE post_id = $id AND rating_action='like'";
  $dislikes_query = "SELECT COUNT(*) as nb FROM rating_info 
            WHERE post_id = $id AND rating_action='dislike'";
                    $likes_rs=$conn->query($likes_query);

  //$likes_rs = mysqli_query($conn, $likes_query);
 $dislikes_rs=$conn->query($dislikes_query);

 // $dislikes_rs = mysqli_query($conn, $dislikes_query);
       $likes=$likes_rs->fetch();

  //$likes = mysqli_fetch_array($likes_rs);
  $dislikes=$dislikes_rs->fetch();
  //$dislikes = mysqli_fetch_array($dislikes_rs);
  $rating = [
    'likes' => $likes['nb'],
    'dislikes' => $dislikes['nb']
  ];
  return json_encode($rating);
}

// Check if user already likes post or not
function userLiked($post_id)
{
  global $conn;
  global $user_id;
  $sql = "SELECT count(*) as nb FROM rating_info WHERE user_id='$user_id'
          AND post_id='$post_id' AND rating_action='like'";


        $result=$conn->query($sql);
        $rs = $result->fetch();

  //$result = mysqli_query($conn, $sql);
  //if (mysqli_num_rows($result) > 0) {
  if ($rs['nb'] > 0) {

    return true;
  }else{
    return false;
  }
}

// Check if user already dislikes post or not
function userDisliked($post_id)
{
  global $conn;
  global $user_id;
  $sql = "SELECT count(*) as nb FROM rating_info WHERE user_id='$user_id' 
        AND post_id='$post_id' AND rating_action='dislike'";
         $result=$conn->query($sql);
         $rs = $result->fetch();
  //$result = mysqli_query($conn, $sql);
     if ($rs['nb'] > 0) {

 //if (mysqli_num_rows($result) > 0) {
    return true;
  }else{
    return false;
  }
}

