

<?php   

include_once "$_SERVER[DOCUMENT_ROOT]/AvenirCulturel/Views/header.php";

 ?>
                    <!-- #page-title -->


        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="Slide/1.jpg" style="width:90%">
            </div>

            <div class="mySlides fade">
                <img src="Slide/2.jpg" style="width:90%">
            </div>

            <div class="mySlides fade">
                <img src="Slide/3.jpg" style="width:90%">
            </div>
        </div>
        <script type='text/javascript' src='wp-content/themes/book-junky/assets/js/Slide.js'></script>

	<div id="content" class="site-content">
<div id="primary" class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <main id="main" class="site-main">

                <article id="post-271" class="post-271 page type-page status-publish hentry">
	<div class="entry-content">

			<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid width-fill vc_custom_1503973713559 vc_row-has-fill"><div class="column-fill wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">        <div class="carousel-product extend-right">


<p class="title-carousel">LES MEILLEURES VENTES DE LA SEMAINE</p>

                                <div class="cms-carousel owl-carousel" id="cms-carousel">

                                    <?php
                                    $aff=$book->MeilleurVentesDeLaSemaine();

                                    foreach ($aff as $rows) {
                                        ?>
                                        <div class="cms-carousel-item clearfix" style="background-color: #24655e;color:white;">

                                            <a class="title-product" style="color:white !important;"
                                               href="shop/Livres/index?Livre=<?php echo $rows['ID_LIVRE']; ?>"><?php echo getData($rows['ID_LIVRE'], 'ID', 'NOM', 'book'); ?></a>

                                            <div class="wrap-info">

                                                <p class="product-author" style="color:white !important;">

                                                    Par: <?php echo getData(getData($rows['ID_LIVRE'], 'ID', 'AUTHOR', 'book'), 'ID', 'NOM', 'auteur');    ?> </p>
                                                <div class="woocommerce">
                                                    <div class="woocommerce-product-rating">
                <span class="star-rating  bj-color-white">
                    <span style="width:0%"></span>
                </span><span class="bj-rating-counts" style="color:white;"><?php echo getData($rows['ID_LIVRE'], 'ID', 'RATING', 'book'); ?></span></div>
                                                </div>
                                                <div class="excerpt-product" style="color:white !important;">
                                                    <?php echo getData($rows['ID_LIVRE'], 'ID', 'OVERVIEW', 'book'); ?>
                                                </div>
                                                <a class="view-shop"
                                                   style="color: #24655e"
                                                   href="shop/Livres/index?Livre=<?php echo $rows['ID_LIVRE']; ?>">Voir ce livre <i
                                                            class="zmdi zmdi-long-arrow-right"></i></a>
                                            </div>

                                            <div class="post-thumbnail" style="box-shadow:0 5px 8px#24655e"><img width="330" height="500"
                                                                                                                 src="wp-content/uploads/<?php echo getData($rows['ID_LIVRE'], 'ID', 'IMAGE', 'book'); ?>"
                                                                                                                 class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                                 alt=""/></div>

                                        </div>
                                        <?php
                                    }
                                    ?>




                                </div>
        </div>
        </div></div></div></div><div class="vc_row-full-width"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1503889319693 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 style="font-size: 15px;color: #888a92;text-align: center;font-family:Voces;font-weight:400;font-style:normal" class="vc_custom_heading vc_custom_1507284853599" >RECHERCHER PAR TITRE,AUTEUR...</h2><div class="wrap-search-book" id="cms-search-book">
    <form  class="searchform" action="http://demo.cmssuperheroes.com/themeforest/bookjunky/" method="get">
        <div class="wrap-cat">
            
    <select name="product_cat" id="product_cat">

        <option value="">Tous</option>
        <option value="business" >Business</option><option value="children" >Childrens</option><option value="comedy" >Comedy</option><option value="comic" >Comic</option><option value="cooking" >Cooking</option><option value="fiction" >Fiction</option><option value="home-garden" >Home &amp; Garden</option><option value="media" >Media</option><option value="romance" >Romance</option><option value="science" >Science</option><option value="space-nature" >Space &amp; Nature</option><option value="thriller" >Thriller</option>    </select>
            </div>

        <div class="wrap-year">
                <select name="bj_tax_pa_year_publication" id="term">

        <option value="">Année</option>
        <option value="191" >1955</option><option value="15" >1991</option><option value="42" >1992</option><option value="68" >1993</option><option value="65" >2000</option><option value="66" >2002</option><option value="67" >2003</option><option value="64" >2007</option><option value="70" >2010</option><option value="177" >2011</option><option value="71" >2013</option><option value="188" >2015</option><option value="100" >2016</option><option value="167" >2017</option>    </select>
            </div>

        <div class="wrap-search">
            <input type="text" class="form-search" name="s" value=""
                   placeholder="Rechercher un livre">
            <button type="submit" class="search-submit">Rechercher</button>
        </div>
        <input type="hidden" name="post_type" value=""/>
        <input type="hidden" name="bj_action" value="bj_product"/>
    </form>
</div></div></div></div></div><div class="vc_row-full-width"></div>



        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid width-fill vc_custom_1503975536992 vc_row-has-fill"><div class="column-wg-left wpb_column vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div  class="wpb_widgetised_column wpb_content_element">
                            <div class="wpb_wrapper">
			

<?php

$sort = $book->Sort_Livre ("DATE");


$bks = $book->Afficher_sort();

$count=0;

?>

            <aside id="recent_product-2" class="widget-home widget_recent_product"><h3 class="wg-home-title">Nouveauté</h3>    



                    <?php

                                while ($product = $bks->fetch(PDO::FETCH_ASSOC)) :

                                    $donnes_auteur = $auteur->Recupere_auteur_id($product['AUTHOR']);


                           $count++;
                            if ($count<5)
                            {
                            
                    ?>

                        <div class="review-item clearfix">


                    <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #e9e7e8">
                        <a href="shop/Livres/index?Livre=<?php echo $product['ID'] ?>">
                            <img src="wp-content/uploads/<?= $product['IMAGE']?>"
                             alt="Thumbnail">
                         </a>
                    </div>

                    <div class="contents">
                        <a href="shop/Livres/index?Livre=<?php echo $product['ID'] ?>" class="title">
                           <?php echo $product['NOM']; ?>                        </a>
                        <div class="author-product">
                            by <?php echo $donnes_auteur['NOM']; ?>                        </div>
   
<?php  
                if ($product['REDUCTION']!=0)
{      
?>   
 
 <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span><?php echo $product['PRIX']; ?></span></del> 
<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span><?php echo ($product['PRIX']-($product['PRIX']*$product['REDUCTION'])/100) ?></span></ins>


<?php
} else
    {
 ?>

    <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span><?php echo $product['PRIX'] ?></span></ins>

<?php
}
?>                 </div>
                </div>

                <?php  
                
                

                }
                endwhile;
                

                ?>



<aside id="browse_author-3" class="widget-home widget_browse_author"><h3 class="wg-home-title">BROWSE BY AUTHOR</h3>            

<?php


$bks = $auteur->Afficher_auteur();



?>
           


         <?php

         $vu= new VuCore();



                            while ($product = $bks->fetch(PDO::FETCH_ASSOC)) :
                                if(isset($_SESSION['id']))
                                    $vu->setCompte($_SESSION['id']);

                                $vu->setAut($product['ID']);

                                $donnees = $auteur->Nbr_livre_id($product['ID']);
        ?>

            <div class="bj-brs-author-item clearfix" style="display:block;
            <?php if($vu->countNonVu()>$vu->countVu() and isset($_SESSION['id'])) echo "background-color: 	#F0F0F0"; ?>  ">
                <div class="wrap-thumbnail">
                    <a href="author-profile/profil_author.php?id_author=<?php echo $product['ID'] ?>">
                        <img style="  <?php if($vu->countNonVu()>$vu->countVu() and isset($_SESSION['id'])) echo "border: 2px solid #8a3ab8;"; ?>  " src="wp-content/uploads/<?php if($product['IMAGE']=='') echo 'anonyme.png'; else echo $product['IMAGE']; ?>" alt="">
                    </a>
                </div>
                <div class="wrap-info">
                    <a href="author-profile/profil_author.php?id_author=<?php echo $product['ID'] ?>"><?php echo $product['NOM']; ?></a>
                    <div class="bj-brs-author-count"><?php echo $donnees['NbNews'];  ?> Book</div>
                </div>
            </div>
            <?php endwhile;?>                

            
            </aside>





		</div>
	</div>
</div></div></div><div class="column-cont-right wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
    		<div class="cms-grid-wraper grid-2 extend-space" id="cms-grid">
    				 <div class="cms-grid-filter clearfix">
	    			       <h3 class="title">PAR GENRE</h3>
	    				 <ul class="cms-filter-category list-unstyled list-inline">
			                <li><a class="active" href="index.php" data-group="all">Tous</a></li>

			               <li>
                               <a href="index.php?Category=CULTURE" data-group="category-comedy">Culture</a>
			                    </li>
			                    <li>
                                <a href="index.php?Category=LOISIRS" data-group="category-romance">Loisirs</a>
			                    </li>
			                	<li>
                                    <a href="index.php?Category=TECHNOLOGIE" data-group="category-thriller">Technologies</a>
			                    </li>
			                	<li>
                                    <a href="index.php?Category=ARTS" data-group="category-media">Arts</a>
			                    </li>
			                	<li>
                                    <a href="index.php?Category=CUISINE" data-group="category-cooking">Cuisine</a>
			                    </li>
                         </ul>
			    </div>
                




<?php



                $LCore=new LivreCore();
                $LivreParPage=9;

                if(isset($_GET['page']) AND !empty($_GET['page']))
                {
                $_GET['page']=intval($_GET['page']);
                $pageCourante=$_GET['page'];
                }
                else{
                $pageCourante=1;
                }
                $debut_enrg=($pageCourante-1)*$LivreParPage;
              if(isset($_GET['Category']) and !empty($_GET['Category']))
              {
                  $Livres= $LCore->DiviserLivreCategory($debut_enrg,$LivreParPage,$_GET['Category']);
                  $NbTotal=$LCore->NbTotalLivreCategory($_GET['Category']);
              }
              else
              {
                  $Livres= $LCore->DiviserLivre($debut_enrg,$LivreParPage);
                  $NbTotal=$LCore->NbTotalLivre();
              }
                $pagesTotal=ceil($NbTotal/9);
               










?>



            
                <div class="row cms-grid cms-grid-masonry-2">
                    <?php
                            while ($product = $Livres->fetch(PDO::FETCH_ASSOC)) :

                                $donnes_auteur = $auteur->Recupere_auteur_id ($product['AUTHOR'])

                    ?>


                    
                        <div class="cms-grid-item col-lg-2.4 col-md-4 col-sm-6 col-xs-12 new-col-lg-5"  data-groups='["all","category-comedy","category-thriller"]'>
                            <div class="cms-grid-media" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #e9e7e8;" onmouseover="this.style.boxShadow ='0 0 20px 0 #e9e7e8';" onmouseout="this.style.boxShadow ='0 0 15px -2px #e9e7e8';" ><a href="shop/Livres/index?Livre=<?php echo $product['ID'] ?>"><img width="330" height="500" src="wp-content/uploads/<?=$product['IMAGE'] ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" /></a></div>
                            <div class="info-product">
                                <a class="product-title" href="shop/Livres/index?Livre=<?php echo $product['ID'] ?>"><?php  echo $product['NOM'] ; ?></a>
                                <p class="product-author">by: <?php echo $donnes_auteur['NOM'] ;   ?></p>                           
    <span class="price"><del><span class="woocommerce-Price-amount amount">



<?php

if ($product['REDUCTION']!=0)
{
   echo  '<span class="woocommerce-Price-currencySymbol">&pound;</span>'.$product['PRIX'].'</span></del>'; 

    echo  '<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>'.($product['PRIX']-($product['PRIX']*$product['REDUCTION'])/100)
.'</span></ins>';
}else    {

       echo  '<span class="woocommerce-Price-currencySymbol"></span></span></del>'; 
    echo  '<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>'.$product['PRIX'].'</span></ins>';



}
?>

    </span>
                            </div>
                        </div>

                    <?php  endwhile;?>


                    
               
                                        </div>

                                            <?php
                    for ($i=1;$i<=$pagesTotal;$i++)
                    {
                    if(isset($_GET['Category']))
                    {
                        echo '<a class="page-numbers current" href="index.php?Category='.$_GET['Category'].'&amp;page='.$i.'  "> '.$i.'</a>';
                    }
                    else
                    {
                            echo '<a class="page-numbers current" href="index.php?page='.$i.'  "> '.$i.'</a>';
                    }
                    }


?>

                            </div>

        </div></div>

 

        </div>







        </div>











                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1503989158128">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="heading-3 clearfix">
                                                    <h2 style="font-size: 15px;color: #888a92;text-align: left;font-family:Voces;font-weight:400;font-style:normal" class="heading">CATEGORIES POPULAIRES</h2>

                                                    <div class="wrap-link">
                     <a href="#" target="_self">TOUS LES CATEGORIES<i class="zmdi zmdi-chevron-right"></i>
                                                        </a></div></div><div class="vc_empty_space"   style="height: 7px" >
                                                    <span class="vc_empty_space_inner"></span></div>

                                                <div class="cms-category">
			<div class="row">
								<div class="cat-item col-xs-12 col-sm-6 col-md-4">
					<div class="item-cat">
						<a href="product-category/thriller/index.html">
							<div class="thumbnail-cat">
								<img src="wp-content/uploads/cate-thrillers.png" alt="thumbnail">
							</div>
							<div class="info">
								<h5>Thriller</h5>
			    				<h6>Edge of your seat type and more think</h6>
							</div>
						</a>
					</div>
				</div>
								<div class="cat-item col-xs-12 col-sm-6 col-md-4">
					<div class="item-cat">
						<a href="product-category/romance/index.html">
							<div class="thumbnail-cat">
								<img src="wp-content/uploads/cate-romantic.png" alt="thumbnail">
							</div>
							<div class="info">
								<h5>Romance</h5>
			    				<h6>Fall in love with a book today</h6>
							</div>
						</a>
					</div>
				</div>
								<div class="cat-item col-xs-12 col-sm-6 col-md-4">
					<div class="item-cat">
						<a href="product-category/children/index.html">
							<div class="thumbnail-cat">
								<img src="wp-content/uploads/childrens.png" alt="thumbnail">
							</div>
							<div class="info">
								<h5>Childrens</h5>
			    				<h6>Amazing stories for kids</h6>
							</div>
						</a>
					</div>
				</div>
							</div>
		</div>
	</div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
           <div class="wpb_wrapper">
           <div class="heading-3 clearfix">
         <h2 style="font-size: 15px;color: #888a92;text-align: left;font-family:Voces;font-weight:400;font-style:normal" class="heading">Mes abonnements</h2>
      <div class="wrap-link"><a href="#" target="_self"><i class="zmdi zmdi-chevron-right"></i>
      </a></div></div></div></div></div></div>
    <div class="vc_empty_space"   style="height: 12px" ><span class="vc_empty_space_inner"></span></div>

    		<div class="cms-grid-wraper grid-2 extend-space" id="cms-grid-2">
    			 

			    <div class="row cms-grid">
                    <?php
                    if(isset($_SESSION['id']))
                    {
                        $aff=$auteur->AfficherMesAbonnments($_SESSION['id']);
                        foreach ($aff as $a) {
                            ?>
                            <div class="cms-grid-item col-lg-2.4 col-md-4 col-sm-6 col-xs-12 new-col-lg-5"  data-groups='["all","category-business","category-home-garden"]'>
                                <div class="cms-grid-media" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #332c28;" onmouseover="this.style.boxShadow ='0 0 20px 0 #332c28';" onmouseout="this.style.boxShadow ='0 0 15px -2px #332c28';" ><a href="shop/radical-gardening-politics-idealism-rebellion-in-the-garden/index.html"><img width="330" height="500" src="wp-content/uploads/<?php echo $a['IMAGE']; ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" /></a></div>
                                <div class="info-product">
                                    <a class="product-title" href="shop/radical-gardening-politics-idealism-rebellion-in-the-garden/index.html"><?php echo $a['NOM']; ?> </a>
                                    <p class="product-author">par: <?php echo $a['AUTHOR']; ?></p>
                                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span><?php echo $a['PRIX']; ?></span></span>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
			            			    </div>

			    			</div>

    	<div class="cms-button-wrapper text-center " id="cms-button">

    <a class="text-center" target="_self" href="#" 
    style="transition: all 0.5s ease 0s ; background: #ffffff; color: #7e5bef; border: 1px solid #7e5bef; border-radius:6px; width:155px;" onmouseout="this.style.color='#7e5bef';this.style.background='#ffffff';this.style.borderColor='#7e5bef';" onmouseover="this.style.background='#7e5bef';this.style.color='#ffffff';this.style.borderColor='#7e5bef';">
        Voir plus    </a>
</div>
</div></div></div></div><div class="vc_row-full-width"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1504086144605 vc_row-has-fill row-gradient-color">
	<div class="gradient-color" 
		style="
			height: 100%;
		    background: #6b4dcc;   
		    background: -webkit-linear-gradient(#6b4dcc , #523bc9);
		    background: -o-linear-gradient(#6b4dcc, #523bc9);
		    background: -moz-linear-gradient(#6b4dcc, #523bc9);
		    background: linear-gradient(#6b4dcc , #523bc9);
		    opacity: 1;
		">
	</div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1505871144817"><div class="wpb_wrapper"><div class="wrap-cms-popuplar-book">
    <div class="row">
        <div class="most-popular-info col-xs-12 col-md-4 col-lg-3">
            <p class="title-1">our</p>
            <p class="title-2">TOP<span>8</span></p>
            <p class="title-3">Most popular books</p>
            <a href="#">Voir plus</a>
        </div>
        <div class="most-popular-contents col-xs-12 col-md-8 col-lg-9">
            <div id="most-popular" class="owl-carousel owl-theme">
                                    <div class="item-popuplar">
                        <div class="thumbnal-popuplar" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #308ec7;" onmouseover="this.style.boxShadow ='0 0 20px 0 #308ec7';" onmouseout="this.style.boxShadow ='0 0 15px -2px #308ec7';" >
                            <a href="shop/bash-and-lucy-fetch-confidence/index.html">
                            <img width="330" height="500" src="wp-content/uploads/bash_and_lucy-2.jpg" class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image" alt="" />                            </a>
                        </div>
                        <div class="content-popuplar">
                            <a class="popular-title"
                               href="shop/bash-and-lucy-fetch-confidence/index.html">Bash and Lucy Fetch Confidence</a>
                            <div class="popular-author">
                                by Lisa &amp; Michael Cohn                            </div>
                        </div>
                    </div>
                                        <div class="item-popuplar">
                        <div class="thumbnal-popuplar" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #4f4387;" onmouseover="this.style.boxShadow ='0 0 20px 0 #4f4387';" onmouseout="this.style.boxShadow ='0 0 15px -2px #4f4387';" >
                            <a href="shop/the-world-of-abstract-art/index.html">
                            <img width="299" height="455" src="wp-content/uploads/the_world.jpg" class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image" alt="" />                            </a>
                        </div>
                        <div class="content-popuplar">
                            <a class="popular-title"
                               href="shop/the-world-of-abstract-art/index.html">The World of Abstract Art</a>
                            <div class="popular-author">
                                by Emily Robbins &amp; J.D Hayes                            </div>
                        </div>
                    </div>
                                        <div class="item-popuplar">
                        <div class="thumbnal-popuplar" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #00576c;" onmouseover="this.style.boxShadow ='0 0 20px 0 #00576c';" onmouseout="this.style.boxShadow ='0 0 15px -2px #00576c';" >
                            <a href="shop/boring-girls-a-novel/index.html">
                            <img width="330" height="500" src="wp-content/uploads/boring_girls_a_novel.jpg" class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image" alt="" />                            </a>
                        </div>
                        <div class="content-popuplar">
                            <a class="popular-title"
                               href="shop/boring-girls-a-novel/index.html">Boring Girls, A Novel</a>
                            <div class="popular-author">
                                by Sara Taylor                            </div>
                        </div>
                    </div>
                                        <div class="item-popuplar">
                        <div class="thumbnal-popuplar" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #0075bd;" onmouseover="this.style.boxShadow ='0 0 20px 0 #0075bd';" onmouseout="this.style.boxShadow ='0 0 15px -2px #0075bd';" >
                            <a href="shop/be-well-be/index.html">
                            <img width="330" height="500" src="wp-content/uploads/be_well_bee.jpg" class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image" alt="" />                            </a>
                        </div>
                        <div class="content-popuplar">
                            <a class="popular-title"
                               href="shop/be-well-be/index.html">Be Well Be</a>
                            <div class="popular-author">
                                by Cabe Lindsay                            </div>
                        </div>
                    </div>
                                        <div class="item-popuplar">
                        <div class="thumbnal-popuplar" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #5a5b99;" onmouseover="this.style.boxShadow ='0 0 20px 0 #5a5b99';" onmouseout="this.style.boxShadow ='0 0 15px -2px #5a5b99';" >
                            <a href="shop/nightshade/index.html">
                            <img width="330" height="500" src="wp-content/uploads/nightshade.jpg" class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image" alt="" />                            </a>
                        </div>
                        <div class="content-popuplar">
                            <a class="popular-title"
                               href="shop/nightshade/index.html">Nightshade</a>
                            <div class="popular-author">
                                by Andrea Cremer                            </div>
                        </div>
                    </div>
                                        <div class="item-popuplar">
                        <div class="thumbnal-popuplar" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #f0e0cd;" onmouseover="this.style.boxShadow ='0 0 20px 0 #f0e0cd';" onmouseout="this.style.boxShadow ='0 0 15px -2px #f0e0cd';" >
                            <a href="shop/carbonel/index.html">
                            <img width="330" height="500" src="wp-content/uploads/carbonel.jpg" class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image" alt="" />                            </a>
                        </div>
                        <div class="content-popuplar">
                            <a class="popular-title"
                               href="shop/carbonel/index.html">Carbonel</a>
                            <div class="popular-author">
                                by Barbara Sleigh                            </div>
                        </div>
                    </div>
                                        <div class="item-popuplar">
                        <div class="thumbnal-popuplar" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #b4aa9e;" onmouseover="this.style.boxShadow ='0 0 20px 0 #b4aa9e';" onmouseout="this.style.boxShadow ='0 0 15px -2px #b4aa9e';" >
                            <a href="shop/adipiscing-elit/index.html">
                            <img width="300" height="455" src="wp-content/uploads/book-5.jpg" class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image" alt="" />                            </a>
                        </div>
                        <div class="content-popuplar">
                            <a class="popular-title"
                               href="shop/adipiscing-elit/index.html">By The Time You Read This, I&#039;ll Be Dead</a>
                            <div class="popular-author">
                                by Julie Anne Peters                            </div>
                        </div>
                    </div>
                                        <div class="item-popuplar">
                        <div class="thumbnal-popuplar" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #ededa6;" onmouseover="this.style.boxShadow ='0 0 20px 0 #ededa6';" onmouseout="this.style.boxShadow ='0 0 15px -2px #ededa6';" >
                            <a href="shop/the-happy-lemon/index.html">
                            <img width="330" height="500" src="wp-content/uploads/the_happy_lemon.jpg" class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image" alt="" />                            </a>
                        </div>
                        <div class="content-popuplar">
                            <a class="popular-title"
                               href="shop/the-happy-lemon/index.html">The Happy Lemon</a>
                            <div class="popular-author">
                                by Kurt Yamashita                            </div>
                        </div>
                    </div>
                                </div>
        </div>
    </div>
</div>

</div></div></div></div><div class="vc_row-full-width"></div>

	</div><!-- .entry-content -->
	<footer class="edit-page">

				</footer><!-- .entry-meta -->
</article><!-- #post -->

            </main><!-- .site-main -->
        </div>
    </div>
</div><!-- .content-area -->

    </div><!-- .site-content -->
    <footer class="site-footer">
        <div id="footer-top">
            <div class="container">
                <div class="row">

                                    <div class="wrap-about col-md-3 col-sm-12 col-xs-12 col-lg-4">
                        <div class="footer-about">
        <a href="index.html"><img class="logo-footer"
                                                             src="wp-content/themes/book-junky/assets/images/footer-logo.png"
                                                             alt="Book Junky"></a>
        <p>Librairie universitaire générale spécialisée en vente de livres culturels, scientifiques et techniques... en plus des fournitures scolaires et bureautiques</p>
                    <ul>
                                    <li><a href="#"><i
                                    class="zmdi zmdi-facebook-box"></i></a></li>
                                                    <li><a href="#"><img
                                    src="wp-content/themes/book-junky/assets/images/instagram.png"
                                    alt="Instagram"></a></li>
                                                    <li><a href="#"><i
                                    class="zmdi zmdi-twitter-box"></i></a></li>
                                                                                                                            </ul>
                </div>
                    </div>
                <div class="col-md-3 col-sm-12 col-xs-12"><aside id="recent_views_book_2-2" class="widget-footer widget_recent_views_book_2"><h3 class="wg-ft-title">Cette Semaine</h3>        <div class="recent-review-2">
                            <div class="recent-review-item clearfix">
                
                    <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #000000">
                        <a href="shop/freefall/index.html">
                            <img src="wp-content/uploads/freefall.jpg"
                             alt="Thumbnail">
                         </a>
                    </div>
                    <div class="contents">

                        <a href="shop/freefall/index.html" class="title">

                           Freefall                        </a>
                        <div class="author-product">
                            by Peter Cawdron                        </div>

                        <div class="woocommerce">
                <div class="woocommerce-product-rating">
                <span class="star-rating ">
                    <span style="width:0%"></span>
                </span></div>
                </div>                    </div>
                </div>
                                <div class="recent-review-item clearfix">
                
                    <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #f5f5f5">
                        <a href="shop/darknet/index.html">
                            <img src="wp-content/uploads/darknet.jpg"
                             alt="Thumbnail">
                         </a>
                    </div>
                    <div class="contents">

                        <a href="shop/darknet/index.html" class="title">

                           Darknet                        </a>
                        <div class="author-product">
                            by Matthew Mather                        </div>

                        <div class="woocommerce"><div class="woocommerce-product-rating"><span class="star-rating" style="color:;"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></span></div></div>                    </div>
                </div>
                                <div class="recent-review-item clearfix">
                
                    <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #ededa6">
                        <a href="shop/the-happy-lemon/index.html">
                            <img src="wp-content/uploads/the_happy_lemon.jpg"
                             alt="Thumbnail">
                         </a>
                    </div>
                    <div class="contents">

                        <a href="shop/the-happy-lemon/index.html" class="title">

                           The Happy Lemon                        </a>
                        <div class="author-product">
                            by Kurt Yamashita                        </div>

                        <div class="woocommerce"><div class="woocommerce-product-rating"><span class="star-rating" style="color:;"><span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">2</span> customer ratings</span></span></div></div>                    </div>
                </div>
                        </div>
        </aside></div><div class="col-md-3 col-sm-12 col-xs-12"><aside id="custom_html-2" class="widget_text widget-footer widget_custom_html"><h3 class="wg-ft-title">GENRES</h3><div class="textwidget custom-html-widget"><ul>
<li><a href="#">Action</a></li>
<li><a href="#">Comedy</a></li>
<li><a href="#">Drama</a></li>
<li><a href="#">E-Books</a></li>
<li><a href="#">Horror</a></li>
<li><a href="#">Kids</a></li>
<li><a href="#">Romantic Comedy</a></li>
<li><a href="#">Sci-Fi</a></li>
</ul></div></aside></div><div class="col-md-3 col-sm-12 col-xs-12 col-lg-2"><aside id="custom_html-3" class="widget_text widget-footer widget_custom_html"><h3 class="wg-ft-title">CONTACT</h3><div class="textwidget custom-html-widget"><ul>
    <li>Librairie l'Avenir Culturel - L.A.C,</li>
    <li>89, Av de l'UMA,</li>
    <li>Ariana, La Soukra</li>
    <li>&nbsp;</li>
    <li>Appeler: <a href="tel:07724100110">+216 70 682 999</a></li>
    <li><a href="mailto:email@bookjunky.co.uk"></a></li>
</ul></div></aside></div>
                </div>
            </div>
        </div><!-- #footer-top -->

        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                <div class="col-xs-12">

                    Copyright © 2018 <a href="http://cmssuperheroes.com/">CMSSuperheroes. </a>All Right Reserved                </div>
                </div>
            </div>
        </div><!-- #footer-bottom -->

    </footer><!-- .site-footer -->

</div><!-- .site -->

</div>        <div class="book-junky-back-to-top"><i class="fa fa-angle-double-up"></i></div>    <div id="cover_open_modal" class="cover_modal">

        <div class="login_dialog">

            <a class="boxclose"></a>

            <form class="login_form" id="login_form"  method="post" action="http://localhost/AvenirCulturel/Core/LoginCore.php" onsubmit="return Verif( <?php $_SESSION['Error_login']; ?>) ">

                <h2>Vous avez déjà un compte ?</h2>
                <input type="text" class="alert_status"  readonly>
                <label for="u"> Nom d'utilisateur </label><span id="u_s"></span>
                <input type="text" name="login_user" id="u"  onmouseout="Verif_N_utilisateur()"/>
                <label for="pass_user"> Mot de passe </label><span id="m_s"></span>
                <input type="password" name="pass_user" id="pass_user" onmouseout="Verif_mot_de_passe()" />
                <label for="rememberme" id="lb_rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  />Se rappeler </label>

                <input type="submit" name="login_submit" value="Se connecter" class="login_submit" />
                <br>

                <center><a href="<?php echo $url ?>"> J'ai un compte google </a></center>
                <script src="Verif/Verif_connexion.js"></script>
                <div class="social-login">

                </div>

            </form>
            <form class="register_form" id="register_form"
                  method="post"  >
                <h2>Inscription</h2>
                <input type="text" class="alert_status" readonly>
                <label for="register_user">Nom d'utilisateur</label><span id="register_user_span">    </span>
                <input type="text" name="register_user" id="register_user" value=""  >
                <label for="register_email">E-mail</label><span id="email_span" ></span>
                <input type="email" name="register_email" id="register_email" value=""   >
                <label for="nom">Nom</label><span id="nom_span"></span>
                <input style="width: 150px" type="text"  id="nom" name="nom">&nbsp;&nbsp; <label for="prenom">Prenom</label><span id="prenom_span"></span> <input style="width: 150px" type="text"  id="prenom" name="prenom" ><br>
                <label for="adresse">Adresse</label><span id="adresse_span"></span>
                <input type="text"  id="adresse" name="adresse" >
                <label for="tel">Tel</label><span id="tel_span"></span>
                <input type="text" style="width: 100px"  id="tel" name="tel" >&nbsp;&nbsp;<label for="datenaiss">Date Naiss.</label><span id="datenaiss_span"></span>&nbsp;&nbsp;&nbsp;<input style="width: 150px" type="date" style="width: 200px"  id="datenaiss" name="datenaiss" >
                <label for="MDP">Mot de passe</label><span id="mdp_span"></span>
                <input type="password"  id="MDP"name="mot_de_passe" >
                <label for="MDP_confirm">Confirmer mot de passe</label><span id="ee2"></span>
                <input type="password" id="MDP_confirm" name="mot_de_passe_confirm" ">
                <input type="submit" name="register_submit" id="register_submit"  value="Créer un compte"  />
                <script src="Verif/Verif_inscri.js"></script>
            </form>

            <form class="lost_pwd_form"  method="post">
                <h2>Mot de passe oublié ?</h2>
                <input type="text" class="alert_status" readonly>
                <label for="nom_utilisateur">Nom d'utilisateur</label><span id="span1"></span>
                <input type="text" name="nom_utilisateur" id="nom_utilisateur">
                <label for="adresse_mail">Adresse mail</label><span id="span2"></span>
                <input type="text" name="adresse_mail" id="adresse_mail">
                <input type="submit" name="lost_pwd_submit" id="lost_pwd_submit" value="Changer mot de passe">
                <script src="Verif/Verif_oublie.js"></script>
            </form>

            <div class="pass_and_register" id="pass_and_register">

                <a class="go_to_register_link" href="#" style="">Inscription</a>
                <span style="color: black"> </span>
                <a class="go_to_lostpassword_link" href="#">Mot de passe oublié ?</a>
                <span style="color: black"></span>
                <a class="back_login" href="#">Retour</a>

            </div>


        </div>
    </div>
    <script src='../../../www.google.com/recaptcha/api.js'></script>
    <link rel='stylesheet' id='font-awesome-css'  href='wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='owl-carousel-css'  href='wp-content/plugins/cmssuperheroesv2/assets/css/owl.carousel.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='vc_google_fonts_vocesregular-css'  href='http://fonts.googleapis.com/css?family=Voces%3Aregular&amp;ver=4.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelement-css'  href='wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='wp-includes/js/mediaelement/wp-mediaelement.min.css' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var flexFavorites = {"ajax":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","action":"like_post"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/flex-favorites/assets/js/flex-favorites.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments_ef2fb5d85d4ddcc5d0939ad45105c3a3"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>
<script type='text/javascript' src='wp-content/themes/book-junky/assets/js/main.js'></script>
<script type='text/javascript' src='wp-content/themes/book-junky/assets/js/jquery-ui.js'></script>
<script type='text/javascript' src='wp-content/themes/book-junky/assets/js/jQAllRangeSliders-min.js'></script>
<script type='text/javascript' src='wp-content/themes/book-junky/assets/js/book-junky.js'></script>
<script type='text/javascript' src='wp-content/themes/book-junky/assets/js/menu.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var nectarLove = {"ajaxurl":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","postID":"271","rooturl":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/book-junky/assets/js/post_favorite.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var bj_handle = {"ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/book-junky/assets/js/bj-handle.js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/cmssuperheroesv2/assets/js/owl.carousel.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var cmscarousel = {"cms-carousel":{"margin":"30","loop":"true","mouseDrag":"true","nav":"false","dots":"true","autoplay":"false","autoplayTimeout":5000,"smartSpeed":1000,"autoplayHoverPause":"true","navText":["<i class=\"fa fa-arrow-left\"><\/i>","<i class=\"fa fa-arrow-right\"><\/i>"],"dotscontainer":"cms-carousel .cms-dots","responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":2},"1200":{"items":3}}}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/cmssuperheroesv2/assets/js/owl.carousel.cms.js'></script>
<script type='text/javascript'>
var mejsL10n = {"language":"en","strings":{"mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"Turn off Fullscreen","mejs.fullscreen-on":"Go Fullscreen","mejs.download-video":"Download Video","mejs.fullscreen":"Fullscreen","mejs.time-jump-forward":["Jump forward 1 second","Jump forward %1 seconds"],"mejs.loop":"Toggle Loop","mejs.play":"Play","mejs.pause":"Pause","mejs.close":"Close","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.time-skip-back":["Skip back 1 second","Skip back %1 seconds"],"mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.mute-toggle":"Mute Toggle","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.ad-skip":"Skip ad","mejs.ad-skip-info":["Skip in 1 second","Skip in %1 seconds"],"mejs.source-chooser":"Source Chooser","mejs.stop":"Stop","mejs.speed-rate":"Speed Rate","mejs.live-broadcast":"Live Broadcast","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>
<script type='text/javascript' src='wp-includes/js/mediaelement/mediaelement-and-player.min.js'></script>
<script type='text/javascript' src='wp-includes/js/mediaelement/mediaelement-migrate.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/themeforest\/bookjunky\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/mediaelement/wp-mediaelement.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/cmssuperheroesv2/assets/js/cmsgrid.pagination.js'></script>
<script type='text/javascript' src='wp-content/plugins/cmssuperheroesv2/assets/js/modernizr.min.js'></script>
<script type='text/javascript' src='wp-includes/js/imagesloaded.min.js'></script>
<script type='text/javascript' src='wp-content/plugins/cmssuperheroesv2/assets/js/jquery.shuffle.js'></script>
<script type='text/javascript' src='wp-content/themes/book-junky/assets/js/jquery.shuffle.cms.js'></script>
<script type='text/javascript' src='wp-content/themes/book-junky/assets/js/owl.carousel.min.js'></script>

</body>

<!-- Mirrored from demo.cmssuperheroes.com/themeforest/bookjunky/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 22:25:30 GMT -->
</html>
<!-- Dynamic page generated in 0.976 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-02-03 22:20:27 -->
<!-- super cache -->