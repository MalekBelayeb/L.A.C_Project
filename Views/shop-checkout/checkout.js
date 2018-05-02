(function ($) {
    $(document).ready(function(){

        $('#ship-to-different-address-checkbox').click(function() {
            $("#shipping_address").toggle(this.checked);
        });
        $('#payment_method_bacs').click(function() {
            $("#payment_method_bacs_text").toggle(this.checked);
            $("#payment_method_cheque_text").hide();
            $("#payment_method_cod_text").hide();
            $("#payment_method_paypal_text").hide();
            $("#payment_method_stripe_text").hide();
            $("#payment_method_2checkout_text").hide();
        });
        $('#payment_method_cheque').click(function() {
            $("#payment_method_cheque_text").toggle(this.checked);
            $("#payment_method_bacs_text").hide();
            $("#payment_method_cod_text").hide();
            $("#payment_method_paypal_text").hide();
            $("#payment_method_stripe_text").hide();
            $("#payment_method_2checkout_text").hide();
        });
        $('#payment_method_cod').click(function() {
            $("#payment_method_cod_text").toggle(this.checked);
            $("#payment_method_bacs_text").hide();
            $("#payment_method_cheque_text").hide();
            $("#payment_method_paypal_text").hide();
            $("#payment_method_stripe_text").hide();
            $("#payment_method_2checkout_text").hide();
        });
        $('#payment_method_paypal').click(function() {
            $("#payment_method_paypal_text").toggle(this.checked);
            $("#payment_method_bacs_text").hide();
            $("#payment_method_cheque_text").hide();
            $("#payment_method_cod_text").hide();
            $("#payment_method_stripe_text").hide();
            $("#payment_method_2checkout_text").hide();
        });
        $('#payment_method_stripe').click(function() {
            $("#payment_method_stripe_text").show();
            $("#payment_method_paypal_text").hide();
            $("#payment_method_bacs_text").hide();
            $("#payment_method_cheque_text").hide();
            $("#payment_method_cod_text").hide();
            $("#payment_method_2checkout_text").hide();
        });
        $('#payment_method_2checkout').click(function() {
            $("#payment_method_2checkout_text").show();
            $("#payment_method_paypal_text").hide();
            $("#payment_method_bacs_text").hide();
            $("#payment_method_cheque_text").hide();
            $("#payment_method_cod_text").hide();
            $("#payment_method_stripe_text").hide();
        });

    });


})(jQuery);