<?php
include '../Core/LoginCore.php';
include '../Core/LivreCore.php';
include '../Core/AuteurCore.php';
function countLivre($compte)
{
    $c=Connexion::getConnexion();
    $sql="select * from bibliotheque WHERE ID_COMPTE='$compte' ";
        $liste=$c->query($sql);
        return $liste->rowCount();
}
require_once '../Core/googlelogin/config.php';
$url=$gClient->createAuthUrl();
?>

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
    <link rel='stylesheet' id='cms-plugin-stylesheet-css'  href='wp-content/plugins/cmssuperheroesv2/assets/css/cms-style.css' type='text/css' media='all' />
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
<div id="div1" >
    <p id="textM">Un mail a été envoyé a votre adresse veuillez confirmer votre inscription svp </p>
    </div><br>
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
                        <a id="bienV" style="font-size: 18px;"> <?php echo $_GET['Inscription'].' Bienvenue a notre librairie :) '; ?> </a>
                            <script>
                                var w=document.getElementById('bienV');
                                setTimeout((function(){w.innerHTML=''; location.assign('http://localhost/AvenirCulturel/Views/index.php');  }),4000);
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
                        <center>
                        <div class="col-md-3">
                            <img style="width: 80%;" src="<?php if(isset($_SESSION['picture'])) echo $_SESSION['picture'] ?>">
                        </div>
                        </center>


                        <?php
                            if(isset($_SESSION['id'])) {
                            ?>
                            <a href="#">FAQ</a><a href="#">Contact</a>
                            <?php

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
<a href="user-profile/book-shelf/DonnesProfile.php">
    <strong> <?php echo $_SESSION['id'];
                    echo $_SESSION['NOM'] ?> </strong>
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
                                                                        <a href="shop-cart/index.html">

                                        Mon Panier                                                                            </a>
                                                                </h5>
                                                                    <span>
                                0.00                            </span>
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
                    
                    <form action="http://demo.cmssuperheroes.com/themeforest/bookjunky/" class="searchform clearfix"  method="get">
                        <div class="wrap-search clearfix">
                            <input type="text" class="form-search" name="s" value="" placeholder="Rechercher un livre, un auteur, une collection ...">

                                <div class="wrap-cat">
                                    
    <select name="product_cat" id="product_cat">

        <option value="">Catégories </option>
        <option value=Arts>Arts</option>
        <option value=Dictionnaires>Dictionnaires </option>
        <option value=Droit>Droit &amp; Sciences Politiques </option>
        <option value=Droit>Cuisine </option>
        <option value=Histoire>Histoire &amp; Géographie</option>
        <option value=Informatique>Informatique &amp; multimedia </option>    
        <option value=Jeunesse>Jeunesse</option>
        <option value=Littérature>Littérature &amp; Linguistique</option>
        <option value=Loisirs>Loisirs</option>
        <option value=Religions>Religions &amp; Spiritualités</option>
        <option value=Romans>Romans</option>
        <option value=Scolaire>Scolaire &amp; pédagogie</option>
        <option value=Economiques>Sciences Economiques &amp; Gestion</option>
        <option value=Humaines>Sciences Humaines</option>
        <option value=Humaines>Sciences Techniques &amp; High-Tech </option>
        </select>
                                    </div>
                        </div>
                         <button type="submit" class="search-submit">Ok</button>
                        <input type="hidden" name="post_type" value="product" />
                    </form>
                </div><!-- #site-logo -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="header-navigation" class="col-xs-12 cshero-main-header sticky-desktop">

                <nav id="site-navigation" class="main-navigation">

                    <div class="menu-primary-menu-container"><ul id="menu-primary-menu" class="nav-menu menu-main-menu"><li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children no_group abccs menu-item-11" data-depth="0"><a href="index.php" class=""><span class="menu-title">Accueil</span></a>
<ul class='standar-dropdown standard autodrop_submenu sub-menu' style="width:200px;">
    <li id="menu-item-420" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-420" data-depth="1"><a href="homepage-1/index.html" class=""><span class="menu-title">Page 1</span></a></li>
    <li id="menu-item-419" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-419" data-depth="1"><a href="homepage-2/index.html" class=""><span class="menu-title">Page 2</span></a></li>
    <li id="menu-item-421" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-421" data-depth="1"><a href="homepage-3/index.html" class=""><span class="menu-title">Page 3</span></a></li>
    <li id="menu-item-418" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-418" data-depth="1"><a href="homepage-4/index.html" class=""><span class="menu-title">Page 4</span></a></li>
    <li id="menu-item-417" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-417" data-depth="1"><a href="homepage-5/index.html" class=""><span class="menu-title">Page 5</span></a></li>
</ul>
</li>
<li id="menu-item-514" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-mega-menu no_group menu-item-514" data-depth="0"><a href="#" class=""><span class="menu-title">Catalogue</span></a>
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
<li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children no_group menu-item-250" data-depth="0"><a href="shop/index.html" class=""><span class="menu-title">événement</span></a>
<ul class='standar-dropdown standard autodrop_submenu sub-menu' style="width:200px;">
    <li id="menu-item-403" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-403" data-depth="1"><a href="shop-cart/index.html" class=""><span class="menu-title">événements programmés</span></a></li>
    <li id="menu-item-402" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-402" data-depth="1"><a href="shop-checkout/index.html" class=""><span class="menu-title">Historique des événements</span></a></li>
</ul>
</li>
<li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children no_group menu-item-17" data-depth="0"><a href="#" class=""><span class="menu-title">Maisons d'édition</span></a>
<ul class='standar-dropdown standard autodrop_submenu sub-menu' style="width:200px;">
    <li id="menu-item-236" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children no_group menu-item-236" data-depth="1"><a href="#" class=""><span class="menu-title">Shortcodes</span></a>
    <ul class='   sub-menu' style="">
        <li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-242" data-depth="2"><a href="buttons/index.html" class=""><span class="menu-title">Buttons</span></a></li>
        <li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-241" data-depth="2"><a href="lightboxes/index.html" class=""><span class="menu-title">Lightboxes</span></a></li>
        <li id="menu-item-426" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-426" data-depth="2"><a href="book-displays/index.html" class=""><span class="menu-title">Book Displays</span></a></li>
        <li id="menu-item-240" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-240" data-depth="2"><a href="message-boxes/index.html" class=""><span class="menu-title">Message Boxes</span></a></li>
        <li id="menu-item-239" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-239" data-depth="2"><a href="team/index.html" class=""><span class="menu-title">Team</span></a></li>
        <li id="menu-item-238" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-238" data-depth="2"><a href="accordions/index.html" class=""><span class="menu-title">Accordions</span></a></li>
        <li id="menu-item-237" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-237" data-depth="2"><a href="news-styles/index.html" class=""><span class="menu-title">News Styles</span></a></li>
    </ul>
</li>
</ul>
</li>
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
                
                    <div class="cms-carousel-item clearfix" style="background-color: #ededa6;color:black;">

                        <a class="title-product" style="color:black !important;"
                           href="shop/the-happy-lemon/index.html">The Happy Lemon</a>

                        <div class="wrap-info">

                            <p class="product-author" style="color:black !important;">

                                by: Kurt Yamashita                            </p>
                            <div class="woocommerce"><div class="woocommerce-product-rating"><span class="star-rating bj-color-black" style="color:black;"><span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">2</span> customer ratings</span></span><span class="bj-rating-counts" style="color:black;">2 Ratings</span></div></div>                            <div class="excerpt-product" style="color:black !important;">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt                            </div>
                            <a class="view-shop"
                               style="color: black"
                               href="shop/the-happy-lemon/index.html">View in Book Store                                <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>

                        <div class="post-thumbnail" style="box-shadow:0 5px 8px#ededa6"><img width="330" height="500" src="wp-content/uploads/the_happy_lemon.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" /></div>                    </div>
                    
                    <div class="cms-carousel-item clearfix" style="background-color: #191f12;color:white;">

                        <a class="title-product" style="color:white !important;"
                           href="shop/aaaaa/index.html">Spells</a>

                        <div class="wrap-info">

                            <p class="product-author" style="color:white !important;">

                                by: Aprilynne Pike                            </p>
                            <div class="woocommerce">
                <div class="woocommerce-product-rating">
                <span class="star-rating  bj-color-white">
                    <span style="width:0%"></span>
                </span><span class="bj-rating-counts" style="color:white;">0 Ratings</span></div>
                </div>                            <div class="excerpt-product" style="color:white !important;">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt                            </div>
                            <a class="view-shop"
                               style="color: #191f12"
                               href="shop/aaaaa/index.html">View in Book Store                                <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>

                        <div class="post-thumbnail" style="box-shadow:0 5px 8px#191f12"><img width="300" height="455" src="wp-content/uploads/book-2.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" /></div>                    </div>
                    
                    <div class="cms-carousel-item clearfix" style="background-image: url(_http_/demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/bg-product-1.html);background-size: cover;background-repeat: no-repeat;">

                        <a class="title-product" style=""
                           href="shop/the-world-of-abstract-art/index.html">The World of Abstract Art</a>

                        <div class="wrap-info">

                            <p class="product-author" style="">

                                by: Emily Robbins & J.D Hayes                            </p>
                            <div class="woocommerce"><div class="woocommerce-product-rating"><span class="star-rating bj-color-white" style="color:white;"><span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5 based on <span class="rating">5</span> customer ratings</span></span><span class="bj-rating-counts" style="color:white;">5 Ratings</span></div></div>                            <div class="excerpt-product" style="">

                                Kroin eu sapien eget ligula consequat vestibulum sit amet in mauris. Integer commodo                            </div>
                            <a class="view-shop"
                               style="color: #4f4387"
                               href="shop/the-world-of-abstract-art/index.html">View in Book Store                                <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>

                        <div class="post-thumbnail" style="box-shadow:0 5px 8px#4f4387"><img width="299" height="455" src="wp-content/uploads/the_world.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" /></div>                    </div>
                    
                    <div class="cms-carousel-item clearfix" style="background-color: #5a5b99;color:white;">

                        <a class="title-product" style="color:white !important;"
                           href="shop/nightshade/index.html">Nightshade</a>

                        <div class="wrap-info">

                            <p class="product-author" style="color:white !important;">

                                by: Andrea Cremer                            </p>
                            <div class="woocommerce">
                <div class="woocommerce-product-rating">
                <span class="star-rating  bj-color-white">
                    <span style="width:0%"></span>
                </span><span class="bj-rating-counts" style="color:white;">0 Ratings</span></div>
                </div>                            <div class="excerpt-product" style="color:white !important;">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt                            </div>
                            <a class="view-shop"
                               style="color: #5a5b99"
                               href="shop/nightshade/index.html">View in Book Store                                <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>

                        <div class="post-thumbnail" style="box-shadow:0 5px 8px#5a5b99"><img width="330" height="500" src="wp-content/uploads/nightshade.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" /></div>                    </div>
                    
                    <div class="cms-carousel-item clearfix" style="background-color: #24655e;color:white;">

                        <a class="title-product" style="color:white !important;"
                           href="shop/history-of-modern-architecture/index.html">History of Modern Architecture</a>

                        <div class="wrap-info">

                            <p class="product-author" style="color:white !important;">

                                by: Richard Phillips                            </p>
                            <div class="woocommerce">
                <div class="woocommerce-product-rating">
                <span class="star-rating  bj-color-white">
                    <span style="width:0%"></span>
                </span><span class="bj-rating-counts" style="color:white;">0 Ratings</span></div>
                </div>                            <div class="excerpt-product" style="color:white !important;">

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt                            </div>
                            <a class="view-shop"
                               style="color: #24655e"
                               href="shop/history-of-modern-architecture/index.html">View in Book Store                                <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>

                        <div class="post-thumbnail" style="box-shadow:0 5px 8px#24655e"><img width="330" height="500" src="wp-content/uploads/history_of_modern_architecture.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" /></div>                    </div>
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
            
            <aside id="recent_product-2" class="widget-home widget_recent_product">
                <h3 class="wg-home-title">LES NOUVEAUTÉS</h3>
                <?php

                $affiche=new LivreCore();
                $afficheNouv=$affiche->afficherNouveaute();
                foreach ($afficheNouv as $nouv) {
                    ?>
                    <div class="review-item clearfix">
                        <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #e9e7e8">
                            <a href="shop/Livres/index?Livre=<?php echo $nouv['ID']  ?>">
                                <img src="<?php echo $nouv['IMG_PATH'];?>" alt="Thumbnail">
                            </a>
                        </div>
                        <div class="contents">
                            <a href="shop/Livres/index?Livre=<?php echo $nouv['ID']  ?>" class="title">
                                <?php echo $nouv['NOM'];?> </a>
                            <div class="author-product">
                                by <?php echo $nouv['AUTEUR'];?>
                            </div>

                            <span class="price"><del>
            <span class="woocommerce-Price-amount amount">
                <span class="woocommerce-Price-currencySymbol">&pound;</span><?php echo $nouv['ANCIEN_PRIX'];?></span>
        </del> <ins><span class="woocommerce-Price-amount amount">
                <span class="woocommerce-Price-currencySymbol">&pound;</span><?php echo $nouv['PRIX'];?></span>
        </ins></span>
                        </div>
                    </div>
                    <?php
                }
                ?>

                </aside>
                                <?php
                                $AfficherAut=$Aut->afficherAut();
                                foreach ($AfficherAut as $rows)
                                {
                                ?>
<aside id="browse_author-3" class="widget-home widget_browse_author"><h3 class="wg-home-title">PAR AUTEURS</h3>

            <div class="bj-brs-author-item clearfix" style="display:block">
                <div class="wrap-thumbnail">
                    <a href="author-profile/index.php?ID_AUT=<?php echo $rows['ID_AUT']; ?>">
                        <img src="<?php if($rows['IMG_PATH']=='') echo 'wp-content/uploads/anonyme.png'; else echo $rows['IMG_PATH']; ?>" alt="">
                    </a>
                </div>
                <div class="wrap-info">
                    <a href="author-profile/index.php?ID_AUT=<?php echo $rows['ID_AUT']; ?>"><?php echo $rows['LOGIN']; ?></a>
                    <div class="bj-brs-author-count"><?php echo $rows['LIVRE']; ?></div>
                </div>
            </div>
    <?php
    }
    ?>
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
                <div class="row cms-grid cms-grid-masonry-2">
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
                foreach ($Livres as $row)
                {
                ?>
        <div class="cms-grid-item col-lg-2.4 col-md-4 col-sm-6 col-xs-12 new-col-lg-5"
     data-groups='["all","category-comedy","category-thriller"]'>
    <figure class="zoom_livre" >
    <div class="cms-grid-media" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #e9e7e8;" onmouseover="this.style.boxShadow ='0 0 20px 20px #e9e7e8';" onmouseout="this.style.boxShadow ='0 0 15px -20px #e9e7e8';">
                     <a href="shop/Livres/index.php?Livre=<?php echo $row['ID'];?>">
                      <img alt="<?php echo $row['CATEGORY'];?>" title="<?php echo $row['DESCRIPTION'];?>" width="330" height="500" src="<?php echo $row['IMG_PATH']?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" />
                         <figcaption class="category_text"><?php echo $row['CATEGORY'];?></figcaption>
                     </a>
                        </div>
                        </figure>
<br>
                        <div class="info-product">
                         <a class="product-title" href="shop/Livres/index.php?Livre='<?php echo $row['ID'];?>'"><?php echo $row['NOM']; ?></a>
                            <p class="product-author">by: <?php echo $row['AUTEUR']; ?></p>
                            <span class="price">
<del>
<span class="woocommerce-Price-amount amount">
<span class="woocommerce-Price-currencySymbol">&pound;</span><?php echo $row['ANCIEN_PRIX']; ?></span></del>

                            <ins>
<span class="woocommerce-Price-amount amount">
<span class="woocommerce-Price-currencySymbol">&pound;</span><?php echo $row['PRIX']; ?></span></ins></span>
                        </div></div>
                    <?php
                    }
                    ?>
                </div>
            </div>
              </div></div>
                                <?php
                    for ($i=1;$i<=$pagesTotal;$i++)
                    {
                    if(isset($_GET['Category']))
                    {
                        echo '<a href="index.php?Category='.$_GET['Category'].'&amp;page='.$i.'  "> '.$i.'</a>';
                    }
                    else
                    {
                            echo '<a href="index.php?page='.$i.'  "> '.$i.'</a>';
                    }
                    }

                    ?>
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
         <h2 style="font-size: 15px;color: #888a92;text-align: left;font-family:Voces;font-weight:400;font-style:normal" class="heading">RECOMMENDED FOR YOU</h2>
      <div class="wrap-link"><a href="#" target="_self">All Recommended<i class="zmdi zmdi-chevron-right"></i>
      </a></div></div></div></div></div></div>
    <div class="vc_empty_space"   style="height: 12px" ><span class="vc_empty_space_inner"></span></div>

            <div class="cms-grid-wraper grid-2 extend-space" id="cms-grid-2">
                 

                <div class="row cms-grid">
<div class="cms-grid-item col-lg-2.4 col-md-4 col-sm-6 col-xs-12 new-col-lg-5"  data-groups='["all","category-comedy","category-thriller"]'>
                            <div class="cms-grid-media" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #e9e7e8;" onmouseover="this.style.boxShadow ='0 0 20px 0 #e9e7e8';" onmouseout="this.style.boxShadow ='0 0 15px -2px #e9e7e8';" ><a href="shop/shattered/index.html"><img width="330" height="500" src="wp-content/uploads/shattered.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" /></a></div>
                            <div class="info-product">
                                <a class="product-title" href="shop/shattered/index.html">Shattered</a>
                                <p class="product-author">by: Peter Cawdron</p>

                                
    <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>14.99</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>9.99</span></ins></span>
                            </div>
                        </div>
                        
                        <div class="cms-grid-item col-lg-2.4 col-md-4 col-sm-6 col-xs-12 new-col-lg-5"  data-groups='["all","category-science","category-space-nature","category-thriller"]'>
                            <div class="cms-grid-media" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #000000;" onmouseover="this.style.boxShadow ='0 0 20px 0 #000000';" onmouseout="this.style.boxShadow ='0 0 15px -2px #000000';" ><a href="shop/freefall/index.html"><img width="330" height="500" src="wp-content/uploads/freefall.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" /></a></div>
                            <div class="info-product">
                                <a class="product-title" href="shop/freefall/index.html">Freefall</a>
                                <p class="product-author">by: Peter Cawdron</p>

                                
    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>11.99</span></span>
                            </div>
                        </div>
                        
                        <div class="cms-grid-item col-lg-2.4 col-md-4 col-sm-6 col-xs-12 new-col-lg-5"  data-groups='["all","category-thriller"]'>
                            <div class="cms-grid-media" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #f5f5f5;" onmouseover="this.style.boxShadow ='0 0 20px 0 #f5f5f5';" onmouseout="this.style.boxShadow ='0 0 15px -2px #f5f5f5';" ><a href="shop/darknet/index.html"><img width="330" height="500" src="wp-content/uploads/darknet.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" /></a></div>
                            <div class="info-product">
                                <a class="product-title" href="shop/darknet/index.html">Darknet</a>
                                <p class="product-author">by: Matthew Mather</p>

                                
    <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>8.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>7.00</span></ins></span>
                            </div>
                        </div>
                        
                        <div class="cms-grid-item col-lg-2.4 col-md-4 col-sm-6 col-xs-12 new-col-lg-5"  data-groups='["all","category-thriller"]'>
                            <div class="cms-grid-media" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #180b06;" onmouseover="this.style.boxShadow ='0 0 20px 0 #180b06';" onmouseout="this.style.boxShadow ='0 0 15px -2px #180b06';" ><a href="shop/holy-ghosts/index.html"><img width="330" height="500" src="wp-content/uploads/holy_ghosts.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" /></a></div>
                            <div class="info-product">
                                <a class="product-title" href="shop/holy-ghosts/index.html">Holy Ghosts</a>
                                <p class="product-author">by: David J. Schmidt</p>

                                
    <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>8.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>6.00</span></ins></span>
                            </div>
                        </div>
                        
                        <div class="cms-grid-item col-lg-2.4 col-md-4 col-sm-6 col-xs-12 new-col-lg-5"  data-groups='["all","category-business","category-home-garden"]'>
                            <div class="cms-grid-media" style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #332c28;" onmouseover="this.style.boxShadow ='0 0 20px 0 #332c28';" onmouseout="this.style.boxShadow ='0 0 15px -2px #332c28';" ><a href="shop/radical-gardening-politics-idealism-rebellion-in-the-garden/index.html"><img width="330" height="500" src="wp-content/uploads/radical_gardening.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" /></a></div>
                            <div class="info-product">
                                <a class="product-title" href="shop/radical-gardening-politics-idealism-rebellion-in-the-garden/index.html">Radical Gardening</a>
                                <p class="product-author">by: George McKay</p>

                                
    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span>4.00</span></span>
                            </div>
                        </div>
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