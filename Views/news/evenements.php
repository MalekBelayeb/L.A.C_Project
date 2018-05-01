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
    <link rel="shortcut icon" type="image/x-icon" href="../wp-content/uploads/fav-1.png" />
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
    <link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='widget_style-css'  href='../wp-content/plugins/csh-login/assets/css/default.css' type='text/css' media='all' />
    <link rel='stylesheet' id='layout1_style-css'  href='../wp-content/plugins/csh-login/assets/css/layout1.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flex-favorites-style.css-css'  href='../wp-content/plugins/flex-favorites/assets/css/flex-favorites-style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'  href='../wp-content/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
    #rs-demo-id {}
</style>
    <link rel='stylesheet' id='woocommerce-layout-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'  href='../wp-content/themes/book-junky/assets/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-style-css'  href='../wp-content/themes/book-junky/assets/css/owl.carousel.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='book-junky-font-css'  href='../wp-content/themes/book-junky/assets/css/font.css' type='text/css' media='all' />
    <link rel='stylesheet' id='iThing.css-css'  href='../wp-content/themes/book-junky/assets/css/iThing.css' type='text/css' media='all' />
    <link rel='stylesheet' id='book-junky-style-css'  href='../wp-content/themes/book-junky/style.css' type='text/css' media='all' />

    <link rel='stylesheet' id='book-junky-static-css'  href='../wp-content/themes/book-junky/assets/css/static.css' type='text/css' media='all' />
    <link rel='stylesheet' id='book-ic-css'  href='../wp-content/themes/book-junky/assets/css/scrollablemenu.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-dynamic-css'  href='../wp-content/themes/book-junky/assets/css/custom-dynamic.css' type='text/css' media='all' />
    <link rel='stylesheet' id='zoom-css'  href='../wp-content/themes/book-junky/assets/css/zoom_livre.css' type='text/css' media='all' />
    <link rel='stylesheet' id='Slide-css'  href='../wp-content/themes/book-junky/assets/css/Slide.css' type='text/css' media='all' />
    <link rel='stylesheet' id='Slide-csss'  href='../wp-content/themes/book-junky/assets/css/mail.css' type='text/css' media='all' />
    <style id='custom-dynamic-inline-css' type='text/css'>
    .site-content{padding-top:;}.site-content{padding-bottom:;}.header-3 .main-logo-3{max-height:200px;}.site-content{padding-top:0;}.site-content{padding-bottom:0;}
</style>
    <link rel='stylesheet' id='js_composer_front-css'  href='../wp-content/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='../../../ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js'></script>
    <script type='text/javascript'>





    /* <![CDATA[ */
var jsPassData = {"ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","display_labels":"Labels","type_modal":"Popup","get_login_redirect":"Current Page","login_redirect":"","register_redirect":"","genrated_pass":""};
/* ]]> */
</script>
    <script type='text/javascript' src='../wp-content/plugins/csh-login/assets/js/widget-script.js'></script>
    <script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/shop-cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
    <script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script>
    <script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js'></script>
    <script type='text/javascript' src='../wp-content/themes/book-junky/assets/js/bootstrap.min.js'></script>
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
                                                                        <a href="../shop-cart/index.php">

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

                  <div class="main-logo-3"><a href="http://localhost/AvenirCulturel/Views/index.php"><img alt="Book Junky" src="../wp-content/themes/book-junky/assets/images/logo-2.png"></a></div>
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
          b.innerHTML += "<img src='../wp-content/uploads/"+ img[i] + "'  width='50px' height='100px'>";
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
                       




                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">

                            <div class="wrap-thumbnail" style="box-shadow: 0 5px 15px -5px #4f4387" >
                         </div>

                            

                            </div>
                        </div>
                    </div>
                
            

                <!-- #page-title -->
    <div id="content" class="site-content">
<section id="primary" class="container blog-default is-sidebar-right">
    <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
            <main id="main" class="site-main">

                <div class="blog-default-title">Les nouveautés</div>











<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->








<?php



include_once "C:/wamp64/www/AvenirCulturel/Config.php";
include_once "C:/wamp64/www/AvenirCulturel/Core/evenementcore.php";

                $c = connexion::getConnexion();
/*---------------------------------------------------------------------PAGE TO PAGE -----------------------------------------------------------------------------------*/
/*---------------------------------------------------------------------PAGE TO PAGE -----------------------------------------------------------------------------------*/
/*---------------------------------------------------------------------PAGE TO PAGE -----------------------------------------------------------------------------------*/

/*****************************************************************rechercher par nom pagination*********************************************************************************/


                        if (isset($_GET['q']) and isset($_GET['date_rech'])  )
                            
                            {
                       
                        $ev_classe = New evenementcore();
$rows = $ev_classe->nbrpagerechercher($_GET['q'],$_GET['date_rech']);
    







                            }else {
                      $ev_classe = New evenementcore();
$rows = $ev_classe->nbrpage();
    
                        }


/*****************************************************************rechercher par date pagination*********************************************************************************/
                     
/*******************************************************************************************************************************************************************************/
                        $page_row = 2;   //nombre d'article afficher dans une page
                        $last = ceil($rows['NbNews']/$page_row);

                        if ($last <1 )
                            $last=1;


                        $pagenum = 1;

                        if (isset($_GET['pn']))
                            $pagenum = preg_replace('#[^0-9]#','', $_GET['pn']);


                        if ($pagenum < 1)
                            $pagenum = 1;
                        else if ($pagenum >$last)
                            $pagenum = $last;




                            $limit = 'LIMIT '.($pagenum -1) * $page_row.',' .$page_row;




/*---------------------------------------------------------------------RECHERCHE -----------------------------------------------------------------------------------*/
$ev_classe = New evenementcore();
  if (isset($_GET['q']) and isset($_GET['date_rech']))

$bks = $ev_classe->recherche_evenement($_GET['q'],$_GET['date_rech']);
  
else{
$bks = $ev_classe->afficherrev($limit);

    }
                 

/*---------------------------------------------------------------------PAGE TO PAGE------------------------------------------------------------------------*/


$paginationCTR = '';

    if ($last != 1)


    {

        if ($pagenum > 1 )
        {
            $previous = $pagenum - 1;
            $paginationCTR .= "<a class='prev page-numbers' href='".$_SERVER['PHP_SELF']."?pn=".$previous."'><i class='fa fa-angle-left'></i> Previous Page</a>";
        
            for ($i=$pagenum-4; $i <$pagenum ; $i++) { 
                if ($i >0)
                {
                    $paginationCTR .="<a class='page-numbers' href='".$_SERVER['PHP_SELF']."?pn=".$i."' >".$i."</a>";
                }
            }

        }
        $paginationCTR .="<span class='page-numbers current'>".$pagenum."</span>";

        for ($i=$pagenum+1; $i <= $last ; $i++) { 
            $paginationCTR .="<a class='page-numbers' href='".$_SERVER['PHP_SELF']."?pn=".$i."' >".$i."</a>";
            if ($i >= $pagenum + 2)
            {
                break;
            }
        }
        if ($pagenum != $last)
        {
            $next = $pagenum +1;
            $paginationCTR .= "<a class='next page-numbers' href='".$_SERVER['PHP_SELF']."?pn=".$next."'>Next Page <i class='fa fa-angle-right'></i></a>";
        }
    }



/*---------------------------------------------------------------------PAGE TO PAGE -----------------------------------------------------------------------------------*/
        
  if(isset($_SESSION['id']))
  {
  echo "<p>".$_SESSION['id']."</p>";
 }


        while ($product = $bks->fetch(PDO::FETCH_ASSOC)) :

$ev_classe = New evenementcore();
echo $product['id_ev'];

//alert($rows['nbrlike']);




/*------------------------------------------------------------date de l evenement----------------------------------------------------------------------------------------------*/
        $date_ev = $product['date_ev'];
      //  echo $date_ev;

          $nowDate=date('Ymd');
        $nowDate=new DateTime($nowDate);
        $DateDate=new DateTime($date_ev);
        $interval1=date_diff($DateDate,$nowDate);
       // echo $nowDate->format('Y-m-d H:i:sP') . "\n";
        //echo $DateDate->format('Y-m-d H:i:sP') . "\n";
//echo $interval1->invert . "\n";


if($interval1->invert<=0)
{
   $core = new evenementcore();
    $core-> delete_evenement($product['id_ev']);
  

}
         
 /*------------------------------------------------------------date de l evenement----------------------------------------------------------------------------------------------*/


            if ($product['image_ev1']==NULL && $product['image_ev2']==NULL && $product['image_ev3']==NULL)
            {


?>



<article id="post-60" class="clearfix post-60 post type-post status-publish format-standard has-post-thumbnail hentry category-action category-comedy category-drama tag-best-sellers tag-comics tag-fiction tag-litterature tag-lorem-ipsum">
    

    <div class="wrap-left">
        <a href="../10-ways-you-might-be-reading-your-book-wrong/index.php?id_ev=<?php echo $product['id_ev']; ?>">
        <img width="415" height="380" src="../wp-content/uploads/<?php  echo $product['image_ev'];  ?>" class="attachment-medium size-medium wp-post-image" alt="" />       </a>
    </div>

    <div class="wrap-right">
        


        <h3 class="entry-title"><a href="../10-ways-you-might-be-reading-your-book-wrong/index.php?id_ev=<?php echo $product['id_ev']; ?>"><?php echo $product['nom_ev']; ?></a></h3>





        
        <div class="detail-date">
           
           <?php  echo $product['date_ev'];  ?>
       
             </div>
            <p>             <?php  echo $product['sujet_res_ev'];  ?></p>
        
       
                         <?php include_once ('server.php'); ?>

        <footer class="entry-footer">
            <a href="../10-ways-you-might-be-reading-your-book-wrong/index.php?id_ev=<?php echo $product['id_ev']; ?>">Read more</a>
             <!--*****************************************************************like/dislike******************************************************************************-->
<!--*****************************************************************like/dislike******************************************************************************-->
<!--*****************************************************************like/dislike******************************************************************************-->

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;


                  <?php

    if(isset($_SESSION['id']))

    {
        $connecter = true;
      //  $core = new likecore();
           ?>


        <!-- if user likes post, style button differently -->
        <i <?php if (userLiked($product['id_ev'])): ?>
              class="fa fa-thumbs-up like-btn" 
          <?php else: ?>
              class="fa fa-thumbs-o-up like-btn"
          <?php endif ?>
          data-id="<?php echo $product['id_ev']; ?>"></i>

        <span class="likes"><?php echo getLikes($product['id_ev']); ?></span>
        
        &nbsp;&nbsp;&nbsp;&nbsp;

        <!-- if user dislikes post, style button differently -->


        <i 
          <?php if (userDisliked($product['id_ev'])): ?>
              class="fa fa-thumbs-down dislike-btn" 
          <?php else: ?>
              class="fa fa-thumbs-o-down dislike-btn"
          <?php endif ?>
          data-id="<?php echo $product['id_ev'] ?>"></i>
        <span class="dislikes"><?php echo getDislikes($product['id_ev']); ?></span>
    <script src="scripts.js"> </script>


<?php
}
else{
        $connecter = false;
    //   $core = new likecore();
?>


      <!-- if user likes post, style button differently -->
        <i <?php if (userLiked($product['id_ev'])): ?>
            <p readonly class="fa fa-thumbs-up like-btn"></p> 
          <?php else: ?>
              
            <p  class="fa fa-thumbs-o-up like-btn"></p>
          <?php endif ?>
          </i>
        <span class="likes"><?php echo getLikes($product['id_ev']); ?></span>
        
        &nbsp;&nbsp;&nbsp;&nbsp;

        <!-- if user dislikes post, style button differently -->
        <i 
          <?php if (userDisliked($product['id_ev'])): ?>
            <p readonly class="fa fa-thumbs-down dislike-btn"></p>
          <?php else: ?>
            <p  class="fa fa-thumbs-o-down dislike-btn"></p>
          <?php endif ?>
          </i>
        <span class="dislikes"><?php echo getDislikes($product['id_ev']); ?></span>
    <script src="scripts.js"></script>


<?php
}
?>



<!--*****************************************************************like/dislike******************************************************************************-->
<!--*****************************************************************like/dislike******************************************************************************-->
<!--*****************************************************************like/dislike******************************************************************************-->


<!--********************************************************************************-->







    </div>
</article><!-- #post-## -->




<?php }else{?>



<article id="post-<?php echo $product['id_ev']; ?>" class="clearfix post-54 post type-post status-publish format-gallery has-post-thumbnail hentry category-action category-comedy category-drama tag-best-sellers tag-comics tag-fiction tag-litterature post_format-post-format-gallery">

    <div class="wrap-left">
        
            <div id="gallery-nav<?php echo $product['id_ev']; ?>" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

             <?php  if ($product['image_ev']!=null){ ?>
                                                            <div class="item ">
                        <img style="width:100%;" data-src="holder.js" src="../wp-content/uploads/<?php  echo $product['image_ev'];  ?>"
                             alt=""/>
                    </div>
            <?php }  ?>


            <?php  if ($product['image_ev1']!=null){ ?>
                                                            <div class="item active">
                        <img style="width:100%;" data-src="holder.js" src="../wp-content/uploads/<?php  echo $product['image_ev1'];  ?>"
                             alt=""/>
                    </div>

            <?php }  ?>
                        <?php  if ($product['image_ev2']!=null){ ?>
                                                                    <div class="item ">
                        <img style="width:100%;" data-src="holder.js" src="../wp-content/uploads/<?php  echo $product['image_ev2'];  ?>"
                             alt=""/>
                    </div>

            <?php }  ?>
                        <?php  if ($product['image_ev3']!=null){ ?>
                                                                    <div class="item ">
                        <img style="width:100%;" data-src="holder.js" src="../wp-content/uploads/<?php  echo $product['image_ev3'];  ?>"
                             alt=""/>
                    </div>

            <?php }  ?>
                                        </div>
        <a class="left control" href="#gallery-nav<?php echo $product['id_ev']; ?>" role="button" data-slide="prev">
            <span class="fa fa-angle-left"></span>
        </a>
        <a class="right control" href="#gallery-nav<?php echo $product['id_ev']; ?>" role="button" data-slide="next">
            <span class="fa fa-angle-right"></span>
        </a>
    </div>
        </div>

    

    <div class="wrap-right">

        <h3 class="entry-title"><a href="../10-ways-you-might-be-reading-your-book-wrong/index.php?id_ev=<?php echo $product['id_ev']; ?>"><?php echo $product['nom_ev']; ?></a></h3>

        
        <div class="detail-date">
                        <?php  echo $product['date_ev'];  ?>


                   <p>             <?php  echo $product['sujet_res_ev'];  ?></p>

               </div>

                
        <footer class="entry-footer">
            <a href="../10-ways-you-might-be-reading-your-book-wrong/index.php?id_ev=<?php echo $product['id_ev']; ?>">Read more</a>

<!--******************************************************************************like/dislike******************************************************************************-->
             
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;

                         <?php include_once ('server.php'); ?>

                  <?php
                  

    if(isset($_SESSION['id']))

    {
        $connecter = true;
      //  $core = new likecore();
           ?>


        <!-- if user likes post, style button differently -->
        <i <?php if (userLiked($product['id_ev'])): ?>
              class="fa fa-thumbs-up like-btn" 
          <?php else: ?>
              class="fa fa-thumbs-o-up like-btn"
          <?php endif ?>
          data-id="<?php echo $product['id_ev']; ?>"></i>

        <span class="likes"><?php echo getLikes($product['id_ev']); ?></span>
        
        &nbsp;&nbsp;&nbsp;&nbsp;

        <!-- if user dislikes post, style button differently -->


        <i 
          <?php if (userDisliked($product['id_ev'])): ?>
              class="fa fa-thumbs-down dislike-btn" 
          <?php else: ?>
              class="fa fa-thumbs-o-down dislike-btn"
          <?php endif ?>
          data-id="<?php echo $product['id_ev'] ?>"></i>
        <span class="dislikes"><?php echo getDislikes($product['id_ev']); ?></span>
    <script src="scripts.js"> </script>


<?php
}
else{
        $connecter = false;
    //   $core = new likecore();
?>


      <!-- if user likes post, style button differently -->
        <i <?php if (userLiked($product['id_ev'])): ?>
            <p readonly class="fa fa-thumbs-up like-btn"></p> 
          <?php else: ?>
              
            <p  class="fa fa-thumbs-o-up like-btn"></p>
          <?php endif ?>
          </i>
        <span class="likes"><?php echo getLikes($product['id_ev']); ?></span>
        
        &nbsp;&nbsp;&nbsp;&nbsp;

        <!-- if user dislikes post, style button differently -->
        <i 
          <?php if (userDisliked($product['id_ev'])): ?>
            <p readonly class="fa fa-thumbs-down dislike-btn"></p>
          <?php else: ?>
            <p  class="fa fa-thumbs-o-down dislike-btn"></p>
          <?php endif ?>
          </i>
        <span class="dislikes"><?php echo getDislikes($product['id_ev']); ?></span>
    <script src="scripts.js"></script>


<?php
}
?>

<!--******************************************************************************like/dislike******************************************************************************-->

</article><!-- #post-## -->
<?php  }

?>
<?php endwhile; ?>


<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->




        <nav class="paging-navigation clearfix">
            
                    <?php  echo $paginationCTR;   ?>

                    </nav><!-- .navigation -->
        
            </main><!-- #content -->
        </div>

                    
            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
                <div id="widget-area" class="widget-area">

<!--    

    <aside id="search-3" class="widget widget_search"><form action="http://demo.cmssuperheroes.com/themeforest/bookjunky/" class="searchform"  method="get">
    <div class="wrap-search">
        <input type="text" class="form-search" name="q" value="" placeholder="Search...">
        <button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        <input type="hidden" name="post_type" value="post" />
    </div>
</form></aside>
-->
    <div class="wrap-search">
 
 <form method="GET">
              
                                  
                                          <input class="form-search" type="text" name="q" id="rech" placeholder="rechercher..." value="">
                              
                              <br>
                              <br>
                              <input  class="form-search" type="date" name="date_rech" id="rech"  value="">
                                      &nbsp;&nbsp;&nbsp;&nbsp;
                                      &nbsp;&nbsp;&nbsp;&nbsp;

        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;                                      
        &nbsp;&nbsp;&nbsp;&nbsp;


  <button class="fa fa-search" id="valide" type="submit" name="button" >valider</button>

</form><br>
<br><br>


</form><br>







<!--*********************************************************tri par date les articles*****************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->


<aside id="cms_recent_posts-2" class="widget cms-recent-posts"><h3 class="wg-title">A Venir</h3>                                   


<?php
include_once "C:/wamp64/www/AvenirCulturel/Config.php";
include_once "C:/wamp64/www/AvenirCulturel/Core/evenementcore.php";


        $ev_classe = New evenementcore();
$evs = $ev_classe->trievenement();

$count=0;

        while ($product = $evs->fetch(PDO::FETCH_ASSOC)) :

                $count++;
                if($count<6)
                {

?>


 <article class="recent-post-item clearfix post-60 post type-post status-publish format-standard has-post-thumbnail hentry category-action category-comedy category-drama tag-best-sellers tag-comics tag-fiction tag-litterature tag-lorem-ipsum">
                    <div class="recent-post-thumbnail">





                        <a href="../10-ways-you-might-be-reading-your-book-wrong/index.php"><img width="150" height="120" src="../wp-content/uploads/<?php echo $product['image_ev'];  ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" sizes="(max-width: 150px) 100vw, 150px" /></a>
                    </div>
                    <div class="recent-post-content">
                        <a class="entry-widget-title" href="../10-ways-you-might-be-reading-your-book-wrong/index.php?id_ev=<?php echo $product['id_ev']; ?>"><?php echo $product['nom_ev']; ?></a>

                        <p class="date-time"><?php  echo $product['date_ev'];  ?></p>
                    </div>

                </article>








            <?php  } endwhile;  ?>

<!--***************************************************************************************************************************************************************************-->
<!--***************************************************************************************************************************************************************************-->







               
                       
                            <!-- END WIDGET -->
        </aside>
        </div><!-- .widget-area -->            </div>

        
    </div>
</section><!-- #primary -->

    </div><!-- .site-content -->
    <footer class="site-footer">
        <div id="footer-top">
            <div class="container">
                <div class="row">

                                    <div class="wrap-about col-md-3 col-sm-12 col-xs-12 col-lg-4">
                        <div class="footer-about">
        <a href="../index.html"><img class="logo-footer"
                                                             src="../wp-content/themes/book-junky/assets/images/footer-logo.png"
                                                             alt="Book Junky"></a>
        <p>Suspendisse potenti. Nulla facilisi. Vestibulum non blandit nulla. Vivamus id orci condimentum, suscipit nunc non, viverra justo. Phasellus sit amet justo ac felis sagittis elementum a at dui.</p>
                    <ul>
                                    <li><a href="#"><i
                                    class="zmdi zmdi-facebook-box"></i></a></li>
                                                    <li><a href="#"><img
                                    src="../wp-content/themes/book-junky/assets/images/instagram.png"
                                    alt="Instagram"></a></li>
                                                    <li><a href="#"><i
                                    class="zmdi zmdi-twitter-box"></i></a></li>
                                                                                                                            </ul>
                </div>
                    </div>
                <div class="col-md-3 col-sm-12 col-xs-12"><aside id="recent_views_book_2-2" class="widget-footer widget_recent_views_book_2"><h3 class="wg-ft-title">THIS WEEKS REVIEWD</h3>        <div class="recent-review-2">
                            <div class="recent-review-item clearfix">
                
                    <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #000000">
                        <a href="../shop/freefall/index.html">
                            <img src="../wp-content/uploads/freefall.jpg"
                             alt="Thumbnail">
                         </a>
                    </div>
                    <div class="contents">

                        <a href="../shop/freefall/index.html" class="title">

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
                        <a href="../shop/darknet/index.html">
                            <img src="../wp-content/uploads/darknet.jpg"
                             alt="Thumbnail">
                         </a>
                    </div>
                    <div class="contents">

                        <a href="../shop/darknet/index.html" class="title">

                           Darknet                        </a>
                        <div class="author-product">
                            by Matthew Mather                        </div>

                        <div class="woocommerce"><div class="woocommerce-product-rating"><span class="star-rating" style="color:;"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></span></div></div>                    </div>
                </div>
                                <div class="recent-review-item clearfix">
                
                    <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #ededa6">
                        <a href="../shop/the-happy-lemon/index.html">
                            <img src="../wp-content/uploads/the_happy_lemon.jpg"
                             alt="Thumbnail">
                         </a>
                    </div>
                    <div class="contents">

                        <a href="../shop/the-happy-lemon/index.html" class="title">

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

            <form class="login_form" id="login_form" method="post" action="#">
                <h2>Please Login</h2>
                <input type="text" class="alert_status" readonly>
                <label for="login_user"> Username</label>
                <input type="text" name="login_user" id="login_user" />
                <label for="pass_user"> Password </label>
                <input type="password" name="pass_user" id="pass_user" />
                <label for="rememberme" id="lb_rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label>
                <input type="submit" name="login_submit" value="LOGIN" class="login_submit" />

                <div class="social-login">
                                        
                    
                                    </div>
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



  









    <script src='../../../../www.google.com/recaptcha/api.js'></script>
    <script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var flexFavorites = {"ajax":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","action":"like_post"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/flex-favorites/assets/js/flex-favorites.js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments_ef2fb5d85d4ddcc5d0939ad45105c3a3"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>
<script type='text/javascript' src='../wp-content/themes/book-junky/assets/js/main.js'></script>
<script type='text/javascript' src='../wp-content/themes/book-junky/assets/js/jquery-ui.js'></script>
<script type='text/javascript' src='../wp-content/themes/book-junky/assets/js/jQAllRangeSliders-min.js'></script>
<script type='text/javascript' src='../wp-content/themes/book-junky/assets/js/book-junky.js'></script>
<script type='text/javascript' src='../wp-content/themes/book-junky/assets/js/menu.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var nectarLove = {"ajaxurl":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","postID":"105","rooturl":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/themes/book-junky/assets/js/post_favorite.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var bj_handle = {"ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/themes/book-junky/assets/js/bj-handle.js'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min.js'></script>




</body>

<!-- Mirrored from demo.cmssuperheroes.com/themeforest/bookjunky/news/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 22:29:44 GMT -->




</html>













<!-- Dynamic page generated in 0.787 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-02-03 22:23:18 -->

<!-- super cache -->