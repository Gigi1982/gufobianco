(function ($, root, undefined) {
	
	$(function () {
        
        setScrollMagic();
		
		'use strict';
		
		$("[data-lightboxTarget]").bind("click",function(e){
            e.preventDefault();
            var tg = jQuery(this).attr('data-lightboxTarget');
            var url = jQuery(this).attr('href');
            openLightbox(url, tg);
            return false;
        });
        
        function openLightbox(url, tg){
            var popUp = jQuery(".popup-container");
            popUp.fadeIn().addClass("loading");

            var currentState;

            if(Modernizr.history){
                currentState = history.state;
                var data = {
                    url: url,
                    title: document.title
                };        
                history.pushState(data, '', url);
            }

            popUp.load(url+" "+tg, function(){
                // nascondere il contenuto da css ma solo per il popup 
                // mostrare con animazione tipo animate il contenuto
                jQuery('.news-main-fadein').animate({
                    "top": "0",
                    "opacity": "1" 
                });
                popUp.removeClass("loading");
                jQuery("body").css("overflow", "hidden");
                popUp.find(".close-button").click(function(e){
                    e.preventDefault();
                    closeLightbox(currentState);
                    return false;
                });
            });
        }

        function closeLightbox(currentState){
            var popUp = jQuery(".popup-container");
            if(currentState && Modernizr.history){
                history.pushState(currentState, '', currentState.url);
            }
            popUp.fadeOut(function(){
                popUp.empty();
                jQuery("body").css("overflow", "visible");
            })
        }
        
        var slider = $('#lightSlider').lightSlider({
            gallery: true,
            auto: true,
            item: 1,
            loop: true,
            adaptiveHeight: true,
            pause: 5000,
            slideMargin: 0,
            thumbItem: 9,
            controls:false
        });
        
        //slider;
        
        $('.prevSlide').click(function(){
            slider.goToPrevSlide();
            return false;
        });
        $('.nextSlide').click(function(){
            slider.goToNextSlide(); 
            return false;
        });
        
        $(".menu-reveal").click(function(){
            $(".menu-hidden").slideToggle();
            $(".menu-bg").toggleClass('hidden-menu-open');
            return false;
        });
        
        $('#nav-icon3').click(function(){
            $(this).toggleClass('open');
            $('body').toggleClass('nav-open');
            return false;
        });
        
        
        function setScrollMagic() {
        scrollController = new ScrollMagic.Controller()
        scrollController.scrollTo(function(newScrollPos) {
            $('html, body').animate({scrollTop: newScrollPos}, 800)
        })

        new ScrollMagic.Scene({
            offset: 180
        })
        .setClassToggle('body', 'header--compressed')
        .addTo(scrollController);
        
        
        /*$(".main-content .main-section").each(function(index) {
            var section = $(this)

            // Parallasse testi e immagini di ogni sezione
            new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook:0.5,
                duration: "150%"
            })
            .on("progress", function (e) {
                var val = e.progress.toFixed(3);
                section.find(".text-parallax").css("transform", "translate3d(0,"+val*(200)+"px, 0)");
                section.find(".js-parallax").css("transform", "translate3d(0,-"+val*(200)+"px, 0)");
            })
            .addTo(scrollController);


        });*/

        $(".transitioned-element").each(function(index) {
            var section = $(this)

            // Parallasse testi e immagini di ogni sezione
            new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: section.attr("data-hook") || 0.5,
                duration: "150%"
            })
            .on("enter", function (e) {
                section.addClass('visible');
            })
            //.addIndicators({name: "transitioned-element"})
            .addTo(scrollController);

        });
        
    }
		
	});
	
})(jQuery, this);
