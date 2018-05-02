<!DOCTYPE html>
<html lang="en-US">

<?php
if(session_status()==PHP_SESSION_NONE)
{
    session_start();
}
include 'ParametresCompte.php';
function countLivre($ID_C)
{
    $c=Connexion::getConnexion();
    $sql="select * from bibliotheque WHERE ID_COMPTE='$ID_C'";
    $liste=$c->query($sql);
    return $liste->rowCount();
}

?>

<!-- Mirrored from demo.cmssuperheroes.com/themeforest/bookjunky/user-profile/book-shelf/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 22:27:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1, width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="../../xmlrpc.php" />
<link rel="shortcut icon" type="image/x-icon" href="../../wp-content/uploads/fav-1.png" />
<title>Parametres du compte &#8211; L.A.C</title>
<link rel='dns-prefetch' href='http://ajax.aspnetcdn.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Book Junky &raquo; Feed" href="../../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Book Junky &raquo; Comments Feed" href="../../comments/feed/index.html" />
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
<link rel='stylesheet' id='select2-css'  href='../../wp-content/plugins/woocommerce/assets/css/select2.css' type='text/css' media='all' />
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
<style id='custom-dynamic-inline-css' type='text/css'>
.site-content{padding-top:;}.site-content{padding-bottom:;}.header-3 .main-logo-3{max-height:200px;}.site-content{padding-top:0;}.site-content{padding-bottom:0;}
</style>
<link rel='stylesheet' id='js_composer_front-css'  href='../../wp-content/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' />
<script type='text/javascript' src='../../wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='../../../../../ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js'></script>
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
<script type='text/javascript'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-includes/js/zxcvbn-async.min.js'></script>
<script type='text/javascript' src='../../wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js'></script>
<script type='text/javascript' src='../../wp-content/themes/book-junky/assets/js/bootstrap.min.js'></script>

    <link rel='https://api.w.org/' href='../../wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.2" />
<meta name="generator" content="WooCommerce 3.2.6" />
<link rel="canonical" href="../index.html" />
<link rel='shortlink' href='../../indexecc4.html?p=432' />
<link rel="alternate" type="application/json+oembed" href="../../wp-json/oembed/1.0/embed4d82.json?url=http%3A%2F%2Fdemo.cmssuperheroes.com%2Fthemeforest%2Fbookjunky%2Fuser-profile%2F" />
<link rel="alternate" type="text/xml+oembed" href="../../wp-json/oembed/1.0/embed35f0?url=http%3A%2F%2Fdemo.cmssuperheroes.com%2Fthemeforest%2Fbookjunky%2Fuser-profile%2F&amp;format=xml" />
    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <meta name='robots' content='noindex,follow' />
<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript">function setREVStartSize(e){
                try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;                   
                    if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})                  
                }catch(d){console.log("Failure at Presize of Slider:"+d)}
            };</script>
<style type="text/css" title="dynamic-css" class="options-output">body .page-title h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body .page-title h1,{opacity: 0;}.ie.wf-loading body .page-title h1,{visibility: hidden;}body{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,{opacity: 0;}.ie.wf-loading body,{visibility: hidden;}h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h1,{opacity: 0;}.ie.wf-loading h1,{visibility: hidden;}h2{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h2,{opacity: 0;}.ie.wf-loading h2,{visibility: hidden;}h3{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h3,{opacity: 0;}.ie.wf-loading h3,{visibility: hidden;}h4{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h4,{opacity: 0;}.ie.wf-loading h4,{visibility: hidden;}h5{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h5,{opacity: 0;}.ie.wf-loading h5,{visibility: hidden;}h6{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h6,{opacity: 0;}.ie.wf-loading h6,{visibility: hidden;}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1504772666848{border-top-width: 1px !important;border-top-color: #d8dadf !important;border-top-style: solid !important;}.vc_custom_1504755756862{padding-top: 0px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<body class="page-template-default page page-id-432 woocommerce-account woocommerce-page body-boxed wpb-js-composer js-comp-ver-5.2.1 vc_responsive">

<div class="wrap-boxed"><div id="page" class="hfeed site">

                    <!-- #page-title -->

    <div id="content" class="site-content">

<div id="primary" class="container">
    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <main id="main" class="site-main">

                <article id="post-432" class="post-432 page type-page status-publish hentry">
                    <div class="entry-content">
                <div class="entry-content">

                    <div class="column-sc-left wpb_column vc_column_container vc_col-sm-5 vc_col-has-fill"><div class="vc_column-inner vc_custom_1503308950049"><div class="wpb_wrapper"><div  class="vc_wp_custommenu wpb_content_element"><div class="widget widget_nav_menu"><div class="menu-shortcode-menu-container">
                                            <ul id="menu-shortcode-menu" class="menu">
                                                <li id="menu-item-213" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213"><a href="#">Modifier les parametres du compte</a></li>
                                                <li id="menu-item-212" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-212"><a href="../../book-displays/index.php">Afficher mes abonnements</a></li>
                                                <li id="menu-item-429" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-429"><a href="reclamtion.html">Reclamation</a></li>
                                                <li id="menu-item-211" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-211"><a href="../../book-displays/index.php">Mes achats</a></li>
                                                <li id="menu-item-2111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2111"><a href="../Ordres/index.php">Orders</a></li>

                                            </ul></div></div></div></div></div></div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid width-fill vc_custom_1504494642071 vc_row-has-fill">



            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid width-fill vc_custom_1504772666848 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1504755756862"><div class="wpb_wrapper"><div class="woocommerce">




                                <?php
                                require('autoload.php');
                            if(isset($_POST['modifier']))
                            {
                                if(isset($_POST['g-recaptcha-response']))
                            {
$recaptcha = new \ReCaptcha\ReCaptcha('6Lecb1AUAAAAAP_PQ199lVJQA_nL4quPVEAxkLXf');
 $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
if ($resp->isSuccess()) {

if(isset($_POST['modifier']))
          {
                                        if(isset($_GET['Token']))
                                        {

                                            if($_GET['Token']=="0000")
                                            {
                                                $param->setUsername($_GET['id']);
                                                $param->setPassword($_POST['password']);
                                                $param->mettreAjourMotDepasse();
                                            }else
                                            {
                                            $param->setUsername($_GET['id']);
                                            $param->setPassword($_POST['password']);
                                            if($param->VerifCle($_GET['Token']))
                                            {
                                                $param->mettreAjourMotDepasse();
                                                $param->SupprimerCle($_GET['Token']);
                                            }
                                            else  { echo "<script> alert('Cle invalide');</script>";}
                                            }
                                            }
                                        else
                                        {
                                            $param->setEmail($_POST['mail']);
                                            $param->setUsername($_SESSION['id']);
                                            $param->setNom($_POST['Nom']);
                                            $param->setPrenom($_POST['Prenom']);
                                            $param->setAdresse($_POST['Adresse']);
                                            $param->setDatenaiss($_POST['Date']);
                                            $param->setTel($_POST['Tel']);
                                            $param->mettreAjour();
                                        }
                                    }
                                } else {
                                        echo "<script> alert('Veuillez confirmer le captch svp');</script>";
                                    $errors = $resp->getErrorCodes();
                                }
                            }
                            }
                                ?>
<div class="wrap-woo-login">
    <div class="content-login">
    <h2> <?php if(isset($_GET['Token']))  echo "Réinitialisation du mot de passe"; else echo "Parametres du compte"?> </h2>

    <form class="woocommerce-form-login" method="post">
        <div class="input-login">
            <label <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> for="username">Nom d'utilisateur <span class="required">*</span></label>
            <input <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" <?php if(isset($_SESSION['id'])) echo "disabled";   ?>  value="<?php if(isset($_SESSION['id'])) echo $_SESSION['id']; ?> " />
        </div>
        <div class="input-login">
            <label <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> for="password">Adresse mail <span class="required">*</span></label>
            <input  <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> class="woocommerce-Input woocommerce-Input--text input-text" type="email" name="mail" id="password" value="<?php if(isset($_SESSION['id'])) echo $param->getEMAIL($_SESSION['id']); ?>" />
        </div>
        <div class="input-login">
            <label <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> for="Nom ">Nom <span class="required">*</span></label>
            <input  <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="Nom" id="Nom" value="<?php if(isset($_SESSION['id'])) echo $param->getData($_SESSION['id'],'NOM'); ?>" />
        </div>
        <div class="input-login">
            <label <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> for="Prenom">Prenom<span class="required">*</span></label>
            <input  <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="Prenom" id="Prenom" value="<?php if(isset($_SESSION['id'])) echo $param->getData($_SESSION['id'],'PRENOM'); ?>" />
        </div>
        <div class="input-login">
            <label <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> for="Adresse">Adresse<span class="required">*</span></label>
            <input  <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="Adresse" id="Adresse" value="<?php if(isset($_SESSION['id'])) echo $param->getData($_SESSION['id'],'ADRESSE'); ?>" />
        </div>
        <div class="input-login">
            <label <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> for="Tel">Tel<span class="required">*</span></label>
            <input  <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> class="woocommerce-Input woocommerce-Input--text input-text" type="text" name="Tel" id="Tel" value="<?php if(isset($_SESSION['id'])) echo $param->getData($_SESSION['id'],'TEL'); ?>" />
        </div>

        <div class="input-login">
            <label <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> for="Date">Date naiss.<span class="required">*</span></label><br>
            <input  <?php if(isset($_GET['Token']))  echo "style='display: none' "; ?> class="woocommerce-Input woocommerce-Input--text input-text" type="date" name="Date" id="Date" value="<?php if(isset($_SESSION['id'])) echo $param->getData($_SESSION['id'],'DATE_NAISS'); ?>" />
        </div>

        <div class="input-login">
            <label  <?php if(!isset($_GET['Token']))  echo "style='display: none' "; ?>  for="mail">Mot de passe<span class="required">*</span></label>
            <input  <?php if(!isset($_GET['Token']))  echo "style='display: none' "; ?> class="woocommerce-Input woocommerce-Input--text input-text" type="password"  name="password" id="mail" value="<?php if(isset($_SESSION['id'])) echo $param->getPASSWORD($_SESSION['id']); ?>" />
        </div>
        <div class="g-recaptcha" data-sitekey="6Lecb1AUAAAAAI6EgB8HrZ2ogtyl6MvXy_27k0Ps"></div>

        <p class="form-row">
            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="424ac59140" />
            <input type="hidden" name="_wp_http_referer" value="/themeforest/bookjunky/user-profile/book-shelf/" />
            <input type="submit" class="woocommerce-Button button" name="modifier" value="Modifier" /> <a href='http://localhost/AvenirCulturel/Views/user-profile/book-shelf/DonnesProfile.php?Token=0000&id=<?php if(isset($_SESSION['id'])) echo $_SESSION['id'];?>' >Changer mot de passe</a>
           <br><br><br> <a style="color: darkred;" href="../../../Core/CompteCore.php?supprimer=true">Desactiver le compte</a>
        </p>
    </form>
    </div>
</div>

</div></div></div></div></div><div class="vc_row-full-width"></div>

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
                        <a href="../../shop/freefall/index.html">
                            <img src="../../wp-content/uploads/freefall.jpg"
                             alt="Thumbnail">
                         </a>
                    </div>
                    <div class="contents">

                        <a href="../../shop/freefall/index.html" class="title">

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
                        <a href="../../shop/darknet/index.html">
                            <img src="../../wp-content/uploads/darknet.jpg"
                             alt="Thumbnail">
                         </a>
                    </div>
                    <div class="contents">

                        <a href="../../shop/darknet/index.html" class="title">

                           Darknet                        </a>
                        <div class="author-product">
                            by Matthew Mather                        </div>

                        <div class="woocommerce"><div class="woocommerce-product-rating"><span class="star-rating" style="color:;"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></span></div></div>                    </div>
                </div>
                                <div class="recent-review-item clearfix">
                
                    <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #ededa6">
                        <a href="../../shop/the-happy-lemon/index.html">
                            <img src="../../wp-content/uploads/the_happy_lemon.jpg"
                             alt="Thumbnail">
                         </a>
                    </div>
                    <div class="contents">

                        <a href="../../shop/the-happy-lemon/index.html" class="title">

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
    <script src='../../../../../www.google.com/recaptcha/api.js'></script>
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
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-admin/js/password-strength-meter.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_password_strength_meter_params = {"min_password_strength":"3","i18n_password_error":"Please enter a stronger password.","i18n_password_hint":"Hint: The password should be at least twelve characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! \" ? $ % ^ & )."};
/* ]]> */
</script>
<script type='text/javascript' src='../../wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js'></script>
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
<script type='text/javascript'>
/* <![CDATA[ */
var nectarLove = {"ajaxurl":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","postID":"432","rooturl":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky"};
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
<script type='text/javascript' src='../../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js'></script>
</body>

<!-- Mirrored from demo.cmssuperheroes.com/themeforest/bookjunky/user-profile/book-shelf/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 22:27:31 GMT -->
</html>












