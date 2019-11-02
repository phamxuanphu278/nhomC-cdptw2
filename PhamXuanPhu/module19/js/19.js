
$(document).ready(function() {

    $(".tabs-list div a").click(function(e) {
        e.preventDefault();
    });

    $(".tabs-list div").click(function() {
        var tabid = $(this).find("a").attr("href");
        $(".tabs-list div,.tabs div.tab").removeClass("active"); // removing active class from tab

        $(".tab").hide(); // hiding open tab
        $(tabid).show(); // show tab
        $(this).addClass("active"); //  adding active class to clicked tab

    });
    $('.counter').counterUp({
        delay: 10,
        time: 2500
    });
});
   
