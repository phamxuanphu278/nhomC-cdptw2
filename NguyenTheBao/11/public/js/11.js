$(document).ready(function (e) {
    $("#mySidebar").click(function (e) {
        e.preventDefault();
        $(".sidebar-container").toggleClass("menuDisplayed");
    });
});