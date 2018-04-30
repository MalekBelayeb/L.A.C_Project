<?php

if(session_status()==PHP_SESSION_NONE)
{
    session_start();
}


include_once "../../../core/commentaireCore.php";
$commentaire = New commentaireCore();

$nbr_comm = $commentaire->get_nbr_commentaire_id_livre ($_POST['id_book']);


$req_comm =  $commentaire->Afficher_commentaire_id_load ($_POST['id_book'],$_POST['commentNewCount']);    
                                while ($product = $req_comm->fetch(PDO::FETCH_ASSOC)) :
?>
             <ol class="commentlist">
                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-103">
    <div id="comment-103" class="comment_container">
        <div class="comment-body">   
    <p class="meta">
        <strong class="woocommerce-review__author">
        <?php 
                echo $product['ID_COMPTE']; 
        ?>
        </strong> <em class="woocommerce-review__verified verified">(verified owner)</em> <span class="woocommerce-review__dash">&ndash;</span> <time class="woocommerce-review__published-date" datetime="2017-09-28T14:27:21+00:00">September 28, 2017</time>
    </p>
<div class="description"><p><?php  echo $product['COMMENTAIRE']; ?> 
<?php 
    if (isset($_SESSION['id']))
        if ($product['ID_COMPTE'] == $_SESSION['id']) { ?>
                <p>
                            <a href="supprimer_comment.php?id=<?php echo $product['ID']; ?>"><input type="submit" id="" class="button" value="supprimer"/></a>
                </p>
<?php  } ?>
   </p>
</div>
        </div>
    </div>
</li><!-- #comment-## -->
<?php  endwhile;?>


            </ol>