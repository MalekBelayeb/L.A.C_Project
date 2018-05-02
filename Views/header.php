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



function countLivre($compte)
{
    $c=Connexion::getConnexion();
    $sql="select * from bibliotheque WHERE ID_COMPTE='$compte' ";
        $liste=$c->query($sql);
        return $liste->rowCount();
}
require_once 'c:/wamp64/www/AvenirCulturel/Core/googlelogin/config.php';
$url=$gClient->createAuthUrl();

function getCinLivreur($condition)
{
    $sql=Connexion::getConnexion()->prepare("select cin from livreur WHERE mail='$condition' ");
    $sql->execute();
    while($result=$sql->fetch(PDO::FETCH_ASSOC))
    {
        return $result['cin'];
    }
}


require_once '../Core/googlelogin/config.php';
$url=$gClient->createAuthUrl();


function getDataLivreur($id,$C,$column,$table)  // ESPACE LIVREUR
{
    $sql=Connexion::getConnexion()->prepare("select $column from $table WHERE $C='$id' ");
    $sql->execute();
    while($result=$sql->fetch(PDO::FETCH_ASSOC))
    {
        return $result[$column];
    }
}

function ExisteLivreur($mailLivreur) // ESPACE LIVREUR
{
    $c=Connexion::getConnexion();
    $sql="select * from livreur WHERE mail='$mailLivreur' ";
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

<!-- Mirrored from demo.cmssuperheroes.com/themeforest/bookjunky/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 22:22:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="xmlrpc.php" />
    <link rel="shortcut icon" type="image/x-icon" href="wp-content/uploads/fav-1.png" />
    <title>Librairie Avenir Culturel &#8211; L.A.C</title>
    <link rel='dns-prefetch' href='http://ajax.aspnetcdn.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="Book Junky &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Book Junky &raquo; Comments Feed" href="comments/feed/index.html" />
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
    <link rel='stylesheet' id='cms-plugin-stylesheet-css'  href='c:/wamp64/www/AvenirCulturel/views/wp-content/plugins/cmssuperheroesv2/assets/css/cms-style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='widget_style-css'  href='wp-content/plugins/csh-login/assets/css/default.css' type='text/css' media='all' />
    <link rel='stylesheet' id='layout1_style-css'  href='wp-content/plugins/csh-login/assets/css/layout1.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flex-favorites-style.css-css'  href='wp-content/plugins/flex-favorites/assets/css/flex-favorites-style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'  href='wp-content/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
    #rs-demo-id {}
</style>
    <link rel='stylesheet' id='woocommerce-layout-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='wp-content/plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'  href='wp-content/themes/book-junky/assets/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-style-css'  href='wp-content/themes/book-junky/assets/css/owl.carousel.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='book-junky-font-css'  href='wp-content/themes/book-junky/assets/css/font.css' type='text/css' media='all' />
    <link rel='stylesheet' id='iThing.css-css'  href='wp-content/themes/book-junky/assets/css/iThing.css' type='text/css' media='all' />
    <link rel='stylesheet' id='book-junky-style-css'  href='wp-content/themes/book-junky/style.css' type='text/css' media='all' />

    <link rel='stylesheet' id='book-junky-static-css'  href='wp-content/themes/book-junky/assets/css/static.css' type='text/css' media='all' />
    <link rel='stylesheet' id='book-ic-css'  href='wp-content/themes/book-junky/assets/css/scrollablemenu.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-dynamic-css'  href='wp-content/themes/book-junky/assets/css/custom-dynamic.css' type='text/css' media='all' />
    <link rel='stylesheet' id='zoom-css'  href='wp-content/themes/book-junky/assets/css/zoom_livre.css' type='text/css' media='all' />
    <link rel='stylesheet' id='Slide-css'  href='wp-content/themes/book-junky/assets/css/Slide.css' type='text/css' media='all' />
    <link rel='stylesheet' id='Slide-csss'  href='wp-content/themes/book-junky/assets/css/mail.css' type='text/css' media='all' />
    <style id='custom-dynamic-inline-css' type='text/css'>
    .site-content{padding-top:;}.site-content{padding-bottom:;}.header-3 .main-logo-3{max-height:200px;}.site-content{padding-top:0;}.site-content{padding-bottom:0;}
</style>
    <link rel='stylesheet' id='js_composer_front-css'  href='wp-content/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='../../../ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js'></script>
    <script type='text/javascript'>





    /* <![CDATA[ */
var jsPassData = {"ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","display_labels":"Labels","type_modal":"Popup","get_login_redirect":"Current Page","login_redirect":"","register_redirect":"","genrated_pass":""};
/* ]]> */
</script>
    <script type='text/javascript' src='wp-content/plugins/csh-login/assets/js/widget-script.js'></script>
    <script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/shop-cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
    <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script>
    <script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js'></script>
    <script type='text/javascript' src='wp-content/themes/book-junky/assets/js/bootstrap.min.js'></script>
    <link rel='https://api.w.org/' href='wp-json/index.html' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 4.9.2" />
    <meta name="generator" content="WooCommerce 3.2.6" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embedc14a.json?url=http%3A%2F%2Fdemo.cmssuperheroes.com%2Fthemeforest%2Fbookjunky%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed72ff?url=http%3A%2F%2Fdemo.cmssuperheroes.com%2Fthemeforest%2Fbookjunky%2F&amp;format=xml" />
    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script type="text/javascript">function setREVStartSize(e){
        try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                    if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
                }catch(d){console.log("Failure at Presize of Slider:"+d)}
    };</script>
    <style type="text/css" title="dynamic-css" class="options-output">
        body .page-title
        h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading
    body .page-title h1,{opacity: 0;}.ie.wf-loading body .page-title h1,{visibility: hidden;}body{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,{opacity: 0;}.ie.wf-loading body,{visibility: hidden;}h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h1,{opacity: 0;}.ie.wf-loading h1,{visibility: hidden;}h2{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h2,{opacity: 0;}.ie.wf-loading h2,{visibility: hidden;}h3{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h3,{opacity: 0;}.ie.wf-loading h3,{visibility: hidden;}h4{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h4,{opacity: 0;}.ie.wf-loading h4,{visibility: hidden;}h5{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h5,{opacity: 0;}.ie.wf-loading h5,{visibility: hidden;}h6{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h6,{opacity: 0;}.ie.wf-loading h6,{visibility: hidden;}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1503973713559{margin-bottom: 30px !important;border-top-width: 1px !important;padding-top: 2px !important;border-top-color: #eff0f3 !important;border-top-style: solid !important;}.vc_custom_1503889319693{border-top-width: 1px !important;padding-top: 29px !important;background-color: #f9fafc !important;border-top-color: #eff0f3 !important;border-top-style: solid !important;}.vc_custom_1503975536992{padding-bottom: 84px !important;background-color: #f9fafc !important;}.vc_custom_1504086144605{border-top-width: 1px !important;padding-top: 10px !important;padding-bottom: 15px !important;border-top-color: #e5e6ea !important;border-top-style: solid !important;}.vc_custom_1507284853599{margin-bottom: -16px !important;}.vc_custom_1503989158128{margin-bottom: 98px !important;}.vc_custom_1505871144817{padding-top: 10px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="home page-template-default page page-id-271 body-boxed wpb-js-composer js-comp-ver-5.2.1 vc_responsive">
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

                        //ESPACE LIVREUR (rag)
                        if(isset($_SESSION['id']))
                        {
                            if(ExisteLivreur(getDataLivreur($_SESSION['id'],'LOGIN','EMAIL','compte')))
                            {
                                echo "<a href='livreur/livreur1.php'>livreur</a>";
                                $_SESSION['cin_liv']=getCinLivreur(getDataLivreur($_SESSION['id'],'LOGIN','EMAIL','compte'));

                            }
                        }
                        if(isset($_SESSION['cin_liv'])) echo $_SESSION['cin_liv'];
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
<a href="user-profile/book-shelf/DonnesProfile.php">
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
                            <img src="wp-content/themes/book-junky/assets/images/icon-1.png"
                                 alt="icon 1">
                            <div class="content <?php if(!isset($_SESSION['id'])) echo 'go_to_login_link' ?>">
                            <a href="user-profile/book-shelf/index.php"
                            alt="My Account">
                                                                        <h5>Bibliothèque</h5>

                                                                    </a>
                                                            <span class="aj-count">
                                     <?php if(isset($_SESSION['id'])) echo countLivre($_SESSION['id']); ?>  livre
                                                                            </span>
                            </div>
                        </div>

                        <div class="wrap-your-basket clearfix">
                            <img src="wp-content/themes/book-junky/assets/images/icon-2.png"
                                 alt="icon 2">
                            <div class="content <?php if(!isset($_SESSION['id'])) echo 'go_to_login_link' ?>">
                                <h5>
                                                                        <a href="shop-cart/index.php">

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

	                <div class="main-logo-3"><a href="index.php"><img alt="Book Junky" src="wp-content/themes/book-junky/assets/images/logo-2.png"></a></div>
	                <a href="#" class="menu"><i class="fa fa-bars"></i> Menu</a>
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
          b.innerHTML += "<img src='wp-content/uploads/"+ img[i] + "'  width='50px' height='100px'>";
          /*insert a input field that will hold the current array item's value:*/
          
          b.innerHTML += "<input type='hidden' value='" + id[i] + "'>";
        

          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
             // inp.value = this.getElementsByTagName("input")[0].value;
              

                                window.location.href = 'shop/Livres/index?Livre='+this.getElementsByTagName("input")[0].value+' ';

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
		<li id="menu-item-518" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-518" data-depth="2"><a href="promo.php" class=""><span class="menu-title">Top Promotions</span></a></li>
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






<li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-99" data-depth="0"><a href="news/evenements.php" class=""><span class="menu-title">Événement</span>

</a></li>





<li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children no_group menu-item-107" data-depth="0"><a href="forum/views/forum.php" class=""><span class="menu-title">Forum</span></a>
<ul class='standar-dropdown standard autodrop_submenu sub-menu' style="width:200px;">
	
</ul>
</li>
<li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-99" data-depth="0"><a href="contact-us/index.html" class=""><span class="menu-title">Contact </span></a></li>
</ul></div>                </nav>
            </div>
    	</div>
    </div>

</div><!-- #site-navigation -->


	</header><!-- #masthead -->