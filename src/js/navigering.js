
    "use strict"    
        
    $(document).ready(function(){
    if ( $('.main-nav li.two').hasClass('is-active') ) {
        $(this).find('li').addClass('two-is-active');
    }
    else if ( $('.main-nav li.three').hasClass('is-active') ) {
        $(this).find('li').addClass('three-is-active');
    }else if( $('.main-nav li.four').hasClass('is-active') ) {
        $(this).find('li').addClass('four-is-active');
    }else {
        $(this).addClass('one-is-active');
    } 
});
