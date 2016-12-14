$(document).ready(function(){ 
    $(".question").click( 
    function () {      
            if ($(this).hasClass('unselected')) {
                $(this).removeClass( "unselected" );
                $("a").removeClass("selected");
                $("a").css('font-weight', 'normal');
                $("li div").removeClass("in");
                $(this).css('font-weight', 'bold');
                $(this).addClass( "selected" );
            }
            else
            {
                $(this).css('font-weight', 'normal');
                $(this).addClass( "unselected" );
                $(this).removeClass( "selected" );
            }
    })


});