var $j=jQuery.noConflict();

window.addEventListener('scroll', function(e){
  var distanceY = window.pageYOffset || document.documentElement.scrollTop,
      shrinkOn = 100,
      header = $j("header");
  if (distanceY > shrinkOn) {
      header.addClass('header--scrolled');
  } else {
      if ( header.hasClass('header--scrolled') ) {
          header.removeClass('header--scrolled');
      }
  }
});




