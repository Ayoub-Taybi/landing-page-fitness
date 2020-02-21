var username = document.getElementById("inputUsername");
var email = document.getElementById("inputEmail");

$("#ButtonEdite").click(function (e) {
    e.preventDefault();

    username.disabled = false;
    email.disabled = false;
    $("#divEdite").css("display", "none");
    $("#Divhide").css("display", "block");

});

$("#cancel").click(function (e) {
    e.preventDefault();

    username.disabled = true;
    email.disabled = true;
    $("#Divhide").css("display", "none");
    $("#divEdite").css("display", "block");


});