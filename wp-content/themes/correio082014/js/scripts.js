var $j = jQuery.noConflict();
var $global_w_site = $j('.site').width();

$j(function(){

    $j('.single-tab-nav > li').click(function(e) {
    	e.preventDefault();
    	$j(this).parent().children().removeClass('active');
    	$j('.single-tab-nav > li').children('a').each(function(idx, elem) { 
    							$tabid = $j(elem).attr('href').match(/#(\w+)-[0-9]/)[0]; 
    							$j($tabid).css('display', 'none');
    						});
    	$j(this).addClass('active');
    	var $tab = $j(this).children('a').attr('href').match(/#(\w+)-[0-9]/)[0];
    	$j($tab).css('display', 'block');
    	alert($tab_go);
    });

    var $container = $j('.home .masonry');
    $container.imagesLoaded(function(){
      $container.masonry({
        isAnimated: true,
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        },      
        itemSelector : '.block',
        
      });
    });


    $j('.menu-item-has-children').on('mouseover', function() {
        $j(this).children('ul.sub-menu').css('display', 'block');
    });

    $j('ul.sub-menu').on('mouseout', function() {
        $j(this).css('display', 'none');
    });

    $j('#menu-mobile').click(function(){
        var $is_open = $j('.site').css('margin-left');
        var $w_screen = $j( document ).width();
        var $w_site = $j('.site').width();

        if ( $is_open == '200px' ) {
            $j('.menu-mocado main-menu').css('display', 'none');
            $j('.site').animate({"margin-left":'0'}, 400, 'linear');
            $j('.site').css('top', 'auto');
            $j('.site').css('width', "100%");
        } else {
            // $j('.site').css('position', 'absolute');
            $j('.menu-mocado main-menu').css('display', 'block');
            $j('.site').css('width', $w_screen);
            $j('.site').css('top', '0');
            $j(".site").animate({"margin-left":'200px'}, 400, 'linear');
        }

    }); 

});

