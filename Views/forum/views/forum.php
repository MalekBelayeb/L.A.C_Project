<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 
include_once "../core/topiccore.php";

?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11,fc-3.2.1/datatables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/t/bs-3.3.6/jqc-1.12.0,dt-1.10.11,fc-3.2.1/datatables.min.js"> </script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script type="text/javascript" src="//localhost/livechat/php/app.php?widget-init.js"></script>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.cmssuperheroes.com/themeforest/bookjunky/shop-cart/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 22:27:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1, width=device-width" />
<link rel="stylesheet" type="text/css" href="forumss.css">
<link rel="stylesheet" type="text/css" href="cs.css">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="../xmlrpc.php" />
<link rel="shortcut icon" type="image/x-icon" href="../wp-content/uploads/fav-1.png" />
<title>Shop Cart &#8211; Book Junky</title>
<link rel='dns-prefetch' href='http://ajax.aspnetcdn.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Book Junky &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Book Junky &raquo; Comments Feed" href="../comments/feed/index.html" />
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
<link rel='stylesheet' id='cms-plugin-stylesheet-css'  href='../wp-content/plugins/cmssuperheroesv2/assets/css/cms-style.css' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='widget_style-css'  href='../wp-content/plugins/csh-login/assets/css/default.css' type='text/css' media='all' />
<link rel='stylesheet' id='layout1_style-css'  href='../wp-content/plugins/csh-login/assets/css/layout1.css' type='text/css' media='all' />
<link rel='stylesheet' id='flex-favorites-style.css-css'  href='../wp-content/plugins/flex-favorites/assets/css/flex-favorites-style.css' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='../wp-content/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='select2-css'  href='../wp-content/plugins/woocommerce/assets/css/select2.css' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='../wp-content/themes/book-junky/assets/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-style-css'  href='../wp-content/themes/book-junky/assets/css/owl.carousel.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='book-junky-font-css'  href='../wp-content/themes/book-junky/assets/css/font.css' type='text/css' media='all' />
<link rel='stylesheet' id='iThing.css-css'  href='../wp-content/themes/book-junky/assets/css/iThing.css' type='text/css' media='all' />
<link rel='stylesheet' id='book-junky-style-css'  href='../wp-content/themes/book-junky/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='book-junky-static-css'  href='../wp-content/themes/book-junky/assets/css/static.css' type='text/css' media='all' />
<link rel='stylesheet' id='custom-dynamic-css'  href='../wp-content/themes/book-junky/assets/css/custom-dynamic.css' type='text/css' media='all' />
<style id='custom-dynamic-inline-css' type='text/css'>
.site-content{padding-top:;}.site-content{padding-bottom:;}.header-3 .main-logo-3{max-height:200px;}.site-content{padding-top:;}.site-content{padding-bottom:;}
</style>
<link rel='stylesheet' id='js_composer_front-css'  href='../wp-content/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='../../../../ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js'></script>
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
var wc_add_to_cart_params = {"ajax_url":"\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/shop-cart\/","is_cart":"1","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-includes/js/zxcvbn-async.min.js'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js'></script>
<script type='text/javascript' src='../wp-content/themes/book-junky/assets/js/bootstrap.min.js'></script>
<link rel='https://api.w.org/' href='../wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.2" />
<meta name="generator" content="WooCommerce 3.2.6" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='../indexa9ab.html?p=393' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed31cb.json?url=http%3A%2F%2Fdemo.cmssuperheroes.com%2Fthemeforest%2Fbookjunky%2Fshop-cart%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed23a9?url=http%3A%2F%2Fdemo.cmssuperheroes.com%2Fthemeforest%2Fbookjunky%2Fshop-cart%2F&amp;format=xml" />
  <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
  <meta name='robots' content='noindex,follow' />
<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript">function setREVStartSize(e){
        try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;         
          if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})          
        }catch(d){console.log("Failure at Presize of Slider:"+d)}
      };</script>
<style type="text/css" title="dynamic-css" class="options-output">body .page-title h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body .page-title h1,{opacity: 0;}.ie.wf-loading body .page-title h1,{visibility: hidden;}body{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,{opacity: 0;}.ie.wf-loading body,{visibility: hidden;}h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h1,{opacity: 0;}.ie.wf-loading h1,{visibility: hidden;}h2{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h2,{opacity: 0;}.ie.wf-loading h2,{visibility: hidden;}h3{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h3,{opacity: 0;}.ie.wf-loading h3,{visibility: hidden;}h4{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h4,{opacity: 0;}.ie.wf-loading h4,{visibility: hidden;}h5{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h5,{opacity: 0;}.ie.wf-loading h5,{visibility: hidden;}h6{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h6,{opacity: 0;}.ie.wf-loading h6,{visibility: hidden;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="page-template-default page page-id-393 woocommerce-cart woocommerce-page body-boxed wpb-js-composer js-comp-ver-5.2.1 vc_responsive">
<div class="wrap-boxed"><div id="page" class="hfeed site">
  <header id="masthead" class="site-header">
    <div id="cshero-header" class="header-3">

          <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 top-left-3">

                        
                                            <img src="sess.png" width="30" height="40">
                    <?php 
                     echo $_SESSION['r'].':'.$_SESSION['l']; ?>
            <a href="#">Contact Us</a>                    </div>
                    <div class="col-xs-12 col-md-6 top-right-3">
                        <div class="wrap-book-shelf clearfix">
                            <img src="../wp-content/themes/book-junky/assets/images/icon-1.png"
                                 alt="icon 1">
                            <div class="content">
                                                                <a href="../user-profile/book-shelf/index.html"
                                   alt="My Account">
                                                                        <h5>Bookshelf</h5>

                                                                    </a>
                                                            <span class="aj-count">
                                     Book                                </span>
                            </div>
                        </div>
                        <div class="wrap-your-basket clearfix">
                            <img src="../wp-content/themes/book-junky/assets/images/icon-2.png"
                                 alt="icon 2">
                            <div class="content">
                                <h5>
                                                                        <a href="index.html">
                                        
                                        Your Basket                                                                            </a>
                                                                </h5>
                                                                    <span>
                                0.00                            </span>
                                                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="wrap-middler">
      <div class="container">

          <div class="row">

              <div class="col-xs-12 col-md-4 col-lg-3">

                  <div class="main-logo-3"><a href="../index.html"><img alt="Book Junky" src="../wp-content/themes/book-junky/assets/images/logo-2.png"></a></div>
                  <a href="#" class="menu"><i class="fa fa-bars"></i> Menu</a>
              </div>

              <div class="col-xs-12 col-md-8 col-lg-9">
                  
                  <form action="http://demo.cmssuperheroes.com/themeforest/bookjunky/" class="searchform clearfix"  method="get">
            <div class="wrap-search clearfix">
              <input class="form-control" id="myInput" type="text" placeholder="Search..">>

                <div class="wrap-cat">
                  
    <select name="product_cat" id="product_cat">

        <option value="">Browse Categories</option>
        <option value=business>Business</option><option value=children>Childrens</option><option value=comedy>Comedy</option><option value=comic>Comic</option><option value=cooking>Cooking</option><option value=fiction>Fiction</option><option value=home-garden>Home &amp; Garden</option><option value=media>Media</option><option value=romance>Romance</option><option value=science>Science</option><option value=space-nature>Space &amp; Nature</option><option value=thriller>Thriller</option>    </select>
                    </div>
            </div>
             <button type="submit" class="search-submit">Go</button>
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

                    <div class="menu-primary-menu-container"><ul id="menu-primary-menu" class="nav-menu menu-main-menu"><li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children no_group abccs menu-item-11" data-depth="0"><a href="../index.html" class=""><span class="menu-title">Home</span></a>
<ul class='standar-dropdown standard autodrop_submenu sub-menu' style="width:200px;">
  <li id="menu-item-420" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-420" data-depth="1"><a href="../homepage-1/index.html" class=""><span class="menu-title">HomePage 1</span></a></li>
  <li id="menu-item-419" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-419" data-depth="1"><a href="../homepage-2/index.html" class=""><span class="menu-title">HomePage 2</span></a></li>
  <li id="menu-item-421" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-421" data-depth="1"><a href="../homepage-3/index.html" class=""><span class="menu-title">HomePage 3</span></a></li>
  <li id="menu-item-418" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-418" data-depth="1"><a href="../homepage-4/index.html" class=""><span class="menu-title">HomePage 4</span></a></li>
  <li id="menu-item-417" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-417" data-depth="1"><a href="../homepage-5/index.html" class=""><span class="menu-title">HomePage 5</span></a></li>
</ul>
</li>
<li id="menu-item-514" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-mega-menu no_group menu-item-514" data-depth="0"><a href="#" class=""><span class="menu-title">Mega Menu</span></a>
<ul class='multicolumn columns4 drop_to_center sub-menu' style="width:800px;">
  <li id="menu-item-515" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children group menu-item-515" data-depth="1"><a href="#" class=""><span class="menu-title">Featured</span></a>
  <ul class='   sub-menu' style="">
    <li id="menu-item-516" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-516" data-depth="2"><a href="#" class=""><span class="menu-title">Highest Rated Fiction</span></a></li>
    <li id="menu-item-517" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-517" data-depth="2"><a href="#" class=""><span class="menu-title">Bestsellers</span></a></li>
    <li id="menu-item-518" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-518" data-depth="2"><a href="#" class=""><span class="menu-title">Clearance Books</span></a></li>
  </ul>
</li>
  <li id="menu-item-519" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children group menu-item-519" data-depth="1"><a href="#" class=""><span class="menu-title">Categories</span></a>
  <ul class='   sub-menu' style="">
    <li id="menu-item-520" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-520" data-depth="2"><a href="#" class=""><span class="menu-title">Crime &#038; Detectives</span></a></li>
    <li id="menu-item-521" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-521" data-depth="2"><a href="#" class=""><span class="menu-title">Comedy</span></a></li>
    <li id="menu-item-522" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-522" data-depth="2"><a href="#" class=""><span class="menu-title">Fantasy Fiction</span></a></li>
    <li id="menu-item-524" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-524" data-depth="2"><a href="#" class=""><span class="menu-title">Horror</span></a></li>
    <li id="menu-item-525" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-525" data-depth="2"><a href="#" class=""><span class="menu-title">Mystery</span></a></li>
    <li id="menu-item-526" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-526" data-depth="2"><a href="#" class=""><span class="menu-title">Romantic</span></a></li>
    <li id="menu-item-527" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-527" data-depth="2"><a href="#" class=""><span class="menu-title">Tragedy</span></a></li>
  </ul>
</li>
  <li id="menu-item-528" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children no-title group title menu-item-528" data-depth="1">
  <ul class='   sub-menu' style="">
    <li id="menu-item-529" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-529" data-depth="2"><a href="#" class=""><span class="menu-title">Thriller / Suspense</span></a></li>
    <li id="menu-item-530" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-530" data-depth="2"><a href="#" class=""><span class="menu-title">Fairy Tales</span></a></li>
    <li id="menu-item-531" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-531" data-depth="2"><a href="#" class=""><span class="menu-title">Fan Fiction</span></a></li>
    <li id="menu-item-532" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-532" data-depth="2"><a href="#" class=""><span class="menu-title">Fictional Biography</span></a></li>
    <li id="menu-item-533" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-533" data-depth="2"><a href="#" class=""><span class="menu-title">Western</span></a></li>
  </ul>
</li>
  <li id="menu-item-535" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children group menu-item-535" data-depth="1">
  <ul class='   sub-menu' style="">
    <li id="menu-item-537" class="menu-item menu-item-type-custom menu-item-object-custom no_group menu-item-537" data-depth="2"><li id="custom_html-5" class="widget_text widget widget_custom_html"><h5 class="wg-mega-menu-title">Featured book</h5><div class="textwidget custom-html-widget"><a href="#"><img src="../wp-content/uploads/mega-menu.png" alt="Featured Book"></a></div></li>
</li>
  </ul>
</li>
</ul>
</li>
<li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children no_group menu-item-250" data-depth="0"><a href="../shop/index.html" class=""><span class="menu-title">Shop</span></a>
<ul class='standar-dropdown standard autodrop_submenu sub-menu' style="width:200px;">
  <li id="menu-item-403" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-393 current_page_item no_group menu-item-403" data-depth="1"><a href="index.html" class=""><span class="menu-title">Shop Cart</span></a></li>
  <li id="menu-item-402" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-402" data-depth="1"><a href="../shop-checkout/index.html" class=""><span class="menu-title">Shop Checkout</span></a></li>
  <li id="menu-item-404" class="menu-item menu-item-type-post_type menu-item-object-product no_group menu-item-404" data-depth="1"><a href="../shop/the-world-of-abstract-art/index.html" class=""><span class="menu-title">Single Book</span></a></li>
  <li id="menu-item-470" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-470" data-depth="1"><a href="../user-profile/index.html" class=""><span class="menu-title">User Profile</span></a></li>
</ul>
</li>
<li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children no_group menu-item-17" data-depth="0"><a href="#" class=""><span class="menu-title">Pages</span></a>
<ul class='standar-dropdown standard autodrop_submenu sub-menu' style="width:200px;">
  <li id="menu-item-236" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children no_group menu-item-236" data-depth="1"><a href="#" class=""><span class="menu-title">Shortcodes</span></a>
  <ul class='   sub-menu' style="">
    <li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-242" data-depth="2"><a href="../buttons/index.html" class=""><span class="menu-title">Buttons</span></a></li>
    <li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-241" data-depth="2"><a href="../lightboxes/index.html" class=""><span class="menu-title">Lightboxes</span></a></li>
    <li id="menu-item-426" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-426" data-depth="2"><a href="../book-displays/index.html" class=""><span class="menu-title">Book Displays</span></a></li>
    <li id="menu-item-240" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-240" data-depth="2"><a href="../message-boxes/index.html" class=""><span class="menu-title">Message Boxes</span></a></li>
    <li id="menu-item-239" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-239" data-depth="2"><a href="../team/index.html" class=""><span class="menu-title">Team</span></a></li>
    <li id="menu-item-238" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-238" data-depth="2"><a href="../accordions/index.html" class=""><span class="menu-title">Accordions</span></a></li>
    <li id="menu-item-237" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-237" data-depth="2"><a href="../news-styles/index.html" class=""><span class="menu-title">News Styles</span></a></li>
  </ul>
</li>
</ul>
</li>
<li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children no_group menu-item-107" data-depth="0"><a href="../news/index.html" class=""><span class="menu-title">News</span></a>
<ul class='standar-dropdown standard autodrop_submenu sub-menu' style="width:200px;">
  <li id="menu-item-114" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-114" data-depth="1"><a href="../news-grid/index.html" class=""><span class="menu-title">News Grid</span></a></li>
  <li id="menu-item-257" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-257" data-depth="1"><a href="../news-review/index.html" class=""><span class="menu-title">News Review</span></a></li>
  <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-110" data-depth="1"><a href="../news-fullwidth/index.html" class=""><span class="menu-title">News Fullwidth</span></a></li>
  <li id="menu-item-234" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-234" data-depth="1"><a href="../news-right-sidebar/index.html" class=""><span class="menu-title">News Right Sidebar</span></a></li>
  <li id="menu-item-235" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-235" data-depth="1"><a href="../news-left-sidebar/index.html" class=""><span class="menu-title">News Left Sidebar</span></a></li>
</ul>
</li>
<li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-99" data-depth="0"><a href="../contact-us/index.html" class=""><span class="menu-title">Contact Us</span></a></li>
</ul></div>                </nav>
            </div>
      </div>
    </div>
</div><!-- #site-navigation -->
<link rel="stylesheet" type="text/css" href="recherche.css">

  </header><!-- #masthead -->
                            <div id="page-title-1" class="page-title text-center">
                    <h1>Forum</h1><br/><br/><br/>
                    <center>
      <a class="s">NEW TOPICS</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a class="s">RULES</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a class="s" href="today.php">TODAY'S POSTS</a>
   </center>
                </div><!-- #site-navigation -->
<br/>
<br/>
<br/>


<br/><br/><br/>

<div id="table-hide">
<table id="myTable" border="1" width="75%" >
<tr style="background-color:#F7E9FD;">
   <th id="th"><big>Forums</big></th>
   <th ><big>modifier/supprimer forum</big></th>
   <th ><big>Topics</big></th>
   <th><big>Date post</big></th>
</tr>
<?php 
$core= new Topiccore();
$listEmp=$core->afficherDate();


while ($c = $categories->fetch())  {  

   $subcat->execute(array($c['id']));
    foreach($listEmp as $row){
  $sc = $subcat->fetch();


  

?>
<tr>
   <td>
  
   <h5> <a href="test.php?id=<?PHP echo $row['id']; ?>"><?=$row['nom']?></a> </h5><br/>
    
   <?php //while ($sc = $subcat->fetch()) {?>
      <a href="modifiers.php?id=<?PHP echo $sc['id']; ?>">
      <?php //echo $sc['nom'].' | ';   }?>

   </a>
    </td>
   <td>
   <a href="modifiernomforum.php?id=<?PHP echo $row['id']; ?>">
   Modifier</a>
   
   <form method="POST" action="supprimernomforum.php">
   <input type="submit" name="supprimer" value="supprimer">
   <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
   </form>
   </td>
   <td> <?php
   //echo $row['id'];
   
    $core->count(($row['id']));
   ?></td>
   

  
   <td ><?PHP  
   echo $row['Date']; }?> </td>
   
</tr>
<?php } ?>




   
</table>
</div>

<br/><br/>

<?php  echo'<a href="ajoutertopic1.php" > -Ajouter Un Forum- </a>'; ?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<?php  echo'<a href="reclamtion.html" > -Espace Reclamation- </a>'; ?>

<br/><br/><br/><br/>
<form method="Post" action="rechercher.php">
<fieldset>
  <legend style="color: blue ; font-style: italic;">Rechercher Un Forum Ou Une Categorie:</legend>
  choisir la categorie : <select name="rech" size="1">
    <option>Forums</option>
    <option>Categories</option>

  </select><br/><br/>
  <input type="texte" name="recherche" value="inserer">
  <br/><br/>

  <input type="submit" name="chercher" value="chercher">

</fieldset>

</form>

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 9690125;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();

</script>
<script type="text/javascript" src="//localhost/livechat/php/app.php?widget-init.js"></script>



<?php
}

else { 
      echo 'Veuillez vous connecter </br>';  
    echo '<a href="./index.html">Cliquer pour se connecter</a>';

} ?>
<!-- End of LiveChat code -->
</body>
</html>