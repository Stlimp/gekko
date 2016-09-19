$(document).ready(function(){ 
    /*$("#nav li").hover( 
    function(){ 
        $(this).children('ul').hide();
        $("#nav li #delimiter").hide(); 
        $(this).children('ul').fadeIn(800); 
    }, 
    function () { 
        $('ul', this).fadeOut(200); 
          
    });
*/

    var config = {
     sensitivity: 5,
     interval: 5000,
     timeout: 5000
};

$("#nav li").on({
    "mouseenter" : function(e){
        _delay = 500; 
        $(this).children('ul').hide();  
        $(this).children('ul').delay(_delay).fadeIn(800);
    },
    "mouseleave" : function(e){
       $(this).children('ul').stop(true);
        $(this).children('ul').delay(50).fadeOut();
    },
})


    $("#nav ul li").hover(
    function () {
        $(this).children('span').css('color', '#CC9933');
        $(this).children('span').css('font','14px Geneva, Arial, Helvetica, sans-serif' );
        $(this).children('span').css('line-height','30px' );
    },
    function () {
        $(this).children('span').css('color', 'transparent');
        $(this).children('span').css('font','14px Geneva, Arial, Helvetica, sans-serif' );
    });
    
    $("#nav ul ul li a").hover(
    function () {
        $(this).children('span').css('color', '#CC9933');
        $(this).children('span').css('font','14px Geneva, Arial, Helvetica, sans-serif' );
    },
    function () {
        $(this).children('span').css('color', 'transparent');
        $(this).children('span').css('font','14px Geneva, Arial, Helvetica, sans-serif' );
    });
    $(document).ready(function(){
        /*Menu hover. Replaced css way ov hover*/
        $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
             }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            /*Menu hover. Replaced css way ov hover*/
        });

    });
 
}); 
