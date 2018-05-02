(function ($) {
    jQuery(document).ready(function($){
        $(".showcoupon").click(function(){
            $(".checkout_coupon").animate(
                {
                    height:'toggle'
                }
            );
        });
        $(".showlogin").click(function(){
            $("#checkout-login").animate(
                {
                    height:'toggle'
                }
            );
        });
    });
})(jQuery);