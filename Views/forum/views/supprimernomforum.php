<?PHP
include "../core/topiccore.php";
$TopicC=new Topiccore();
if (isset($_POST["id"])){
	$TopicC->supprimerTopic($_POST["id"]);
	header('Location: forum.php');
}

?>