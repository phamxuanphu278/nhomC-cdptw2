$(document).ready(function() {
    $(".closebtn").click(function() {
        closeNav();
    });
    $(".close-side").click(function() {
        closeNav();
    });
    $("#opennav").click(function() {
        openNav();
    });
});

function openNav() {
    $("#mySidenav").css('width', "340px");
    $(".close-side").css("visibility", "visible");
    $(".close-side").css("opacity", "1");
}

function closeNav() {
    $("#mySidenav").css('width', '0');
    $(".close-side").css("visibility", "hidden");
    $(".close-side").css("opacity", "0");
}