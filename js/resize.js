$('body').css('overflow', 'hidden');
var windowWidth = $(window).width();
jQuery(function($) {

    window.pageactive = (location.hash != "" ? location.hash.substring(1) : "quebec-numerique");

    $('body > section').css('overflow-y','auto');

    var nbSections = $('body > section').length;
    
    $('body').css('width',(windowWidth*nbSections));
    $('body > section').css('width',windowWidth);
    $('body > section.our-events .events').css('width',windowWidth);
    $('body > section.our-events .events .event-wrap').css('width',windowWidth);
    
    var nbEvents = $('body > section.our-events .event-list article').length;
    $('body > section.our-events .event-list').css('width',(windowWidth*nbEvents));

    $('body').css('overflow', 'hidden');
    
    $(window).resize(function() {
        windowWidth = $(window).width()+2;
        
        $('body').css('width',(windowWidth*nbSections));
        $('body > section').css('width',windowWidth);
        $('body > section.our-events .events').css('width',windowWidth);
        $('body > section.our-events .events .event-wrap').css('width',windowWidth);
        
        $('body > section.our-events .event-list').css('width',(windowWidth*nbEvents));
        $('body > section.our-events .event-list').css('margin-left',(windowWidth*$('.event-nav .active').index()*-1));

        $('html, body').stop().animate({scrollLeft: getPageActivePos(window.pageactive)}, { queue: false, duration: 0, easing: "swing" });
        
    });

});
