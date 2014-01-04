jQuery(function($) {

  scrollConverter.activate();

  $('body > header a').click(function(e) {
    var href = $(this).attr('href');
    $('html, body').stop().animate({scrollLeft: $(href).offset().left},  { queue: false, duration: 1000});
    $('body > header a').parent().removeClass('active');
    $(this).parent().addClass('active');
    e.preventDefault();
  });

  $('body > header h1').css('cursor', 'pointer');
  $('body > header h1').click(function(e) {
    var href = "#quebec-numerique";
    $('html, body').stop().animate({scrollLeft: $(href).offset().left},  { queue: false, duration: 1000});
    e.preventDefault();
  });

  $('.goto-section a').click(function(e) {
    var href = $(this).attr('href');
    $('html, body').stop().animate({scrollLeft: $(href).offset().left},  { queue: false, duration: 1000});
    e.preventDefault();
  });

  $('.buttonjs').each(function(){
    var content = $(this).html();
    var classes = $(this).attr('class');
    var newButton = '<button class="'+classes+'">'+content+'</button>';
    $(this).replaceWith(newButton);
  });

  $(document.body).on('click', '.our-events .nav-links button.right', function() {
    var windowWidth = $(window).width();
    $('.our-events .event-list').animate({marginLeft : '-='+windowWidth},500);

    var articleIndex = $('.our-events article').index($(this).parents('article'))+1;
    $('.our-events .event-nav li').removeClass('active');
    $('.our-events .event-nav li').eq(articleIndex).addClass('active');
  });

  $(document.body).on('click', '.our-events .nav-links button.left', function() {
    var windowWidth = $(window).width();
    $('.our-events .event-list').animate({marginLeft : '+='+windowWidth},500);

    var articleIndex = $('.our-events article').index($(this).parents('article'))-1;
    $('.our-events .event-nav li').removeClass('active');
    $('.our-events .event-nav li').eq(articleIndex).addClass('active');
  });

  $(document.body).on('click', '.our-events .event-nav .buttonjs', function() {
    var windowWidth = $(window).width();
    var posActiveSlide = $('.event-nav .active').index();
    var newPosActiveSlide = $(this).parent().index();
    var diffPosSlides = newPosActiveSlide - posActiveSlide;
    var newActiveSlidePosition = Math.abs(diffPosSlides) * windowWidth;

    $('.our-events .event-list').animate({marginLeft : (diffPosSlides < 0 ? '+=' : '-=') + newActiveSlidePosition},500);

    $('.our-events .event-nav li').removeClass('active');
    $('.our-events .event-nav li').eq(newPosActiveSlide).addClass('active');
  });

  $(window).scroll(
    // Détecte la fin du scroll
    function(){
      clearTimeout($.data(this, "scrolltimeout"));
      $.data(this, "scrolltimeout", setTimeout(function() {
        if($(window).width() < 768 && $(window).scrollLeft() != getPageActive(2)){
          $('html, body').stop().animate({scrollLeft: getPageActive(2)}, { queue: false, duration: 100, easing: "swing" });
          updateMenu();
          updateHash();
        }
        else if((($(window).scrollLeft() + $(window).width()) - getPageActive(1) < ($(window).width() * 0.15) || getPageActive(1) - $(window).scrollLeft() < ($(window).width() * 0.15)) && $(window).scrollLeft() != getPageActive(2)){
          $('html, body').stop().animate({scrollLeft: getPageActive(2)}, { queue: false, duration: 100, easing: "swing" });
          updateMenu();
          updateHash();
        }
        else{
          updateMenu();
          updateHash();
        }
      }, 500));
      window.pageactive = getPageActive(2, 'id');
      $(window).clearQueue();
      $('html, body').clearQueue();
    }
    );

});


/* Fonctions */

function getPageActive(breakpoint,type){

  /* Cette fonction retourne le offset left de la page active si le paramètre de type n'est pas spécifié.
     Si le paramètre de type est égale à "id", la fonction retourne le id de la page active
     Si le paramètre de type est égale à "class", la fonction retourne la classe de la page active */

  // Sections breakpoints
  var pos_home        =   $('#quebec-numerique').offset().left;
  var pos_about       =   $('#a-propos').offset().left;
  var pos_events      =   $('#evenements').offset().left;
  var pos_ourevents   =   $('#nos-evenements').offset().left;
  var pos_place       =   $('#le-lieu').offset().left;
  var pos_whoarewe    =   $('#qui-sommes-nous').offset().left;
  var pos_contact     =   $('#nous-contacter').offset().left;

  var pos_active = $(window).scrollLeft() + ($(window).width() / breakpoint);
  var page_active = "";

  if(pos_home < pos_active && pos_active <= pos_about){
      // Accueil
      switch(type){
        case 'id': page_active = 'quebec-numerique'; break;
        case 'class' : page_active = 'home'; break;
        default: page_active = pos_home; break;
      }
    }
    else if(pos_about < pos_active && pos_active <= pos_events){
      // À propos
      switch(type){
        case 'id': page_active = 'a-propos'; break;
        case 'class' : page_active = 'about'; break;
        default: page_active = pos_about; break;
      }
    }
    else if(pos_events < pos_active && pos_active <= pos_ourevents){
      // Évènements
      switch(type){
        case 'id': page_active = 'evenements'; break;
        case 'class' : page_active = 'events'; break;
        default: page_active = pos_events; break;
      }
    }
    else if(pos_ourevents < pos_active && pos_active <= pos_place){
      // Nos évènements
      switch(type){
        case 'id': page_active = 'nos-evenements'; break;
        case 'class' : page_active = 'our-events'; break;
        default: page_active = pos_ourevents; break;
      }
    }
    else if(pos_place < pos_active && pos_active <= pos_whoarewe){
      // Le lieu
      switch(type){
        case 'id': page_active = 'le-lieu'; break;
        case 'class' : page_active = 'place'; break;
        default: page_active = pos_place; break;
      }
    }
    else if(pos_whoarewe < pos_active && pos_active <= pos_contact){
      // Qui sommes nous
      switch(type){
        case 'id': page_active = 'qui-sommes-nous'; break;
        case 'class' : page_active = 'who-are-we'; break;
        default: page_active = pos_whoarewe; break;
      }
    }
    else if(pos_contact < pos_active && pos_active <= $(document).width()){
      // Contact
      switch(type){
        case 'id': page_active = 'nous-contacter'; break;
        case 'class' : page_active = 'contact'; break;
        default: page_active = pos_contact; break;
      }
    }

    return page_active;
  }

function getPageActivePos(pageID){

  /* Cette fonction retourne la position de la page passée en paramètre */

  // Sections positions
  var positions = {
    'quebec-numerique' : $('#quebec-numerique').offset().left,
    'a-propos' : $('#a-propos').offset().left,
    'evenements' : $('#evenements').offset().left,
    'nos-evenements' : $('#nos-evenements').offset().left,
    'le-lieu' : $('#le-lieu').offset().left,
    'qui-sommes-nous' : $('#qui-sommes-nous').offset().left,
    'nous-contacter' : $('#nous-contacter').offset().left
  };

  return positions[pageID];

}

function updateHash(){
  var hash = (location.hash != "" ? location.hash : "#quebec-numerique");
  if(hash != "#" + getPageActive(2,'id')){
    if(history.pushState) {
      history.pushState(null, null, '#' + getPageActive(2,'id'));
    } else {
      // Fallback old browsers
      //location.hash = '#' + getPageActive(2,'id');
    }
  }
}


function updateMenu(){
  $('body > header a').parent().removeClass('active');
  $('body > header li.' + getPageActive(2,'class')).addClass('active');
}
