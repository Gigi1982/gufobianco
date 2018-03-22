function playAnimation(){
    jQuery("#first").queue(function(next){
        jQuery(this).fadeIn(400, function(){
            jQuery('#first img').addClass('zooming');
        });
        next();
        console.log('first step');
    }).delay(7000).queue(function(next){
        jQuery('#first .text-box').fadeIn();
        next();
    }).delay(1000).queue(function(next){
        jQuery("#first").fadeOut(400, function() {
            jQuery('#first .text-box').fadeOut(100, function() {
                jQuery("#second").fadeIn(400,function (){
                    jQuery('#second img').addClass('zooming');
                }).delay(7000).queue(function(next){
                    jQuery('#second .text-box').fadeIn();
                    next();
                }).delay(3000).queue(function(next){
                    //console.log('penultimo step');
                    jQuery('#second').fadeOut(100, function(){
                        jQuery('#second .text-box').fadeOut(100, function() {
                            jQuery("#third").fadeIn(100,function (){
                                jQuery('#third img').addClass('zooming');
                                jQuery('#third .text-box').fadeIn();
                            });
                        });
                    });
                    next();
                })
            });
        });
        next();
        console.log('fourth step');
    });
}
