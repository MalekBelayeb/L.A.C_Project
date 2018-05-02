<?php  
include_once "../config.php";
include_once "../views/test.php";

$db=Config::getConnexion();
$categories = $db->query('SELECT * FROM f_categories ORDER BY nom');
$subcat = $db->prepare('SELECT * FROM f_souscategories WHERE id_categorie = ? ORDER BY nom');

?>