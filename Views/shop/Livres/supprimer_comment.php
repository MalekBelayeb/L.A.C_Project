<?php


include_once "../../../core/commentaireCore.php";
include_once "../../../core/usercore.php";


$user = new Usercore();


$commentaire = New commentaireCore();

$commentaire->delete_comment($_GET['id']);
header('Location: ' . $_SERVER['HTTP_REFERER'] );





?>