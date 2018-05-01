<?php
include_once 'c:/wamp64/www/AvenirCulturel/Core/LoginCore.php';
include_once "c:/wamp64/www/AvenirCulturel/Core/VuCore.php";
include_once 'c:/wamp64/www/AvenirCulturel/Core/LivreCore.php';
include_once 'c:/wamp64/www/AvenirCulturel/Core/AuteurCore.php';



include_once 'c:/wamp64/www/AvenirCulturel/Core/bookcore.php';
include_once 'c:/wamp64/www/AvenirCulturel/Core/auteurcore.php';


include_once 'c:/wamp64/www/AvenirCulturel/Core/LoginCore.php';
include_once 'c:/wamp64/www/AvenirCulturel/Entity/Panier.php';
$panier=new Panier();


$book = New Bookcore();
$auteur = New Auteurcore();


$bookdonnes = $book->afficher_book_nom();
$bookimage = $book->afficher_book_img();
$bookid = $book->afficher_book_id();



require_once 'c:/wamp64/www/AvenirCulturel/Core/googlelogin/config.php';
$url=$gClient->createAuthUrl();
?>




<style type="text/css">
    

    .autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

</style>






<!DOCTYPE html>

<html lang="en-US">
<?php
include_once 'c:/wamp64/www/AvenirCulturel/Core/LoginCore.php';
include_once 'c:/wamp64/www/AvenirCulturel/Entity/Panier.php';
$panier=new Panier();


include_once "C:/wamp64/www/AvenirCulturel/Core/auteurcore.php";

include_once "../../../core/commentaireCore.php";
include_once "../../../config.php";
include_once "../../../core/bookcore.php";
include_once "../../../core/auteurcore.php";



$book = New Bookcore();
$auteur = New Auteurcore();

$book->update_nbr_visist($_GET['Livre']);





$commentaire = New commentaireCore();





//$auteur = New Auteurcore();





if(session_status()==PHP_SESSION_NONE)
{
    session_start();
}

include_once "../../../Config.php";


 function Existe($livre,$compte)
{
    $c=Connexion::getConnexion();
    $sql="select * from bibliotheque WHERE ID_LIVRE='$livre' and ID_COMPTE='$compte' ";
    try{
        $liste=$c->query($sql);
        if( $liste->rowCount()!=0)
        {
            return true;
        }
    }catch (PDOException $e)
    {
        die( "Echec de connexion".$e->getMessage());
    }
}
function existeRate($compte,$livre)
{
    $c=Connexion::getConnexion();
    $sql="select * from rating WHERE ID_COMPTE='$compte' AND ID_LIVRE='$livre' ";
    try{
        $liste=$c->query($sql);
        if( $liste->rowCount()!=0)
        {
            return true;
        }
    }catch (PDOException $e)
    {
        die( "Echec de connexion".$e->getMessage());
    }
}
function getONE($atribute,$condition)
{
    $sql=Connexion::getConnexion()->prepare("select $atribute from book WHERE ID=$condition ");
    $sql->execute();
    while($result=$sql->fetch(PDO::FETCH_ASSOC))
    {
        return $result[$atribute];
    }
}

function getRate($ID_C,$ID_L)
{
    $sql=Connexion::getConnexion()->prepare("select RATE from rating WHERE ID_COMPTE='$ID_C' AND ID_LIVRE='$ID_L' ");
    $sql->execute();
    while($result=$sql->fetch(PDO::FETCH_ASSOC))
    {
        return $result['RATE'];
    }
}
function countLivre($ID_C)
{
    $c=Connexion::getConnexion();
    $sql="select * from bibliotheque WHERE ID_COMPTE='$ID_C'";
    $liste=$c->query($sql);
    return $liste->rowCount();
}
?>
<!-- Mirrored from demo.cmssuperheroes.com/themeforest/bookjunky/shop/shattered/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 22:30:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1, width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="../../xmlrpc.php" />
<link rel="shortcut icon" type="image/x-icon" href="../../wp-content/uploads/fav-1.png" />
<title><?php echo getONE('NOM',$_GET['Livre']); ?> &#8211; L.A.C</title>
<link rel='dns-prefetch' href='http://ajax.aspnetcdn.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Book Junky &raquo; Feed" href="../../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Book Junky &raquo; Comments Feed" href="../../comments/feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Book Junky &raquo; Shattered Comments Feed" href="feed/index.html" />
    <link href="rating.css" rel="stylesheet" type="text/css">


    <script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-includes\/js\/wp-emoji-release.min.js"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56794,8205,9794,65039],[55358,56794,8203,9794,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='cms-plugin-stylesheet-css'  href='../../wp-content/plugins/cmssuperheroesv2/assets/css/cms-style.css' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='../../wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='widget_style-css'  href='../../wp-content/plugins/csh-login/assets/css/default.css' type='text/css' media='all' />
<link rel='stylesheet' id='layout1_style-css'  href='../../wp-content/plugins/csh-login/assets/css/layout1.css' type='text/css' media='all' />
<link rel='stylesheet' id='flex-favorites-style.css-css'  href='../../wp-content/plugins/flex-favorites/assets/css/flex-favorites-style.css' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='../../wp-content/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='woocommerce-layout-css'  href='../../wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='../../wp-content/plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='../../wp-content/themes/book-junky/assets/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-style-css'  href='../../wp-content/themes/book-junky/assets/css/owl.carousel.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='book-junky-font-css'  href='../../wp-content/themes/book-junky/assets/css/font.css' type='text/css' media='all' />
<link rel='stylesheet' id='iThing.css-css'  href='../../wp-content/themes/book-junky/assets/css/iThing.css' type='text/css' media='all' />
<link rel='stylesheet' id='book-junky-style-css'  href='../../wp-content/themes/book-junky/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='book-junky-static-css'  href='../../wp-content/themes/book-junky/assets/css/static.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-dynamic-css'  href='../../wp-content/themes/book-junky/assets/css/custom-dynamic.css' type='text/css' media='all' />
<link rel='stylesheet' id='ynamic-css'  href='../../wp-content/themes/book-junky/assets/css/scrollablemenu.css' type='text/css' media='all' />
    <link href="Rating/rating.css" rel="stylesheet" type="text/css">

    <script defer src="Rating/fontawesome-all.js"></script>
    <style id='custom-dynamic-inline-css' type='text/css'>
.site-content{padding-top:;}.site-content{padding-bottom:;}.header-3 .main-logo-3{max-height:200px;}
</style>
<script type='text/javascript' src='../../wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='../../../../../ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script defer src="fontawesome-all.js"></script>
    <script type='text/javascript'>
/* <![CDATA[ */
var jsPassData = {"ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","display_labels":"Labels","type_modal":"Popup","get_login_redirect":"Current Page","login_redirect":"","register_redirect":"","genrated_pass":""};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/csh-login/assets/js/widget-script.js'></script>
<script type='text/javascript' src='../../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='../../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/shop-cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script>
<script type='text/javascript' src='../../wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js'></script>
<script type='text/javascript' src='../../wp-content/themes/book-junky/assets/js/bootstrap.min.js'></script>
    <script src="Rating/rating.js"></script>

    <link rel='https://api.w.org/' href='../../wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.2" />
<meta name="generator" content="WooCommerce 3.2.6" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='../../index42a9.html?p=388' />
<link rel="alternate" type="application/json+oembed" href="../../wp-json/oembed/1.0/embedb564.json?url=http%3A%2F%2Fdemo.cmssuperheroes.com%2Fthemeforest%2Fbookjunky%2Fshop%2Fshattered%2F" />
<link rel="alternate" type="text/xml+oembed" href="../../wp-json/oembed/1.0/embedb164?url=http%3A%2F%2Fdemo.cmssuperheroes.com%2Fthemeforest%2Fbookjunky%2Fshop%2Fshattered%2F&amp;format=xml" />
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript">function setREVStartSize(e){
				try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;					
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
				}catch(d){console.log("Failure at Presize of Slider:"+d)}
			};</script>
<style type="text/css" title="dynamic-css" class="options-output">body .page-title h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body .page-title h1,{opacity: 0;}.ie.wf-loading body .page-title h1,{visibility: hidden;}body{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,{opacity: 0;}.ie.wf-loading body,{visibility: hidden;}h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h1,{opacity: 0;}.ie.wf-loading h1,{visibility: hidden;}h2{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h2,{opacity: 0;}.ie.wf-loading h2,{visibility: hidden;}h3{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h3,{opacity: 0;}.ie.wf-loading h3,{visibility: hidden;}h4{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h4,{opacity: 0;}.ie.wf-loading h4,{visibility: hidden;}h5{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h5,{opacity: 0;}.ie.wf-loading h5,{visibility: hidden;}h6{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h6,{opacity: 0;}.ie.wf-loading h6,{visibility: hidden;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="product-template-default single single-product postid-388 woocommerce woocommerce-page body-boxed wpb-js-composer js-comp-ver-5.2.1 vc_responsive">
<script type='text/javascript' src='Rating/Get_rate_ajx.js'></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div class="wrap-boxed"><div id="page" class="hfeed site">
	<header id="masthead" class="site-header">
		<div id="cshero-header" class="header-3">

	        <div class="header-top">
            <div class="container">
                <div class="row">
                  <div class="col-xs-12 col-md-6 top-left-3">
                        <a class="go_to_login_link" href="" id='ins_iden'>S'inscrire / S'identifier</a>

                        <?php
                        if (isset($_GET['Inscription']))
                        {
                        ?>
                            <div id="bienvenue"  >
                                <p id="textM" style="text-align: right; color: #1c7430; font-size: 29px">Bienvenue a notre librairie :)</p>
                            </div>


                            <script>
                                $(document).ready(function(){
                                    var options = {};
                                    $( "#bienvenue" ).effect( "slide", options, 1800, callback );
                                    function callback() {
                                        setTimeout(function() {
                                            $( "#bienvenue" ).removeAttr( "style" ).hide().fadeIn();
                                        }, 1000 );
                                    };
                                });


                            </script>
                    <?php
                    }
                    ?>

                        <?php
                        if(isset($_GET['Error']))
                        {
                            ?>
                            <div id="error"  >
                                <p id="textM" style="text-align: right; color:darkred;  font-size: 29px">Compte introuvable :(</p>
                            </div>
                            <script>

                                $(document).ready(function(){
                                    var options = {};
                                    $( "#error" ).effect( "shake", options, 500, callback );
                                    function callback() {
                                        setTimeout(function() {
                                            $( "#error" ).removeAttr( "style" ).hide().fadeIn();
                                        }, 1000 );
                                    };
                                });

                            </script>

                            <?php
                        }
                        ?>


                       



                        <?php
                        if (isset($_GET['Mail']))
                        {
                            ?>
                            <a id="bienV" style="font-size: 13px;"> <?php echo 'Un code sera envoyé a votre mail veuillez patientez .. :) '; ?> </a>
                            <script>
                                var w=document.getElementById('bienV');
                                setTimeout((function(){w.innerHTML=''; location.assign('http://localhost/AvenirCulturel/Views/index.php');  }),4000);
                            </script>
                            <?php
                        }
                        ?>


                        <?php
                        if (isset($_SESSION['id']))
                        {

                        
                        ?>
                        <center>
                        <div class="col-md-3">
                            <img style="width: 20%;" src="<?php if(isset($_SESSION['picture'])) echo $_SESSION['picture'] ?>">
                        </div>
                        </center>
                        <?php

                        }
                        ?>

                        <?php
                            if(isset($_SESSION['id'])) {
                            ?>
                            <a href="#">FAQ</a><a href="#">Contact</a>
                            <?php

                        }
                        ?>

                             <?php

            if (!empty($_SESSION['NOM']))
            {


                if ($_SESSION['NOM']=="ali") {
                   
echo "   <a href='http://localhost/AvenirCulturel/Views/livreur/livreur1.php'>livreur</a>";


                }
            
    
        }


            ?>


                        <a >
                            <?php
                                if(!isset($_SESSION['id']))
                                {
                                }else
                                {
                                    if($_SESSION['id']=='admin')
                                    {
         echo "<script> location.assign('http://localhost/AvenirCulturel/Views/ADMIN/index.php'); </script>";
                                    }
                                    else
                                    {
         echo "<script>var t=document.getElementById('ins_iden'); t.innerHTML=''; </script>";
         echo"<a href='http://localhost/AvenirCulturel/Core/DeconnexionCore.php'>Se Deconnecter</a>";
                                    }
                        ?>
<a href="http://localhost/AvenirCulturel/Views/user-profile/book-shelf/DonnesProfile.php">
    <strong> <?php echo $_SESSION['id']; ?> </strong>
</a>
                                  <?php
                                }
                            ?>
                        </a>
                    </div>
                    <p id="FQQ"> </p>
                     <div class="col-xs-12 col-md-6 top-right-3">

                        <div class="wrap-book-shelf clearfix">
                            <img src="http://localhost/AvenirCulturel/Views/wp-content/themes/book-junky/assets/images/icon-1.png"
                                 alt="icon 1">
                            <div class="content <?php if(!isset($_SESSION['id'])) echo 'go_to_login_link' ?>">
                            <a href="http://localhost/AvenirCulturel/Views/user-profile/book-shelf/index.php"
                            alt="My Account">
                                                                        <h5>Bibliothèque</h5>

                                                                    </a>
                                                            <span class="aj-count">
                                     <?php if(isset($_SESSION['id'])) echo countLivre($_SESSION['id']); ?>  livre
                                                                            </span>
                            </div>
                        </div>

                        <div class="wrap-your-basket clearfix">
                            <img src="http://localhost/AvenirCulturel/Views/wp-content/themes/book-junky/assets/images/icon-2.png"
                                 alt="icon 2">
                            <div class="content <?php if(!isset($_SESSION['id'])) echo 'go_to_login_link' ?>">
                                <h5>
                                                                        <a href="../../shop-cart/index.php">

                                        Mon Panier                                                                            </a>
                                                                </h5>
                                <span><span class="woocommerce-Price-currencySymbol">&pound;</span>
                                <span id="totale"><?= number_format($panier->total(),2); ?> </span>                     </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
            <br>
          <div class="wrap-middler">
      <div class="container">

          <div class="row">

              <div class="col-xs-12 col-md-4 col-lg-3">

                  <div class="main-logo-3"><a href="http://localhost/AvenirCulturel/Views/index.php"><img alt="Book Junky" src="../../wp-content/themes/book-junky/assets/images/logo-2.png"></a></div>
                  <a href="http://localhost/AvenirCulturel/Views/index.php" class="menu"><i class="fa fa-bars"></i> Menu</a>
              </div>

              <div class="col-xs-12 col-md-8 col-lg-9">
                  
               <form class="searchform clearfix"  autocomplete="off">
            <div class="wrap-search clearfix">

              <input type="text" class="form-search" id="search_auto" name="s" value="" placeholder="Search for the perfect book..." class="searchform">
                            
                
            </div>

             <button type="submit" class="search-submit">Go</button>
            <input type="hidden" name="post_type" value="product" />
          </form>
                    
                    <script>
function autocomplete(inp, arr,img,id) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          b.innerHTML += "<img src='../../wp-content/uploads/"+ img[i] + "'  width='50px' height='100px'>";
          /*insert a input field that will hold the current array item's value:*/
          
          b.innerHTML += "<input type='hidden' value='" + id[i] + "'>";
        

          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
             // inp.value = this.getElementsByTagName("input")[0].value;
              

                                window.location.href = 'http://localhost/AvenirCulturel/Views/shop/Livres/index?Livre='+this.getElementsByTagName("input")[0].value+' ';

              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        
        e.preventDefault();

        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
      });
}

/*An array containing all the country names in the world:*/

var js_array = [<?php echo '"'.implode('","', $bookdonnes).'"' ?>];
var js_array_img = [<?php echo '"'.implode('","', $bookimage).'"' ?>];
var js_array_id = [<?php echo '"'.implode('","', $bookid).'"' ?>];


/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("search_auto"),js_array,js_array_img,js_array_id);
</script>


	            </div><!-- #site-logo -->
	        </div>
	    </div>
    </div>

   
 <div class="container">
      <div class="row">
        <div id="header-navigation" class="col-xs-12 cshero-main-header sticky-desktop">

                <nav id="site-navigation" class="main-navigation">

                    <div class="menu-primary-menu-container"><ul id="menu-primary-menu" class="nav-menu menu-main-menu"><li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-99" data-depth="0"><a href="http://localhost/AvenirCulturel/Views/index.php" class=""><span class="menu-title">Accueil </span></a></li>




<li id="menu-item-514" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-mega-menu no_group menu-item-514" data-depth="0"><a href="http://localhost/AvenirCulturel/Views/shop/index.php?s=&product_cat=&bj_meta__wc_average_rating=&min_price=0&max_price=100&sort=&orderby=menu_order" class=""><span class="menu-title">Catalogue</span></a>
<ul class='multicolumn columns4 drop_to_center sub-menu' style="width:800px;">
  <li id="menu-item-515" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children group menu-item-515" data-depth="1"><a href="#" class=""><span class="menu-title">Top des ventes</span></a>
  <ul class='   sub-menu' style="">
    <li id="menu-item-516" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-516" data-depth="2"><a href="#" class=""><span class="menu-title">les mieux notés</span></a></li>
    <li id="menu-item-517" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-517" data-depth="2"><a href="#" class=""><span class="menu-title">Meilleures Ventes</span></a></li>
    <li id="menu-item-518" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-518" data-depth="2"><a href="#" class=""><span class="menu-title">Top Promotions</span></a></li>
    <li id="menu-item-5188" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-5188" data-depth="2"><a href="#" class=""><span class="menu-title">Top auteurs</span></a></li>
    <li id="menu-item-51888" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-51888" data-depth="2"><a href="#" class=""><span class="menu-title">Top Catégories</span></a></li>
  </ul>
</li>
  <li id="menu-item-519" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children group menu-item-519" data-depth="1"><a href="#" class=""><span class="menu-title">Catégories</span></a>
  <ul class='   sub-menu' style="">
    <li id="menu-item-520" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-520" data-depth="2"><a href="#" class=""><span class="menu-title">Arts</span></a></li>
    <li id="menu-item-521" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-521" data-depth="2"><a href="#" class=""><span class="menu-title">Dictionnaires</span></a></li>
    <li id="menu-item-522" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-522" data-depth="2"><a href="#" class=""><span class="menu-title">Droit &amp; Sciences Politiques</span></a></li>
    <li id="menu-item-524" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-524" data-depth="2"><a href="#" class=""><span class="menu-title">Cuisine</span></a></li>
    <li id="menu-item-525" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-525" data-depth="2"><a href="#" class=""><span class="menu-title">Histoire &amp; Géographie</span></a></li>
    <li id="menu-item-526" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-526" data-depth="2"><a href="#" class=""><span class="menu-title">Informatique &amp; multimedia</span></a></li>
    <li id="menu-item-527" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-527" data-depth="2"><a href="#" class=""><span class="menu-title">Jeunesse</span></a></li>
    <li id="menu-item-529" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-529" data-depth="2"><a href="index.php?Category=CULTURE" class=""><span class="menu-title">Littérature &amp; Linguistique</span></a></li>
  </ul>
</li>
  <li id="menu-item-528" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children no-title group title menu-item-528" data-depth="1">
  <ul class='   sub-menu' style="">
    <li id="menu-item-530" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-530" data-depth="2"><a href="#" class=""><span class="menu-title">Loisirs</span></a></li>
    <li id="menu-item-531" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-531" data-depth="2"><a href="#" class=""><span class="menu-title">Religions &amp; Spiritualités</span></a></li>
    <li id="menu-item-532" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-532" data-depth="2"><a href="#" class=""><span class="menu-title">Romans</span></a></li>
    <li id="menu-item-533" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-533" data-depth="2"><a href="#" class=""><span class="menu-title">Scolaire &amp; pédagogie</span></a></li>
    <li id="menu-item-534" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-534" data-depth="2"><a href="#" class=""><span class="menu-title">Sciences Economiques &amp; Gestion</span></a></li>
    <li id="menu-item-535" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-535" data-depth="2"><a href="#" class=""><span class="menu-title">Sciences Humaines</span></a></li>
    <li id="menu-item-536" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-536" data-depth="2"><a href="#" class=""><span class="menu-title">Sciences Techniques &amp; High-Tech</span></a></li>
  </ul>
</li>
  <li id="menu-item-535" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children group menu-item-535" data-depth="1">
  <ul class='   sub-menu' style="">
    <li id="menu-item-537" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-537" data-depth="2"><li id="custom_html-5" class="widget_text widget widget_custom_html"><h5 class="wg-mega-menu-title">Coup de coeur</h5><div class="textwidget custom-html-widget"><a href="#"><img src="wp-content/uploads/mega-menu.png" alt="Featured Book"></a></div></li>
</li>
  </ul>
</li>
</ul>
</li>






<li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-99" data-depth="0"><a href="http://localhost/AvenirCulturel/Views/news/evenements.php" class=""><span class="menu-title">Événement</span>

</a></li>





<li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children no_group menu-item-107" data-depth="0"><a href="news/index.html" class=""><span class="menu-title">Forum</span></a>
<ul class='standar-dropdown standard autodrop_submenu sub-menu' style="width:200px;">
  <li id="menu-item-114" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-114" data-depth="1"><a href="news-grid/index.html" class=""><span class="menu-title">News Grid</span></a></li>
  <li id="menu-item-257" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-257" data-depth="1"><a href="news-review/index.html" class=""><span class="menu-title">News Review</span></a></li>
  <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-110" data-depth="1"><a href="news-fullwidth/index.html" class=""><span class="menu-title">News Fullwidth</span></a></li>
  <li id="menu-item-234" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-234" data-depth="1"><a href="news-right-sidebar/index.html" class=""><span class="menu-title">News Right Sidebar</span></a></li>
  <li id="menu-item-235" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-235" data-depth="1"><a href="news-left-sidebar/index.html" class=""><span class="menu-title">News Left Sidebar</span></a></li>
</ul>
</li>
<li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-99" data-depth="0"><a href="contact-us/index.html" class=""><span class="menu-title">Contact </span></a></li>
</ul></div>                </nav>
            </div>
      </div>
    </div>

</div><!-- #site-navigation -->


	</header><!-- #masthead -->
    <!-- #page-title -->



	<div id="content" class="site-content">






    <?php 






$donnees = $book->Get_Livre_id($_GET['Livre']);

$livre_category = $book->get_category_livre ($_GET['Livre']);


$nbr_comm = $commentaire->Nbr_Commentaire($_GET['Livre']);



$donnes_auteur = $auteur->Recupere_auteur_id ($donnees["AUTHOR"]);





 ?>




                <div class="page-title-product_2" style="background-color: <?php echo $donnees['couleur']; ?>;">

        <div class="container">

            <div class="row">

                <div class="col-xs-12">

                    <div class="wrap-thumbnail"
                         style="box-shadow: 0 5px 15px -5px #e9e7e8">

                        <img width="330" height="500" src="../../wp-content/uploads/<?php  echo $donnees['IMAGE']; ?> " class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image" alt="" />                    </div>

                    <div class="wrap-content">

                        <div class="author" style="color:black;">
                            <img src="../../wp-content/uploads/<?php echo $donnes_auteur['IMAGE']; ?>"
                                 alt="">
                            <?php echo $donnes_auteur['NOM']; ?>                      </div>

                        <h4 style="color:black;"><?php    echo $donnees['NOM']; ?></h4>

                        <div><div class="woocommerce">
                <div class="woocommerce-product-rating">
                <span class="star-rating  bj-color-#7151ed">
                    <span style="width:0%"></span>
                </span><span class="bj-rating-counts" style="color:#7151ed;">0 Ratings</span></div>
                </div></div>

                        <p  style="color:black;"><?php   echo $donnees['OVERVIEW'];  ?></p>

                       <script>
                            function redirect()
                            {
                                setTimeout((function(){location.replace('http://localhost/AvenirCulturel/Views/user-profile/book-shelf/BibliothequeCore.php?Livre=<?php echo $_GET['Livre']; ?>');
                                }),2000);
                            }
                        </script>
                        <div class="wrap-button">

                       

<?php if ($donnees['QUANTITE']!=0)
{
?>




    <form class="cart" method="post" enctype='multipart/form-data'>
        
        <button type="submit" name="add-to-cart" value="388" class="single_add_to_cart_button alt">Buy <del>

       



        <?php

if ($donnees['REDUCTION']!=0)
{
   echo  '<span class="woocommerce-Price-currencySymbol">&pound;</span>'.$donnees['PRIX'].'</span></del>'; 

    echo  '<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>'.$donnees['REDUCTION'].'</span></ins>';
}else    {

       echo  '<span class="woocommerce-Price-currencySymbol"></span></span></del>'; 
    echo  '<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>'.$donnees['PRIX'].'</span></ins>';


}
}else  { ?>      <button type="submit" name="add-to-cart" value="388" class="single_add_to_cart_button alt"> hors stock<del><?php }?>





        </button>

            </form>



                            <button class="flex-favorites <?php if(!isset($_SESSION['id'])) echo 'go_to_login_link' ?>" data-id="388" <?php if(isset($_SESSION['id'])) echo "onclick='redirect()'" ?>  >
                            <span class="ff-icon zmdi zmdi-favorite-outline"></span>
                            <p class="ff-label " id="BIB"   data-counts="aj-count">Ajouter dans bibliothèque</p>
                            </button> <span class="load"></span>
                            <script src="Abibliotheque_ajx.js"></script>


<?php
if (isset($_SESSION['id'])) if(Existe($_GET['Livre'],$_SESSION['id'])) echo "<script>var b=document.getElementById('BIB'); b.innerHTML='Supprimer de ma bibliotheque';</script>";
?>


                        </div>
    

























                    </div>



                </div>
            </div>
        </div>
    </div>
    
<div class="wrap-single-product post-388 product type-product status-publish has-post-thumbnail product_cat-comedy product_cat-thriller product_tag-shattered first instock sale taxable shipping-taxable purchasable product-type-simple">
    <div class="container">
        <div class="row">

            <div class="wrap-single-content col-xs-12 col-sm-8 col-lg-10">
                <div class="info-single-product">
                            <ul>
            <li>
                <div class="info-single-title">Genre:</div>
<?php while ($category = $livre_category->fetch(PDO::FETCH_ASSOC)) : ?>

                <span>
                    <a href="../index.php?s=&product_cat=<?php echo $category['CATEGORY']; ?>&bj_meta__wc_average_rating=&min_price=0&max_price=100&sort=&orderby=menu_order" rel="tag"><?php     echo $category['CATEGORY'];   ?></a>               </span>
            

<?php endwhile; ?>
            </li>   
            <li>
                <div class="info-single-title">Originally Published:</div>
                <span>
                    <?php   echo $donnees['ORIGINALITE'];  ?>                </span>
            </li>
            <li>
                <div class="info-single-title">Hardcover:</div>
                <span>
                    <?php   echo $donnees['HARDCOVER'];  ?>               </span>
            </li>
            <li>
                <div class="info-single-title">Language:</div>
                <span>
                    <?php   echo $donnees['LANGUAGE'];  ?>             </span>
            </li>
        </ul>
                    </div>
                                <div class="wrap-overview">
                    <h3>Overview</h3>
                    <div class="content">
                        <p><?php    echo $donnees['OVERVIEW'];  ?></p>
                    </div>
                </div>
                <div class="wrap-details clearfix">
                    <div class="detail">
                        <h6>BOOK DETAILS</h6>
                                <ul>
            <li>
                <span class="info-single-title">Hardcover:</span>
                <span>
                      <?php   echo $donnees['HARDCOVER'];  ?>              </span>
            </li>
            <li>
                <span class="info-single-title">Publisher:</span>
                <span>
                    <?php   $donnes_auteur['PUBLISHER']; ?>             </span>
            </li>
            <li>
                <span class="info-single-title">Language:</span>
                <span>
                    <?php   echo $donnees['LANGUAGE'];  ?>               </span>
            </li>
            <li>
                <span class="info-single-title">ISBN-10:</span>
                <span>
                    <?php   echo $donnees['ISBN'];  ?>                </span>
            </li>
            <li>
                <span class="info-single-title">Dimensions:</span>
                <span>
                    <?php   echo $donnees['DIMENSION'];   ?>          </span>
            </li>
        </ul>
                        </div>


                    <div class="gallery-review">
                        <h6>PREVIEW</h6>
                        
	<div class="owl-carousel owl-theme" id="gallery-product">
	<a data-lightbox="light-box" href="../../wp-content/uploads/post-7.jpg"><img width="230" height="300" src="../../wp-content/uploads/post-7-230x300.jpg" class="attachment-book_junky_230X300 size-book_junky_230X300" alt="" title="post-7" data-caption="" data-src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-7.jpg" data-large_image="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-7.jpg" data-large_image_width="1000" data-large_image_height="800" /></a><a data-lightbox="light-box" href="../../wp-content/uploads/post-10.jpg"><img width="230" height="300" src="../../wp-content/uploads/post-10-230x300.jpg" class="attachment-book_junky_230X300 size-book_junky_230X300" alt="" title="post-10" data-caption="" data-src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-10.jpg" data-large_image="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-10.jpg" data-large_image_width="1000" data-large_image_height="800" /></a><a data-lightbox="light-box" href="../../wp-content/uploads/post-8.jpg"><img width="230" height="300" src="../../wp-content/uploads/post-8-230x300.jpg" class="attachment-book_junky_230X300 size-book_junky_230X300" alt="" title="post-8" data-caption="" data-src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-8.jpg" data-large_image="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/post-8.jpg" data-large_image_width="1000" data-large_image_height="800" /></a>	</div>
	                    </div>
                </div>
                <div class="review">
                    <h5>Avis de lecteurs</h5>
                    <div id="reviews" class="<?php if (isset($_SESSION['id'])) echo "woocommerce-Reviews"; else echo "go_to_login_link"; ?>">
    <button class="bj-write-cmt-btn">Donner son avis</button>
    <div id="comments">
        <div class="wrap-rating">
            <p>Average customer rating</p>
            <div class="woocommerce">
            <?php
                if(isset($_SESSION['id']))
                {
                ?>
                <div class="woocommerce-product-rating">

                    <form id="toPHP" class="StarRatingProduct" method="post"
                          >
                        <input id="star-5" type="radio" name="ratings"
                               value="5" >
                        <label for="star-5" title="rating" id="btn">
                            <i class="far fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-4" type="radio" name="ratings"
                               value="4"
                               onclick="">
                        <label for="star-4" title="rating">
                            <i class="far fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-3" type="radio" name="ratings"
                               value="3"
                               onclick="">
                        <label for="star-3" title="rating">
                            <i class="far fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-2" type="radio" name="ratings"
                               value="2"
                               onclick="">
                        <label for="star-2" title="rating">
                            <i class="far fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-1" type="radio" name="ratings"
                               value="1"
                               onclick="">
                        <label for="star-1" title="rating">
                            <i class="far fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="id_livre" type="radio"
                               value= "<?php echo $_GET['Livre'] ?>" aria-hidden="true">
                        <input id="id_compte" type="radio"
                               value= "<?php  echo $_SESSION['id'] ?>" aria-hidden="true">
                    </form>
                    <script SRC="Rating/request_ajx.js"></script>
                    <script SRC="Rating/Get_rate_ajx.js"></script>

                    <span style="width:0%"></span>
                    <span class="bj-rating-counts" id="rating1-5"
                          style="color:;">
                          </span>
                </div>
            
            <?php
            }
            ?>

</div>
        </div>
            <div id="review_form_wrapper" class="bj-comment-form">
                <div id="review_form">
                    	<div id="respond" class="comment-respond">
		<span id="reply-title" class="comment-reply-title">Be the first to review &ldquo;Shattered&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></span>			
        <form action="#" method="post" id="commentform" class="comment-form">
				

                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>


                



                             <p class="comment-form-comment"><label for="comment">Your review <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea></p><p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" />
                             <?php echo $_SESSION['id']; ?>
</p>			</form>





			</div><!-- #respond -->
	                </div>
            </div>


<?php  
                if (isset($_POST['submit']))
                    if (!empty($_POST['comment']))
                    $commentaire->Ajouter_commentaire($donnees['ID'],$_POST['comment'],$_SESSION['id']);

?>

<?php if ($nbr_comm['NbNews']==0){ ?> <p class="woocommerce-noreviews">There are no reviews yet.</p> <?php  } ?> 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script >
    

        $(document).ready(function (){
            var commentCount = 2;
            <?php $count = 2 ; ?>
                $("#load").click(function (){
                    commentCount = commentCount + 2;
                    <?php  $count = $count + 2; ?> 
                        $("#comment_load").load("load_comment.php",{
                                commentNewCount : commentCount,
                                id_book : <?php echo $_GET['Livre'];?>
                        });

                });


        });



    

</script>





<div id="comment_load">
<?php
$req_comm =  $commentaire->Afficher_commentaire_id_load ($_GET['Livre'],2);    
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
                            <button id="<?php echo $product['ID'];  ?>" class="button">supp</button>
                            <script>
    
$(document).ready(function (){
            
                $("#<?php echo $product['ID']; ?>").click(function (){
                      $.post("delete.php", {
                        suggestion : <?php echo $product['ID']; ?> ,
                        id_book : <?php echo $_GET['Livre'];?>,
                        count : <?php echo $count; ?>
                        }, function(data,status){
                            alert(status);
                        $("#comment_load").html(data);
                        });
                });


        });


</script>
                </p>
<?php  } ?>
   </p>
</div>
        </div>
    </div>
</li><!-- #comment-## -->
<?php  endwhile;?>



            </ol>

            </div>
<button id="load">sow more</button>


</div>
    <div class="clear"></div>

</div>
                </div>
            </div>









  <div class="col-xs-12 col-sm-4 col-lg-2">
                <div class="wrap-single-sidebar">
                    <div class="wrap-book-author">
                        <h4 class="sg-sidebar-title">BOOKS BY <?php   echo $donnes_auteur['NOM'];  ?></h4>
                        

<?php




$bks = $book->Get_Livre_idAuteur ($donnes_auteur['ID']);





?>



                                <?php
                                    while ($product = $bks->fetch(PDO::FETCH_ASSOC)) :
                                ?>



                                <div class="item-product clearfix">




                                    
                                    <div class="wrap-thumbnail"
                                         style="box-shadow: 0 5px 15px -5px #e9e7e8">

                                        <a href="index.html">
                                            <img width="330" height="500" src="../../wp-content/uploads/<?php   echo $product['IMAGE'];  ?>" class="attachment-single-product size-single-product wp-post-image" alt="" />                                        </a>
                                    </div>

                                    <div class="wrap-content">

                                        <a href="index.html"><?php    echo $product['NOM'];     ?></a>

                                        <div class="wrap-price">
    <span class="price"><del><span class="woocommerce-Price-amount amount">




<?php

if ($product['REDUCTION']!=0)
{
   echo  '<span class="woocommerce-Price-currencySymbol">&pound;</span>'.$product['PRIX'].'</span></del>'; 

    echo  '<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>'.$product['REDUCTION'].'</span></ins>';
}else    {

       echo  '<span class="woocommerce-Price-currencySymbol"></span></span></del>'; 
    echo  '<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>'.$product['PRIX'].'</span></ins>';



}
?>






    </span>
</div>
                                    </div>
                                </div>
                                
                              
                    <?php  endwhile;?>






                                                    </div>


                    <h4 class="sg-sidebar-title">SHARE THIS BOOK</h4>
                    
    <div class="wrap-share">
        <ul class="list-unstyled clearfix">
            <li>
                <a class="facebook" title="Share this article to Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://demo.cmssuperheroes.com/themeforest/bookjunky/shop/freefall/&amp;t=Freefall">
                    <i class="zmdi zmdi-facebook"></i>
                </a>
            </li>
            <li>
                <a class="twitter" title="Share this article to Twitter"  target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article:%20Freefall%20-%20http://demo.cmssuperheroes.com/themeforest/bookjunky/shop/freefall/">
                    <i class="zmdi zmdi-twitter"></i>
                </a>
            </li>
            
            <li>
                <a class="email" title="Share this article to GooglePlus" target="_blank" href="mailto:?body=http://demo.cmssuperheroes.com/themeforest/bookjunky/shop/freefall/"><i class="zmdi zmdi-email"></i>
                </a>
            </li>
        </ul>
    </div>

                    </div>
            </div>
        </div>
    </div>
</div>


		
    </div><!-- .site-content -->
    <footer class="site-footer">
        <div id="footer-top">
            <div class="container">
                <div class="row">

                                    <div class="wrap-about col-md-3 col-sm-12 col-xs-12 col-lg-4">
                        <div class="footer-about">
        <a href="../../index.html"><img class="logo-footer"
                                                             src="../../wp-content/themes/book-junky/assets/images/footer-logo.png"
                                                             alt="Book Junky"></a>
        <p>Suspendisse potenti. Nulla facilisi. Vestibulum non blandit nulla. Vivamus id orci condimentum, suscipit nunc non, viverra justo. Phasellus sit amet justo ac felis sagittis elementum a at dui.</p>
                    <ul>
                                    <li><a href="#"><i
                                    class="zmdi zmdi-facebook-box"></i></a></li>
                                                    <li><a href="#"><img
                                    src="../../wp-content/themes/book-junky/assets/images/instagram.png"
                                    alt="Instagram"></a></li>
                                                    <li><a href="#"><i
                                    class="zmdi zmdi-twitter-box"></i></a></li>
                                                                                                                            </ul>
                </div>
                    </div>
                <div class="col-md-3 col-sm-12 col-xs-12"><aside id="recent_views_book_2-2" class="widget-footer widget_recent_views_book_2"><h3 class="wg-ft-title">THIS WEEKS REVIEWD</h3>        <div class="recent-review-2">
                            <div class="recent-review-item clearfix">
                
                    <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #000000">
                        <a href="../freefall/index.html">
                            <img src="../../wp-content/uploads/freefall.jpg"
                             alt="Thumbnail">
                         </a>
                    </div>
                    <div class="contents">

                        <a href="../freefall/index.html" class="title">

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
                        <a href="../darknet/index.html">
                            <img src="../../wp-content/uploads/darknet.jpg"
                             alt="Thumbnail">
                         </a>
                    </div>
                    <div class="contents">

                        <a href="../darknet/index.html" class="title">

                           Darknet                        </a>
                        <div class="author-product">
                            by Matthew Mather                        </div>

                        <div class="woocommerce"><div class="woocommerce-product-rating"><span class="star-rating" style="color:;"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></span></div></div>                    </div>
                </div>
                                <div class="recent-review-item clearfix">
                
                    <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #ededa6">
                        <a href="../the-happy-lemon/index.html">
                            <img src="../../wp-content/uploads/the_happy_lemon.jpg"
                             alt="Thumbnail">
                         </a>
                    </div>
                    <div class="contents">

                        <a href="../the-happy-lemon/index.html" class="title">

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
    <li>BookJunky,</li>
    <li>80 Crown Street,</li>
    <li>London, WC2B 7UJ</li>
    <li>&nbsp;</li>
    <li>Call: <a href="tel:07724100110">0772 410 0110</a></li>
    <li><a href="mailto:email@bookjunky.co.uk">Email:email@bookjunky.co.uk</a></li>
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

            <form class="login_form" id="login_form"  method="post" action="http://localhost/AvenirCulturel/Core/LoginCore.php" onsubmit="return Verif() ">
                <h2>Vous avez déjà un compte ?</h2>
                <input type="text" class="alert_status"  readonly>
                <label for="u"> Nom d'utilisateur </label><span id="u_s"></span>
                <input type="text" name="login_user" id="u"  onmouseout="Verif_N_utilisateur()"/>
                <label for="pass_user"> Mot de passe </label><span id="m_s"></span>
                <input type="password" name="pass_user" id="pass_user" onmouseout="Verif_mot_de_passe()" />
                <label for="rememberme" id="lb_rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  />Se rappeler </label>
                <input type="submit" name="login_submit" value="Se connecter" class="login_submit" />
                <script src="../../Verif/Verif_connexion.js"></script>
                <div class="social-login">
                </div>

            </form>
            </form>

            <form class="register_form" id="register_form" 
                action="http://demo.cmssuperheroes.com/themeforest/bookjunky" method="post">
                <h2>Registration</h2>
                <input type="text" class="alert_status" readonly>
                <label for="register_user">Username</label>
                <input type="text" name="register_user" id="register_user" value="" >
                <label for="register_email">E-mail</label>
                <input type="email" name="register_email" id="register_email" value="">
                <div id="allow_pass">
                    <label for="register_pass">Password</label>
                    <input type="password" name="register_pass" id="register_pass" value="">
                    <label for="confirm_pass">Confirm Password</label>
                    <input type="password" name="confirm_pass" id="confirm_pass" value="">
                </div>
                                <input type="submit" name="register_submit" id="register_submit" value="REGISTER" />
            </form>

            <form class="lost_pwd_form" action="http://demo.cmssuperheroes.com/themeforest/bookjunky" method="post">
                <h2>Forgotten Password?</h2>
                <input type="text" class="alert_status" readonly>
                <label for="lost_pwd_user_email">Username or Email Adress</label>
                <input type="text" name="lost_pwd_user_email" id="lost_pwd_user_email">
                <input type="submit" name="lost_pwd_submit" id="lost_pwd_submit" value="GET NEW PASSWORD">
            </form>

            <div class="pass_and_register" id="pass_and_register">

                <a class="go_to_register_link" href="#" style="">Register</a>
                <span style="color: black"> </span>
                <a class="go_to_lostpassword_link" href="#">Forgot Password</a>
                <span style="color: black"></span>
                <a class="back_login" href="#">Back to Login</a>

            </div>


        </div>
    </div>
    <script src='../../../../../www.google.com/recaptcha/api.js'></script>
    <link rel='stylesheet' id='light-box-css-css'  href='../../wp-content/themes/book-junky/assets/css/light-box.css' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var flexFavorites = {"ajax":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","action":"like_post"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/flex-favorites/assets/js/flex-favorites.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"","photoswipe_enabled":"","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":""};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js'></script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js'></script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments_ef2fb5d85d4ddcc5d0939ad45105c3a3"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>
<script type='text/javascript' src='../../wp-content/themes/book-junky/assets/js/main.js'></script>
<script type='text/javascript' src='../../wp-content/themes/book-junky/assets/js/jquery-ui.js'></script>
<script type='text/javascript' src='../../wp-content/themes/book-junky/assets/js/jQAllRangeSliders-min.js'></script>
<script type='text/javascript' src='../../wp-content/themes/book-junky/assets/js/book-junky.js'></script>
<script type='text/javascript' src='../../wp-content/themes/book-junky/assets/js/menu.js'></script>
<script type='text/javascript' src='../../wp-includes/js/comment-reply.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var nectarLove = {"ajaxurl":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","postID":"388","rooturl":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/themes/book-junky/assets/js/post_favorite.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var bj_handle = {"ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/themes/book-junky/assets/js/bj-handle.js'></script>
<script type='text/javascript' src='../../wp-includes/js/wp-embed.min.js'></script>
<script type='text/javascript' src='../../wp-content/themes/book-junky/assets/js/owl.carousel.min.js'></script>
<script type='text/javascript' src='../../wp-content/themes/book-junky/assets/js/light-box.js'></script>
</body>

<!-- Mirrored from demo.cmssuperheroes.com/themeforest/bookjunky/shop/shattered/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 22:30:33 GMT -->
</html>









<!-- Dynamic page generated in 0.647 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-02-03 22:23:42 -->

<!-- super cache -->