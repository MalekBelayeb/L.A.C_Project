(function ($) {
    $('.addPanier').click(function (event) {
        event.preventDefault();
        $.get($(this).attr('href'),{},function (data) {
            if(!data.error)
            {
                $('.addPanier').prop('value','Adding...');
                setTimeout(function(){
                    $('.addPanier').prop('value','Add to Basket');
                }, 1000)

                $('#totale').empty().append(data.totale);

            }
            else
            {
                alert(data.message);
            }
        },'json');
        return false;
    });

   /* $('.update-cart-button').click(function (event) {
        event.preventDefault();
        $.get($(this).attr('href'),{},function (data) {
            if(!data.error)
            {

                $('#totale').empty().append(data.totale);
            }
            else
            {
                alert(data.message);
            }
        },'json');
        return false;
    })*/


    jQuery(document).ready(function($) {
        var upd_cart_btn = $(".update-cart-button");
        upd_cart_btn.hide();
        $(".woocommerce-cart-form").find(".qty").on("change", function(){
            upd_cart_btn.trigger("click");

        });
    });


})(jQuery);


