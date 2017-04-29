$(function() {
    $('#form-contactar').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'json',
            success: function(data) {
                if (data.valido) {

                } else {

                }
            }
        })
    });
});
jQuery(document).ready(function() {
    jQuery.fn.rockthemes_animate_columns = function(obj, diff) {
        if (!Modernizr.cssanimations) return;

        jQuery(window).scroll(function() {
            jQuery.fn.rockthemes_animate_columns_action(obj, diff);
        });
    }

    jQuery.fn.rockthemes_animate_columns_action = function(obj, diff) {
        var current_obj = obj.div;

        var imagePos = current_obj.offset().top;


        var topOfWindow = jQuery(window).scrollTop() + jQuery(window).height() - diff;

        if (imagePos < topOfWindow && !obj.div.hasClass(obj.animation_class)) {
            setTimeout(function() {
                current_obj.addClass(obj.animation_class + " animated");
                if (current_obj.find(".ajax-body").length) {
                    jQuery.fn.rockthemes_animate_ajax_showcase(current_obj);
                }

                if (current_obj.find(".rock-skill").length) {
                    jQuery.fn.rockthemes_animate_skill(current_obj);
                }

                if (current_obj.find(".rockthemes-list").length) {
                    jQuery.fn.rockthemes_animate_list(current_obj, obj.animation_class);
                }
            }, obj.delay_time);
        }
    }

    jQuery.fn.rockthemes_animate_ajax_showcase = function(ajax_obj) {
        var latest_i = 0;
        ajax_obj.find(".ajax-body ul > li").each(function(i) {
            var that = jQuery(this);
            setTimeout(function() {
                that.addClass("animated fadeIn").css({
                    "opacity": "1"
                });;
            }, 100 * i);
            //jQuery(this).delay(100*i).animate({"opacity":"1"},150);
            latest_i = i;
        });

        setTimeout(function() {
            ajax_obj.removeClass("rockthemes-animate");
        }, latest_i * 150);
    }

    jQuery.fn.rockthemes_animate_skill = function(ajax_obj) {
        if (!Modernizr.cssanimations) return;
        ajax_obj.find(".rock-skill").each(function(i) {
            for (var i = 0; i < jQuery.rockthemes_skills.length; i++) {
                if (jQuery(this).attr("id") == jQuery.rockthemes_skills[i].id) {
                    var obj = jQuery.rockthemes_skills[i].obj;
                    var value = jQuery.rockthemes_skills[i].value;

                    setTimeout(function() {
                        obj.refresh(value);
                    }, ((i + 1) * 600));
                }
            }
        });
    }

    jQuery.fn.rockthemes_animate_list = function(list_element, animation) {
        list_element.find("li").css("opacity", "0").addClass("animated");

        var latest_i = 0;
        list_element.find(" ul > li").each(function(i) {
            var that = jQuery(this);
            setTimeout(function() {
                that.addClass(animation);
            }, 300 * i);
            latest_i = i;
        });

    }

    //Set Skill Default Value to 0
    jQuery(".rockthemes-animate .rock-skill").each(function() {
        if (!Modernizr.cssanimations) return;
        for (var i = 0; i < jQuery.rockthemes_skills.length; i++) {
            if (jQuery(this).attr("id") == jQuery.rockthemes_skills[i].id) {
                jQuery.rockthemes_skills[i].obj.refresh(0);
            }
        }
    });

    jQuery(".rockthemes-animate").each(function() {
        if (!Modernizr.cssanimations) return;
        var obj = new Object();
        obj.div = jQuery(this);
        obj.animation_class = jQuery(this).attr("animation-class");
        obj.delay_time = jQuery(this).attr("animation-delay-time");

        jQuery.fn.rockthemes_animate_columns(obj, 10);
    });

    if (!Modernizr.cssanimations) {
        jQuery(".rockthemes-animate").removeClass("rockthemes-animate");
    }


});

jQuery(window).load(function() {
    if (!Modernizr.cssanimations) return;

    setTimeout(function() {
        jQuery(".rockthemes-animate").each(function() {
            var obj = new Object();
            obj.div = jQuery(this);
            obj.animation_class = jQuery(this).attr("animation-class");
            obj.delay_time = jQuery(this).attr("animation-delay-time");

            jQuery.fn.rockthemes_animate_columns_action(obj, 0);
        });
    }, 150);

});