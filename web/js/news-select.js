$(document).ready(function(){ 
    $("li").click( 
    function () {      
            if ($(this).hasClass('unselected')) {
                $(this).css('font-weight', 'bold');
                $(this).removeClass( "unselected" );
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