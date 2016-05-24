$(function() {   
// HIDE ALLE VERBORGEN LINKS ON PAGE LOAD
$(".link2").hide();
$(".link4").hide();
$(".link6").hide();
$(".link8").hide();
$("#menu").hide();



// HIDE / SHOW  MENU ALS ER OP DE TOGGLE BUTTON WORDT GEDRUKT
$(".slide").click(function(){
    $("#menu").slideToggle(800);
});



//SHOW / HIDE VERBORGEN LINK
$(".link1").click(function(){
    $(".link2").slideToggle(300);
});
$(".link3").click(function(){
    $(".link4").slideToggle(300);
});
$(".link5").click(function(){
    $(".link6").slideToggle(300);
});
$(".link7").click(function(){
    $(".link8").slideToggle(300);
});


});
