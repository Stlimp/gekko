$(document).ready(function(){ 
    $("#nav li").hover( 
    function(){ 
        $(this).children('ul').hide();
        $("#nav li #delimiter").hide(); 
        $(this).children('ul').fadeIn(800); 
    }, 
    function () { 
        $('ul', this).fadeOut(200); 
          
    });
    $("#nav ul li a").hover(
    function () {
        $(this).children('span').css('color', '#D0272E');
        $(this).children('span').css('font','14px Geneva, Arial, Helvetica, sans-serif' );
    },
    function () {
        $(this).children('span').css('color', '#4D4D4D');
        $(this).children('span').css('font','14px Geneva, Arial, Helvetica, sans-serif' );
    });
    
    $("#nav ul ul li a").hover(
    function () {
        $(this).children('span').css('color', '#D0272E');
        $(this).children('span').css('font','14px Geneva, Arial, Helvetica, sans-serif' );
    },
    function () {
        $(this).children('span').css('color', '#4D4D4D');
        $(this).children('span').css('font','14px Geneva, Arial, Helvetica, sans-serif' );
    });
 
}); 
