(function ($) {
    'use strict';
    $(document).ready(function () {
        $("button").click(function () {
            let div = $(".hello-text");
            div.animate({left: '100px'}, "slow");
            div.animate({fontSize: '3em'}, "slow");
        });
    });

})(jQuery);