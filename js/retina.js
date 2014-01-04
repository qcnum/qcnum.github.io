/*jQuery(function($) {

  var defaultUrl = "";
  var retinaUrl  = "";

  // Retina support
  if (window.devicePixelRatio >= 2) {
    $('img.retina').each(function(){
        defaultUrl = $(this).attr('src');
        switch(defaultUrl.slice(-3)){
          case "png" : retinaUrl = defaultUrl.replace(".png","-2x.png");
            break;
          case "jpg" : retinaUrl = defaultUrl.replace(".jpg","-2x.jpg");
            break;
          case "gif" : retinaUrl = defaultUrl.replace(".gif","-2x.gif");
            break;
        }
        $(this).attr('src', retinaUrl);
    });
  }

});*/