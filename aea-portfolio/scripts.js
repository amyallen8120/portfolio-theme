var $j=jQuery.noConflict();window.addEventListener("scroll",function(e){var a=window.pageYOffset||document.documentElement.scrollTop,o=$j("header");a>100?(o.addClass("header--small"),o.addClass("header--charcoal"),o.addClass("header--white-text")):(o.hasClass("header--small")&&o.removeClass("header--small"),o.hasClass("header--charcoal")&&o.removeClass("header--charcoal"),o.hasClass("header--white-text")&&o.removeClass("header--white-text"))});var $j=jQuery.noConflict();window.addEventListener("load",function(){$j(".spinner-container").fadeOut(1e3,function(){$j(".page-wrapper").fadeIn(500)})}),($j=jQuery.noConflict())(window).load(function(){$j(".portfolio-card").hover(function(){$j(this).find(".portfolio-card__description").stop().animate({height:"toggle",opacity:"toggle"},300)})});