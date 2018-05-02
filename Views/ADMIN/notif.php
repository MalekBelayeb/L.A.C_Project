<?PHP

include_once "config.php";
if(isset($_POST['Check'])){
$sql="UPDATE `reclamation` SET `notif`=1" ;
$db = config::getConnexion();
$req=$db->prepare($sql);
$req->execute();
	header('Location: reclamation1.php');

}
?>