var $j=jQuery.noConflict();window.addEventListener("scroll",function(e){var o=window.pageYOffset||document.documentElement.scrollTop,n=$j("header");o>100?n.addClass("header--scrolled"):n.hasClass("header--scrolled")&&n.removeClass("header--scrolled")});var $j=jQuery.noConflict();window.addEventListener("load",function(){$j(".spinner-container").fadeOut(1e3,function(){$j(".page-wrapper").fadeIn(500)})}),($j=jQuery.noConflict())(window).load(function(){$j(".portfolio-card").hover(function(){$j(this).find(".portfolio-card__description").stop().animate({height:"toggle",opacity:"toggle"},300)})});