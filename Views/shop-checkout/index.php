<?php

include '../../Core/LoginCore.php';
include '../../Entity/Panier.php';
$panier=new Panier();



include_once "../../config.php";


include_once "../../core/bookcore.php";
include_once "../../core/auteurcore.php";
include_once "../../core/userCore.php";
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
require_once 'C:/wamp64/www/AvenirCulturel/Core/googlelogin/config.php';
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
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="../xmlrpc.php" />
    <link rel="shortcut icon" type="image/x-icon" href="../wp-content/uploads/fav-1.png" />
    <title>Shop Checkout &#8211; Book Junky</title>
    <link rel='dns-prefetch' href='//ajax.aspnetcdn.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Book Junky &raquo; Feed" href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?feed=rss2" />
    <link rel="alternate" type="application/rss+xml" title="Book Junky &raquo; Comments Feed" href="../comments/feed/index.html" />
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-includes\/js\/wp-emoji-release.min.js"}};
        !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56692,8205,9792,65039],[55357,56692,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
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
    <link rel='stylesheet' id='widget_style-css'  href='../wp-content/plugins/csh-login/assets/css/default.css' type='text/css' media='all' />*
    <link rel='stylesheet' href='stripe.css' type='text/css' media='all' />
    <link rel='stylesheet' id='layout1_style-css'  href='../wp-content/plugins/csh-login/assets/css/layout1.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flex-favorites-style.css-css'  href='../wp-content/plugins/flex-favorites//assets/css/flex-favorites-style.css' type='text/css' media='all' />
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
    <script type='text/javascript' src='http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var jsPassData = {"ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","display_labels":"Labels","type_modal":"Popup","get_login_redirect":"Current Page","login_redirect":"","register_redirect":"","genrated_pass":""};
        /* ]]> */
    </script>
    <script type='text/javascript' src='../wp-content/plugins/csh-login/assets/js/widget-script.js'></script>
    <script type='text/javascript' src=../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {"ajax_url":"\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?page_id=393","is_cart":"","cart_redirect_after_add":"no"};
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
    <link rel='https://api.w.org/' href='http://demo.cmssuperheroes.com/themeforest/bookjunky/index.php?rest_route=/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 4.9.4" />
    <meta name="generator" content="WooCommerce 3.2.6" />
    <link rel="canonical" href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?page_id=396" />
    <link rel='shortlink' href='http://demo.cmssuperheroes.com/themeforest/bookjunky/?p=396' />
    <link rel="alternate" type="application/json+oembed" href="http://demo.cmssuperheroes.com/themeforest/bookjunky/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=http%3A%2F%2Fdemo.cmssuperheroes.com%2Fthemeforest%2Fbookjunky%2F%3Fpage_id%3D396" />
    <link rel="alternate" type="text/xml+oembed" href="http://demo.cmssuperheroes.com/themeforest/bookjunky/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=http%3A%2F%2Fdemo.cmssuperheroes.com%2Fthemeforest%2Fbookjunky%2F%3Fpage_id%3D396&#038;format=xml" />
    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <meta name='robots' content='noindex,follow' />
    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="../wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script type="text/javascript">function setREVStartSize(e){
            try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
            }catch(d){console.log("Failure at Presize of Slider:"+d)}
        };</script>
    <style type="text/css" id="wp-custom-css">
        .site-footer #footer-bottom {
            text-align: center;
        }
        .book-junky-cat .sidebar-filter .bj-ft-cate {
            display:none;
        }		</style>
    <style type="text/css" title="dynamic-css" class="options-output">body .page-title h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body .page-title h1,{opacity: 0;}.ie.wf-loading body .page-title h1,{visibility: hidden;}body{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,{opacity: 0;}.ie.wf-loading body,{visibility: hidden;}h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h1,{opacity: 0;}.ie.wf-loading h1,{visibility: hidden;}h2{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h2,{opacity: 0;}.ie.wf-loading h2,{visibility: hidden;}h3{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h3,{opacity: 0;}.ie.wf-loading h3,{visibility: hidden;}h4{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h4,{opacity: 0;}.ie.wf-loading h4,{visibility: hidden;}h5{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h5,{opacity: 0;}.ie.wf-loading h5,{visibility: hidden;}h6{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h6,{opacity: 0;}.ie.wf-loading h6,{visibility: hidden;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="page-template-default page page-id-396 woocommerce-checkout woocommerce-page body-boxed wpb-js-composer js-comp-ver-5.2.1 vc_responsive">
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
                                        <img style="width: 20%;" src="<?php if(isset($_SESSION['picture'])) echo $_SESSION['picture'] ?>">
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
                                        <a href="../user-profile/book-shelf/DonnesProfile.php">
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
                                    <img src="../wp-content/themes/book-junky/assets/images/icon-1.png"
                                         alt="icon 1">
                                    <div class="content <?php if(!isset($_SESSION['id'])) echo 'go_to_login_link' ?>">
                                        <a href="../user-profile/book-shelf/index.php"
                                           alt="My Account">
                                            <h5>Bibliothèque</h5>

                                        </a>
                                        <span class="aj-count">
                                     <?php if(isset($_SESSION['id'])) echo countLivre($_SESSION['id']); ?>  livre
                                                                            </span>
                                    </div>
                                </div>

                                <div class="wrap-your-basket clearfix">
                                    <img src="../wp-content/themes/book-junky/assets/images/icon-2.png"
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

                                <div class="main-logo-3"><a href="../index.php"><img alt="Book Junky" src="../wp-content/themes/book-junky/assets/images/logo-2.png"></a></div>
                                <a href="../index.php" class="menu"><i class="fa fa-bars"></i> Menu</a>
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






<li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page no_group menu-item-99" data-depth="0"><a href="../news/evenements.php" class=""><span class="menu-title">Événement</span>

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
    <div id="page-title-1" class="page-title text-center">
        <h1>Shop Checkout</h1>
    </div>
    <!-- #page-title -->
    <div id="content" class="site-content">
        <div id="primary" class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="main" class="site-main">

                        <article id="post-396" class="post-396 page type-page status-publish hentry">
                            <div class="entry-content">

                                <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="woocommerce">
                                                    <div class="wrap-checkout">

                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-7 col-lg-8">
                                                                <div class="content-checkout">
                                                                    <div class="wrap-header-checkout clearfix">

                                                                        <h3>Checkout</h3>

                                                                        <div class="wrap-contact-checkout">
                                                                            <i class="zmdi zmdi-phone"></i>
                                                                            <p>For all enquiries please call</p>
                                                                            <a href="tel:+00000000">+00000000</a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="wrap-content-checkout">

                                                                        <form id="checkout-login" style="display: none;" class="woocommerce-form woocommerce-form-login login" method="post">


                                                                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>

                                                                            <p class="form-row form-row-first">
                                                                                <label for="username">Username or email <span class="required">*</span></label>
                                                                                <input type="text" class="input-text" name="username" id="username" />
                                                                            </p>
                                                                            <p class="form-row form-row-last">
                                                                                <label for="password">Password <span class="required">*</span></label>
                                                                                <input class="input-text" type="password" name="password" id="password" />
                                                                            </p>
                                                                            <div class="clear"></div>


                                                                            <p class="form-row">
                                                                                <input type="hidden" id="_wpnonce" name="_wpnonce" value="a9b8e66177" /><input type="hidden" name="_wp_http_referer" value="/themeforest/bookjunky/?page_id=396" />		<input type="submit" class="button" name="login" value="Login" />
                                                                                <input type="hidden" name="redirect" value="http://demo.cmssuperheroes.com/themeforest/bookjunky/?page_id=396" />
                                                                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
                                                                                </label>
                                                                            </p>
                                                                            <p class="lost_password">
                                                                                <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?page_id=432&#038;lost-password">Lost your password?</a>
                                                                            </p>

                                                                            <div class="clear"></div>


                                                                        </form>

                                                                        <ul class="step-checkout">
                                                                            <li class="billing bj-step-active"><i class="zmdi zmdi-check"></i>BILLING                        </li>
                                                                            <li class="payment"><i
                                                                                        class="zmdi zmdi-check"></i>PAYMENT &#038; CONFIRMATION                        </li>
                                                                        </ul>

                                                                        <form id="payment-form" name="checkout" method="post" class="checkout woocommerce-checkout"
                                                                              action="../../Core/Order.php" enctype="multipart/form-data">

                                                                            <div class="owl-carousel owl-theme" id="checkout-owl">


                                                                                <div class="woocommerce-billing-fields bj-checkout-form" data-form-type="billing">

                                                                                    <h3>Billing Information</h3>



                                                                                    <div class="woocommerce-billing-fields__field-wrapper clearfix">
                                                                                        <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10"><label for="billing_first_name" class="">First name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder=""  value="<?= $_SESSION['id']?>" autocomplete="given-name" autofocus="autofocus" /></p><p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20"><label for="billing_last_name" class="">Last name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder=""  value="" autocomplete="family-name" /></p><p class="form-row form-row-wide" id="billing_company_field" data-priority="30"><label for="billing_company" class="">Company name</label><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder=""  value="" autocomplete="organization" /></p><p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40"><label for="billing_country" class="">Country <abbr class="required" title="required">*</abbr></label><select name="billing_country" id="billing_country" class="country_to_state country_select " autocomplete="country"><option value="">Select a country&hellip;</option><option value="AX" >&#197;land Islands</option><option value="AF" >Afghanistan</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="PW" >Belau</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia</option><option value="BQ" >Bonaire, Saint Eustatius and Saba</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="VG" >British Virgin Islands</option><option value="BN" >Brunei</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="CV" >Cape Verde</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo (Brazzaville)</option><option value="CD" >Congo (Kinshasa)</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="HR" >Croatia</option><option value="CU" >Cuba</option><option value="CW" >Cura&ccedil;ao</option><option value="CY" >Cyprus</option><option value="CZ" >Czech Republic</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard Island and McDonald Islands</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IR" >Iran</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="CI" >Ivory Coast</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Laos</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macao S.A.R., China</option><option value="MK" >Macedonia</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia</option><option value="MD" >Moldova</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="KP" >North Korea</option><option value="MP" >Northern Mariana Islands</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PS" >Palestinian Territory</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >Reunion</option><option value="RO" >Romania</option><option value="RU" >Russia</option><option value="RW" >Rwanda</option><option value="ST" >S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option><option value="BL" >Saint Barth&eacute;lemy</option><option value="SH" >Saint Helena</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="SX" >Saint Martin (Dutch part)</option><option value="MF" >Saint Martin (French part)</option><option value="PM" >Saint Pierre and Miquelon</option><option value="VC" >Saint Vincent and the Grenadines</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia/Sandwich Islands</option><option value="KR" >South Korea</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SD" >Sudan</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="SY" >Syria</option><option value="TW" >Taiwan</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN"  selected='selected'>Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom (UK)</option><option value="US" >United States (US)</option><option value="UM" >United States (US) Minor Outlying Islands</option><option value="VI" >United States (US) Virgin Islands</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VA" >Vatican</option><option value="VE" >Venezuela</option><option value="VN" >Vietnam</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option></select><noscript><input type="submit" name="woocommerce_checkout_update_totals" value="Update country" /></noscript></p><p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50"><label for="billing_address_1" class="">Street address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="House number and street name"  value="" autocomplete="address-line1" /></p><p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="60"><input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)"  value="" autocomplete="address-line2" /></p><p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-priority="70"><label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_city" id="billing_city" placeholder=""  value="" autocomplete="address-level2" /></p><p class="form-row form-row-wide address-field validate-required validate-state" id="billing_state_field" data-priority="80"><label for="billing_state" class="">State / County <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " value=""  placeholder="" name="billing_state" id="billing_state" autocomplete="address-level1" /></p><p class="form-row form-row-wide address-field validate-required validate-postcode" id="billing_postcode_field" data-priority="90"><label for="billing_postcode" class="">Postcode / ZIP <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder=""  value="" autocomplete="postal-code" /></p><p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="100"><label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder=""  value="" autocomplete="tel" /></p><p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-priority="110"><label for="billing_email" class="">Email address <abbr class="required" title="required">*</abbr></label><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder=""  value="" autocomplete="email username" /></p>
                                                                                        <div id="ship-to-different-address">
                                                                                            <p class="woocommerce-form__checkbox">
                                                                                                <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"  type="checkbox" name="ship_to_different_address" /> <span>Ship to a different address?</span>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>


                                                                                <div id="order_review" class="woocommerce-checkout-review-order bj-checkout-form"
                                                                                     data-form-type="payment">

                                                                                    <div id="payment" class="woocommerce-checkout-payment">
                                                                                        <div class="wrap-content">
                                                                                            <h3>Payment Details</h3>

                                                                                            <ul class="wc_payment_methods payment_methods methods">
                                                                                                <li class="wc_payment_method payment_method_bacs">
                                                                                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs"  checked='checked' data-order_button_text="" />

                                                                                                    <label for="payment_method_bacs">
                                                                                                        Direct bank transfer 	</label>
                                                                                                    <div class="payment_box payment_method_bacs" id="payment_method_bacs_text" >
                                                                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="wc_payment_method payment_method_cheque">
                                                                                                    <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque"  data-order_button_text="" />

                                                                                                    <label for="payment_method_cheque">
                                                                                                        Check payments 	</label>
                                                                                                    <div class="payment_box payment_method_cheque" id="payment_method_cheque_text" style="display:none;">
                                                                                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="wc_payment_method payment_method_cod">
                                                                                                    <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod"  data-order_button_text="" />

                                                                                                    <label for="payment_method_cod">
                                                                                                        Cash on delivery 	</label>
                                                                                                    <div class="payment_box payment_method_cod" id="payment_method_cod_text" style="display:none;">
                                                                                                        <p>Pay with cash upon delivery.</p>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="wc_payment_method payment_method_paypal">
                                                                                                    <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal"  data-order_button_text="Proceed to PayPal" />

                                                                                                    <label for="payment_method_paypal">
                                                                                                        PayPal <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" alt="PayPal acceptance mark" /><a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup" class="about_paypal" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What is PayPal?</a>	</label>
                                                                                                    <div class="payment_box payment_method_paypal" id="payment_method_paypal_text" style="display:none;">
                                                                                                        <p>Pay via PayPal; you can pay with your credit card if you don&#8217;t have a PayPal account.</p>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="wc_payment_method payment_method_paypal">
                                                                                                    <input id="payment_method_stripe" type="radio" class="input-radio" name="payment_method" value="stripe"  data-order_button_text="Proceed to Stripe" />

                                                                                                    <label for="payment_method_paypal">
                                                                                                        Stripe <img src="../../stripe.png" alt="Paypal acceptance mark"  /></label>
                                                                                                    <div  id="payment_method_stripe_text" style="display:none;">

                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="place-order">
                                                                                            <noscript>
                                                                                                Since your browser does not support JavaScript, or it is disabled, please ensure you click the &lt;em&gt;Update Totals&lt;/em&gt; button before placing your order. You may be charged more than the amount stated above if you fail to do so.			<br/><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" />
                                                                                            </noscript>



                                                                                            <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order" />

                                                                                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="160bf7157d" /><input type="hidden" name="_wp_http_referer" value="/themeforest/bookjunky/?page_id=396" />	</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-md-5 col-lg-4">
                                                                <div class="checkout-detail">

                                                                    <div class="woocommerce-info">Have a discount code? <button class="showcoupon" style="border: none; background: none;">Click to enter it</button></div>

                                                                        <form class="checkout_coupon" method="post" style="display:none" >

                                                                            <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="" />

                                                                            <input type="submit" class="button" name="apply_coupon" value="Apply coupon" />

                                                                            <div class="clear"></div>
                                                                        </form>

                                                                    <div class="wrap-review-order">
                                                                        <div class="woocommerce-checkout-review-order">
                                                                            <h3>Order Summary</h3>
                                                                            <div class="review-order">
                                                                                <?php
                                                                                if(isset($_SESSION['panier'])) {
                                                                                    $id = array_keys($_SESSION['panier'],!0,false);
                                                                                    $pdo = Connexion::getConnexion();
                                                                                    $sql = 'SELECT * FROM book where ID IN (' . implode(',', $id) . ')';
                                                                                    $stmt = $pdo->prepare($sql);
                                                                                    $product = $stmt->execute();
                                                                                    $product = $stmt->fetchAll(PDO::FETCH_OBJ);
                                                                                    foreach ($product as $livre):
                                                                                        ?>
                                                                                        <div class="order-item clearfix">
                                                                                            <div class="thumbnail-product"
                                                                                                 style="box-shadow: 0 5px 15px -5px #308ec7">
                                                                                                <img src="../wp-content/uploads/<?=$livre->IMAGE; ?>"
                                                                                                     alt="Thumbnail Product">
                                                                                            </div>

                                                                                            <div class="cart-info">
                                                                                                <h5><?= $livre->NOM ?></h5>
                                                                                                <p><?= $livre->AUTHOR ?></p>
                                                                                                <span><?= $_SESSION['panier'][$livre->ID] ?></span>

                                                                                            </div>

                                                                                            <div class="product-total">
                                                                            <span class="woocommerce-Price-amount amount"><span
                                                                                        class="woocommerce-Price-currencySymbol">&pound;</span><?= number_format($panier->total_produit($livre->ID), 2); ?></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php
                                                                                    endforeach;
                                                                                }

                                                                                ?>

                                                                            </div>
                                                                            <div class="subtotal">

                                                                                <div class="cart-subtotal clearfix">
                                                                                    <h5>Subtotal</h5>
                                                                                    <span><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span><?= number_format($panier->total(),2);?></span></span>
                                                                                </div>



                                                                                <div class="shiping">

                                                                                    <tr class="shipping">
                                                                                        <?php if(isset($_SESSION['livraisonPrix']))
                                                                                        {
                                                                                          echo '<th>Shipping</th>'.$_SESSION['livraisonPrix'];
                                                                                        }
                                                                                        else
                                                                                            echo '<td data-title="Shipping">No Shipping</td>';
                                                                                        ?>
                                                                                    </tr>

                                                                                </div>





                                                                                <div class="order-total clearfix">
                                                                                    <h5>Total</h5>
                                                                                    <span><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&pound;</span><?= number_format($panier->total(),2);?></span></strong> </span>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div></div></div></div>

                            </div><!-- .entry-content -->
                            <footer class="edit-page">

                            </footer><!-- .entry-meta -->
                        </article><!-- #post -->

                    </main><!-- .site-main -->
                </div>
            </div>
        </div><!-- .content-area -->

    </div><!-- .site-content -->
    <script type='text/javascript' src='../../coupon.js'></script>
    <script type='text/javascript' src='../../checkout.js'></script>

        <link rel='stylesheet' href='../wp-content/plugins/DataTables/css/dataTables.bootstrap.min.css' type='text/css' media='all' />
        <script type='text/javascript' src='../wp-content/plugins/DataTables/js/dataTables.bootstrap.min.js'></script>
        <script type='text/javascript' src='../wp-content/plugins/DataTables/js/jquery.dataTables.min.js'></script>
        <footer class="site-footer">
            <div id="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="wrap-about col-md-3 col-sm-12 col-xs-12 col-lg-4">
                            <div class="footer-about">
                                <a href="index.php"><img class="logo-footer"
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
                                            <a href="freefall/index.html">
                                                <img src="../wp-content/uploads/freefall.jpg"
                                                     alt="Thumbnail">
                                            </a>
                                        </div>
                                        <div class="contents">

                                            <a href="freefall/index.html" class="title">

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
                                                <img src="../wp-content/uploads/darknet.jpg"
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
                                            <a href="the-happy-lemon/index.html">
                                                <img src="../wp-content/uploads/the_happy_lemon.jpg"
                                                     alt="Thumbnail">
                                            </a>
                                        </div>
                                        <div class="contents">

                                            <a href="the-happy-lemon/index.html" class="title">

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

        <form class="login_form" id="login_form" method="post" action="../core/Login.php">
            <h2>Please Login</h2>
            <input type="text" class="alert_status" readonly>
            <label for="login_user"> Username</label>
            <input type="text" name="login_user" name="login_user" />
            <label for="pass_user"> Password </label>
            <input type="password" name="pass_user" name="pass_user" />
            <label for="rememberme" id="lb_rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label>
            <input type="submit" name="login_submit" value="LOGIN" class="login_submit" />

            <div class="social-login">


            </div>
        </form>

        <form class="register_form" id="register_form"
              action="../core/Register.php" method="post">
            <h2>Registration</h2>
            <input type="text" class="alert_status" readonly>
            <label for="register_user">Username</label>
            <input type="text" name="register_user" id="register_user" value="" >
            <label for="register_email">E-mail</label>
            <input type="email" name="register_email" id="register_email" value="">
            <label for="MDP">Password</label>
            <input type="password"  id="MDP" name="mot_de_passe">
            <label for="MDP_confirm">Confirm password</label>
            <input type="password" id="MDP_confirm" name="mot_de_passe_confirm">
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
<script src='../../../www.google.com/recaptcha/api.js'></script>
<link rel='stylesheet' id='font-awesome-css'  href='../wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='owl-carousel-css'  href='../wp-content/plugins/cmssuperheroesv2/assets/css/owl.carousel.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='vc_google_fonts_vocesregular-css'  href='http://fonts.googleapis.com/css?family=Voces%3Aregular&amp;ver=4.9.2' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelement-css'  href='../wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='../wp-includes/js/mediaelement/wp-mediaelement.min.css' type='text/css' media='all' />
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
    var nectarLove = {"ajaxurl":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php","postID":"271","rooturl":"http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky"};
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
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js'></script>
<script type='text/javascript' src='../wp-content/plugins/cmssuperheroesv2/assets/js/owl.carousel.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var cmscarousel = {"cms-carousel":{"margin":"30","loop":"true","mouseDrag":"true","nav":"false","dots":"true","autoplay":"false","autoplayTimeout":5000,"smartSpeed":1000,"autoplayHoverPause":"true","navText":["<i class=\"fa fa-arrow-left\"><\/i>","<i class=\"fa fa-arrow-right\"><\/i>"],"dotscontainer":"cms-carousel .cms-dots","responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":2},"1200":{"items":3}}}};
    /* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/cmssuperheroesv2/assets/js/owl.carousel.cms.js'></script>
<script type='text/javascript'>
    var mejsL10n = {"language":"en","strings":{"mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"Turn off Fullscreen","mejs.fullscreen-on":"Go Fullscreen","mejs.download-video":"Download Video","mejs.fullscreen":"Fullscreen","mejs.time-jump-forward":["Jump forward 1 second","Jump forward %1 seconds"],"mejs.loop":"Toggle Loop","mejs.play":"Play","mejs.pause":"Pause","mejs.close":"Close","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.time-skip-back":["Skip back 1 second","Skip back %1 seconds"],"mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.mute-toggle":"Mute Toggle","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.ad-skip":"Skip ad","mejs.ad-skip-info":["Skip in 1 second","Skip in %1 seconds"],"mejs.source-chooser":"Source Chooser","mejs.stop":"Stop","mejs.speed-rate":"Speed Rate","mejs.live-broadcast":"Live Broadcast","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>
<script type='text/javascript' src='../wp-includes/js/mediaelement/mediaelement-and-player.min.js'></script>
<script type='text/javascript' src='../wp-includes/js/mediaelement/mediaelement-migrate.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpmejsSettings = {"pluginPath":"\/themeforest\/bookjunky\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
    /* ]]> */
</script>
<script type='text/javascript' src='../wp-includes/js/mediaelement/wp-mediaelement.min.js'></script>
<script type='text/javascript' src='../wp-content/plugins/cmssuperheroesv2/assets/js/cmsgrid.pagination.js'></script>
<script type='text/javascript' src='../wp-content/plugins/cmssuperheroesv2/assets/js/modernizr.min.js'></script>
<script type='text/javascript' src='../wp-includes/js/imagesloaded.min.js'></script>
<script type='text/javascript' src='../wp-content/plugins/cmssuperheroesv2/assets/js/jquery.shuffle.js'></script>
<script type='text/javascript' src='../wp-content/themes/book-junky/assets/js/jquery.shuffle.cms.js'></script>
<script type='text/javascript' src='../wp-content/themes/book-junky/assets/js/owl.carousel.min.js'></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/book-junky/assets/js/jquery-2.1.3.js"></script>
<script type='text/javascript' src='../../panier.js'></script>
</body>

<!-- Mirrored from demo.cmssuperheroes.com/themeforest/bookjunky/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 22:25:30 GMT -->
</html>
<!-- Dynamic page generated in 0.976 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-02-03 22:20:27 -->

<!-- super cache -->*/