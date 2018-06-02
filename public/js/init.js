$(document).ready(function() {
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $("#corpse").onclick(function() {
        $("#hide").css({ "display:none" });
        alert("hello");
    });
});
