$(document).ready(function() {
    $(".loginExit").on("click", function() {
        $(".overlay").hide();
    });
    $(".loginButton").on("click", function() {
        $(".navbar-toggle").click();
        $(".overlay").show();
    });
});
