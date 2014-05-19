$(document).ready(function(){
	$("a[rel=external]").attr('target','_blank');
});

jQuery(document).ready(function(){
    jQuery('head').append('<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />')
});

/// nav
jQuery(document).ready(function() {
    $("#menu-empresa").hide();
    var menus = jQuery('#navMenu li');
    menus.on('mouseenter keyup mouseleave keydown',function(e) {
        clearTimeout($.data(this, 'timer'));
        if(e.type == 'mouseenter' || e.type == 'keyup'){
            if(jQuery(this).find('ul').hasClass('sub')){
                jQuery(this).find('a').eq(0).addClass('current');
            }
        $.data(this, 'timer', setTimeout($.proxy(function() {
            jQuery('#menu-empresa', this).stop(true, true).fadeIn('slow');
        }, this), 100));
            
        } else if(e.type == 'mouseleave'){
            jQuery(this).find('a').eq(0).removeClass('current');
            jQuery('#menu-empresa', this).stop(true, true).fadeOut();

        } else if(e.type == 'keydown'){
            var totalLi = jQuery(this).find('#menu-empresa');
            var qtLi = totalLi.length-1;
            jQuery(this).find('a').eq(0).removeClass('current');
            jQuery(this).find('#menu-empresa').eq(qtLi).focusout(function(){
                jQuery('#menu-empresa').stop(true, true).fadeOut('slow');
            });
        }
    });
});

// Link div
$(document).ready(function(){                  
    $("#content .box-vagas li").click(function(){
        window.location=$(this).find("a").attr("href");return false;
    });
});

// script para colocar o iframe com wmode= transparent
$(document).ready(function() {
    $("iframe").each(function(){
        var ifr_source = $(this).attr('src');
        var wmode = "wmode=transparent";
        if(ifr_source.indexOf('?') != -1) {
            var getQString = ifr_source.split('?');
            var oldString = getQString[1];
            var newString = getQString[0];
            $(this).attr('src',newString+'?'+wmode+'&'+oldString);
        }
        else $(this).attr('src',ifr_source+'?'+wmode);
    });
});