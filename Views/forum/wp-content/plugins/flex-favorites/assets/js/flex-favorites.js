jQuery(document).ready(function ($) {
    if ($('.flex-favorites').length) {
        $(document).on('click', '.flex-favorites', function (e) {
            e.preventDefault();
            var _this = $(this),
                id = _this.attr('data-id'),
                _counts = _this.find("p.ff-label").attr('data-counts');
            $.ajax({
                url: flexFavorites.ajax,
                type: 'POST',
                data: {
                    action: flexFavorites.action,
                    favor_id: id
                },
                dataType: 'json',
                beforeSend: function () {
                    _this.addClass('ff-pending');
                    _this.attr("disabled", "disabled");
                }
            }).done(function (response) {
                if (response.stt == "success") {
                    _this.toggleClass('ff-active');
                    _this.find(".ff-label").html(response.label);
                    _this.find(".ff-icon").attr("class", "ff-icon zmdi " + response.icon);
                    $("."+_counts).html(response.count);
                }
            }).fail(function (response) {
                console.log(response);
                console.log('fail');
            }).always(function () {
                _this.removeClass('ff-pending');
                _this.removeAttr("disabled");
            });
        });
    }
    if ($('.flex-favorites-remove').length) {
        $(document).on('click', '.flex-favorites-remove', function (e) {
            e.preventDefault();
            var _this = $(this),
                id = _this.attr('data-id'),
                _counts = _this.find("p.ff-label").attr('data-counts'),
                _parents = _this.find("p.ff-label").attr('data-parents');
            $.ajax({
                url: flexFavorites.ajax,
                type: 'POST',
                data: {
                    action: flexFavorites.action,
                    favor_id: id
                },
                dataType: 'json',
                beforeSend: function () {
                    _this.addClass('ff-pending');
                    _this.attr("disabled", "disabled");
                }
            }).done(function (response) {
                if (response.stt == "success") {
                    $("."+_counts).html(response.count);
                    if(_parents !== ""){
                        var _par = "."+_parents;
                        _this.parents(_par).remove();
                    }
                }
            }).fail(function (response) {
            }).always(function () {
            });
        });
    }
});