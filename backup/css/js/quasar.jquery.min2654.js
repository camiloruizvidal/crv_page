(function() {
  function n() {
    jQuery(".added").remove();
    jQuery(".team-member-article").removeClass("current");
    var c = +jQuery(".team-member-content").width(), e = +jQuery(".team-member-article").width(), c = c / (e + 20), c = Math.floor(c);
    0 == c && (c = 1);
    jQuery(".team-member-article.show:nth-of-type(" + (c + "n") + ")").after('<div class="content added"></div>');
  }
  jQuery(document).ready(function() {
    function c(a) {
      a.offset();
      jQuery(window).scrollTop();
    }
    function e(a, b) {
      var d = "";
      if (a.parent().find(" > ul").length) {
        var l;
        a.parent().find(" > ul > li > a").each(function() {
          "undefined" != typeof jQuery(this).attr("href") && (l = jQuery(this).clone().children().remove().end().text(), jQuery(this).parent().find(" > ul").length ? (d += '<option value="' + jQuery(this).attr("href") + '" class="' + jQuery(this).parents("li").attr("class") + '">' + b + " " + l + "</option>", d += e(jQuery(this), b + "--")) : jQuery(this).parent().find(" > .sub_wrapper > ul").length ? (d += '<option value="' + jQuery(this).attr("href") + '" class="' + jQuery(this).parents("li").attr("class") + 
          '">' + b + " " + l + "</option>", d += e(jQuery(this).parent().find(" > .sub_wrapper > ul"), b + "--")) : d += '<option value="' + jQuery(this).attr("href") + '" class="' + jQuery(this).parents("li").attr("class") + '">' + b + " " + l + "</option>");
        });
      }
      return d;
    }
    jQuery(window).resize(function() {
    });
    var g = "onorientationchange" in window ? "orientationchange" : "resize";
    window.addEventListener && window.addEventListener(g, function() {
      jQuery(window).trigger("resize");
    }, !1);
    Modernizr && (Modernizr.addTest("ipad", function() {
      return!!navigator.userAgent.match(/iPad/i);
    }), Modernizr.addTest("iphone", function() {
      return!!navigator.userAgent.match(/iPhone/i);
    }), Modernizr.addTest("ipod", function() {
      return!!navigator.userAgent.match(/iPod/i);
    }), Modernizr.addTest("appleios", function() {
      return Modernizr.ipad || Modernizr.ipod || Modernizr.iphone;
    }), Modernizr.addTest("android", function() {
      return!!navigator.userAgent.match(/Android/i);
    }), Modernizr.addTest("ismobile", function() {
      return Modernizr.ipad || Modernizr.ipod || Modernizr.iphone || Modernizr.android;
    }));
    jQuery(window).width();
    jQuery(window).scroll(function() {
      180 < jQuery(this).scrollTop() ? jQuery("#toTop").fadeIn() : jQuery("#toTop").fadeOut();
    });
    jQuery("#toTop").click(function() {
      jQuery("body,html").animate({scrollTop:0}, 800);
    });
    jQuery(document).on("mouseenter", ".regular-hover-container .hover-bg", function() {
      var a = !1, b = jQuery(this).height();
      -1 < jQuery(this).parent().attr("class").toString().indexOf("small-thumb") && (a = !0);
      jQuery(this).find(".iconeffect").css({"margin-top":.68 * b, opacity:"0"});
      jQuery(this).stop(!0, !0).animate({opacity:1}, 280);
      var d = b / 2 - 24;
      a && (d = 0);
      jQuery(this).find(".iconeffect").each(function(a) {
        jQuery(this).delay(100 * a + 100).animate({"margin-top":d, opacity:"1"}, 480, "easeOutBack");
      });
    });
    jQuery(document).on("mouseleave", ".regular-hover-container .hover-bg", function() {
      jQuery(this);
      jQuery(this).stop(!0, !0).delay(140).animate({opacity:0}, 280, function() {
      });
      jQuery(this).find(".iconeffect").each(function(a) {
        jQuery(this).delay(50 * a).animate({"margin-top":"0px", opacity:"0"}, 180);
      });
    });
    jQuery(".comments-field").each(function() {
      jQuery(this).live("focus", function() {
        jQuery(this).val() == jQuery(this).attr("title") && jQuery(this).val("");
        jQuery(this).addClass("box-shadow-dark");
      });
      jQuery(this).live("blur", function() {
        "" == jQuery(this).val() && jQuery(this).val(jQuery(this).attr("title"));
        jQuery(this).removeClass("box-shadow-dark");
      });
    });
    jQuery(document).on("mouseenter", ".rock-social-icon", function() {
      jQuery(this).find(".social-icon-container").stop(!0, !0).animate({"margin-top":"-20px"}, 300);
    });
    jQuery(document).on("mouseleave", ".rock-social-icon", function() {
      jQuery(this).find(".social-icon-container").stop(!0, !0).animate({"margin-top":"0px"}, 300);
    });
    jQuery(document).on("click", ".special-search-icon", function(a) {
      a.preventDefault();
      a = jQuery(this).parent().find(".special-search-overlay-box");
      a.hasClass("search-overlay-open") ? a.removeClass("search-overlay-open").slideUp(100) : a.addClass("search-overlay-open").slideDown(300);
    });
    jQuery(document).on("mouseup", function(a) {
      var b = jQuery(".search-overlay-open");
      b.is(a.target) || 0 !== b.has(a.target).length || jQuery(".fa.fa-search").is(a.target) || 0 !== jQuery(".fa.fa-search").has(a.target).length || jQuery(".special-search-overlay-box").hasClass("search-overlay-open") && jQuery(".special-search-overlay-box").removeClass("search-overlay-open").slideUp(100);
    });
    jQuery("#nav ul ul").css({display:"block"});
    jQuery("#nav ul ul ul").css({display:"none"});
    jQuery("#nav > ul > li").each(function(a, b) {
      0 < jQuery(this).find(" > ul .desc").length && jQuery(this).find(" > ul .desc").remove();
      if (0 < jQuery(this).find("> ul").length) {
        var d, c;
        0 >= jQuery(this).find(".sub_wrapper").length && (0 < jQuery(this).find("> ul > li > ul").length && jQuery(this).find("> ul > li").each(function(a, d) {
          0 < jQuery(this).find("> ul").length && (jQuery(this).find(" > a").append(' <i class="fa fa-chevron-right"></i>'), jQuery(this).find(" > ul > li").each(function(a, d) {
            0 < jQuery(this).find("> ul").length && jQuery(this).find(" > a").append(' <i class="fa fa-chevron-right"></i>');
          }));
        }), d = parseInt(jQuery(this).find("> ul > li").width().toString().replace("px", "")) + 16, c = parseInt(jQuery(this).find("> ul").height().toString().replace("px", "")) + 16, d = '<div class="sub_wrapper" style="z-index:-5; width:' + d + 'px;" height-ref="' + c + '"></div>', jQuery(this).find("> ul").wrap(d));
        jQuery(this).find(".sub_wrapper").find(" > ul").stop(!0, !0).css({top:"-100%", opacity:"0"});
        0 < jQuery(this).find(">a").find(".desc").length ? jQuery(this).find(">a").find(".desc").before(' <i class="fa fa-chevron-down"></i>') : jQuery(this).find(">a").append(' <i class="fa fa-chevron-down"></i>');
        d = jQuery(this).find(">ul > li> ul");
        0 < d.length && d.parent().find(">a").addClass("main-arrow-right");
      }
    });
    var h = !0, q = jQuery(".nav-transparent").length ? .88 : 1;
    jQuery("#nav > ul > li").css("position", "relative").prepend(jQuery("<div>").addClass("btn-colored-hover-nav"));
    jQuery(document).on("mouseenter", "#nav > ul > li", function() {
      var a;
      h = !1;
      a = jQuery(this).find(".sub_wrapper");
      jQuery("#nav > ul > li .sub_wrapper").css({zIndex:"-5", opacity:"0"});
      var b = 48 * parseInt(jQuery(this).find(" > .sub_wrapper > ul > li").length) + 180, d = a.attr("height-ref") + "px";
      a.stop(!0, !0).css({height:d, overflow:"hidden"});
      jQuery(this).find(".sub_wrapper").css({zIndex:"99", opacity:q}).find(" > ul").css({opacity:"1"}).stop(!0, !0).animate({top:"0", opacity:"1"}, b, function() {
        h || (jQuery(this).parent().css("overflow", "visible"), jQuery(this).parents(".fixed-top-nav"));
      });
    });
    jQuery(document).on("mouseleave", "#nav > ul > li", function() {
      jQuery(window).off("scroll", c);
      var a;
      h = !0;
      a = jQuery(this).find(".sub_wrapper");
      a.find(".sub-nav-hover, .sub-sub-nav-hover").css("opacity", "0");
      a.css({overflow:"hidden"}).find(" > ul").stop(!0, !0).animate({top:"-100%", opacity:"1"}, 280, function() {
        h && a.css({zIndex:"-5", opacity:"0", height:"10px"});
      });
      a.stop(!0, !0).animate({height:"10px"}, 300);
    });
    jQuery("#nav > ul > li > .sub_wrapper > ul > li").hover(function() {
      h = !1;
      jQuery(this).find(" > ul").stop(!0, !0).animate({width:"toggle", opacity:"1"}, 150);
      setTimeout(function() {
        jQuery(this).find(" > a").addClass("sub_font_color");
        jQuery(this).find(" > a a").removeClass("sub_font_color");
      }, 100);
    }, function() {
      jQuery(this).find("> ul").stop(!0, !0).animate({width:"toggle", opacit:"0"}, 150);
      jQuery(this).hasClass("current_page_item");
      jQuery(this).find(" > a").hasClass("sub_font_color") && jQuery(this).find(" > a").removeClass("sub_font_color");
    });
    jQuery("#nav > ul > li > .sub_wrapper > ul > li").css("position", "relative").append(jQuery("<div>").addClass("sub-nav-hover"));
    jQuery("#nav ul li ul li ul li").hover(function() {
      h = !1;
      jQuery(this).find("> .sub-sub-nav-hover").stop(!0, !0).animate({opacity:1});
      jQuery(this).find(" > a").addClass("sub_font_color");
      0 < jQuery(this).find("> ul").length && jQuery(this).find("> ul").stop(!0, !0).animate({width:"toggle", opacity:"1"}, 150);
    }, function() {
      h = !0;
      jQuery(this).hasClass("current_page_item") || jQuery(this).find("> .sub-sub-nav-hover").stop(!0, !0).animate({opacity:0});
      0 < jQuery(this).find("> ul").length && jQuery(this).find("> ul").stop(!0, !0).animate({width:"toggle", opacity:"0"}, 150);
      jQuery(this).find(" > a").hasClass("sub_font_color") && jQuery(this).find(" > a").removeClass("sub_font_color");
    });
    jQuery("#nav ul li ul li ul li").css("position", "relative").append(jQuery("<div>").addClass("sub-sub-nav-hover"));
    var k = null, p = null;
    !Modernizr.ismobile && 1024 < jQuery(window).width() && (jQuery(document).on("mouseenter", ".sub_wrapper > ul", function(a) {
      if ("-100%" !== jQuery(this).css("top")) {
        jQuery(document).on("mousemove", ".sub_wrapper > ul", function(a) {
          p = a;
        });
        k && clearInterval(k);
        var b = jQuery(this);
        k = setInterval(function() {
          var a = p.pageY - jQuery(window).scrollTop(), c = jQuery(window).height(), e = parseInt(parseInt(b.offset().top) - jQuery(window).scrollTop());
          jQuery("#wpadminbar").length && (c -= parseInt(jQuery("#wpadminbar").height()), e -= parseInt(jQuery("#wpadminbar").height()));
          parseInt(b.height()) + 30 <= parseInt(c) || (a + 50 > c && parseInt(e + parseInt(b.height())) > c ? b.stop(!1, !1).animate({top:parseInt(b.css("top").toString().replace("px", "")) - 50 + "px"}, 100) : 0 > a - 50 && (a = parseInt(b.css("top").toString().replace("px", "")) + 50, 0 < a && (a = 0), b.stop(!1, !1).animate({top:a + "px"}, 100)));
        }, 100);
      }
    }), jQuery(document).on("mouseleave", ".sub_wrapper > ul", function() {
      k && (jQuery(document).off("mousemove", ".sub_wrapper > ul"), clearInterval(k));
    }));
    if ("undefined" != typeof rockthemes.frontend_options && rockthemes.frontend_options.disable_top_links_for_ipad) {
      jQuery(document).on("touchstart, click", "#nav a", function(a) {
        (Modernizr.ipad || Modernizr.android) && jQuery(this).next().hasClass("sub_wrapper") && 0 != parseInt(jQuery(this).next().find(" > ul").css("top")) && a.preventDefault();
      });
    }
    (function() {
      for (var a = jQuery("#nav .current-menu-item").first(), b = 0;a.parent().parent() && "nav" != a.parent().parent().attr("id") && 8 > b;) {
        a.is("li"), a = a.parent(), b++;
      }
      a.addClass("current-menu-item");
    })();
    "nav" == !jQuery(".current_page_item").parent().parent().attr("id") && "nav" == !jQuery(".current_page_item").parent().attr("id") && (0 < jQuery(".current_page_item").find(".sub-nav-hover").length ? (jQuery(".current_page_item").parent().parent().find(".btn-colored-hover-nav").stop().animate({opacity:1}, 140), jQuery(".current_page_item").parent().parent().find("> a").hasClass("nav-hover-color") || jQuery(".current_page_item").parent().parent().find("> a").addClass("nav-hover-color")) : 0 < jQuery(".current_page_item").find(".sub-sub-nav-hover").length && 
    (jQuery(".current_page_item").find(".sub-sub-nav-hover").css("opacity", .1), jQuery(".current_page_item").parent().parent().parent().parent().find(".btn-colored-hover-nav").stop().animate({opacity:1}, 140), jQuery(".current_page_item").parent().parent().parent().parent().find("> a").hasClass("nav-hover-color") || jQuery(".current_page_item").parent().parent().parent().parent().find("> a").addClass("nav-hover-color")));
    jQuery(document).on("change", "#nav .nav_responsive_select", function() {
      window.location = jQuery(this).find("option:selected").val();
    });
    (function() {
      var a;
      a = "" + e(jQuery("#nav .nav-menu"), "");
      a = '<select class="nav_responsive_select hide">' + a + "</select>";
      jQuery("#nav").append(a);
      jQuery("#nav select .current-menu-item").each(function() {
        jQuery(this).hasClass("menu-item-has-children") ? jQuery(this).find(".current-menu-item").length || jQuery(this).attr("selected", "selected") : jQuery(this).attr("selected", "selected");
      });
    })();
    jQuery(document).ready(function() {
      jQuery(".widget_nav_menu .menu").navgoco({accordion:!0});
    });
    if ("undefined" != typeof rockthemes.frontend_options && rockthemes.frontend_options.activate_smooth_scroll) {
      var f = jQuery(window).scrollTop(), m = !1;
      setTimeout(function() {
        f = jQuery(window).scrollTop();
      }, 150);
      jQuery("body").on("mousewheel", function(a) {
        a.preventDefault();
        var b = 99;
        m && (b += b);
        f = 0 < a.deltaY ? f - b : f + b;
        f > jQuery(document).height() - jQuery(window).height() && (f = jQuery(document).height() - jQuery(window).height());
        0 > f && (f = 0);
        m = !0;
        jQuery("body,html").stop(!1, !1).animate({scrollTop:f}, 510, "easeOutQuart", function() {
          m = !1;
        });
      });
      jQuery(window).scroll(function() {
        m || (f = jQuery(window).scrollTop());
      });
    }
    jQuery(".team-member-article").length && (jQuery(".team-member-article").addClass("show"), n(), jQuery(window).resize(function() {
      jQuery(".team-member-article.current").trigger("click");
      n();
    }), jQuery(".team-member-article"), jQuery(document).on("click", ".team-member-article", function(a) {
      a.preventDefault();
      if (!jQuery(this).hasClass("article_clicked")) {
        var b = jQuery(this);
        b.addClass("article_clicked");
        a = jQuery(this).find(".member-details").html();
        a.indexOf("script") && (a = a.replace(/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi, ""));
        180 < jQuery(window).width() - jQuery(this).parent().width() ? (jQuery(this).parent().parent().after(jQuery(".team-member-content-row")), jQuery(".team-member-content-row").addClass("row")) : (jQuery(this).parent().after(jQuery(".team-member-content-row")), jQuery(".team-member-content-row").removeClass("row"));
        var d = jQuery(this).parent().parent().parent().find(".team-member-content").first();
        if (jQuery(this).hasClass("current")) {
          var c = jQuery(this);
          jQuery(d).slideUp("400", "linear", function() {
            c.removeClass("current");
            jQuery(d).removeClass("open").empty();
            c.parent().find(".team-member-content").empty();
            b.removeClass("article_clicked");
          });
        } else {
          jQuery(".team-member-article").removeClass("current"), jQuery(this).addClass("current"), jQuery(this).parent().parent().parent().find(".team-member-content").empty(), jQuery(".open").empty(), d.hasClass("open") ? jQuery(d).addClass("open").html(a) : jQuery(d).html(a).slideDown().addClass("open"), setTimeout(function() {
            b.removeClass("article_clicked");
          }, 400);
        }
      }
    }));
  });
  jQuery.fn.rockthemes_get_background_image_size = function() {
    var c = jQuery(this).css("background-image").replace(/url\((['"])?(.*?)\1\)/gi, "$2").split(",")[0], e = new Image;
    e.src = c;
    return{width:e.width, height:e.height};
  };
  jQuery.fn.rockthemes_svg_control = function() {
    Modernizr && (Modernizr.svg || jQuery('img[src*="svg"].use_svg').attr("src", function() {
      return jQuery(this).attr("src").replace(".svg", ".png");
    }));
  };
  jQuery.fn.stripslashes = function(c) {
    return(c + "").replace(/\\(.?)/g, function(c, g) {
      switch(g) {
        case "\\":
          return "\\";
        case "0":
          return "\x00";
        case "":
          return "";
        default:
          return g;
      }
    });
  };
  jQuery(window).load(function() {
    function c() {
      return-1 != navigator.userAgent.toLowerCase().indexOf("safari") && -1 == navigator.userAgent.toLowerCase().indexOf("chrome") ? !0 : !1;
    }
    function e() {
      0 >= jQuery(document).find(".relative-container").length || (jQuery(document).find(".regular-hover-container").each(function() {
        100 > jQuery(this).width() && !jQuery(this).hasClass("small-thumb") && jQuery(this).addClass("small-thumb");
        100 <= jQuery(this).width() && jQuery(this).hasClass("small-thumb") && jQuery(this).removeClass("small-thumb");
      }), jQuery(document).find(".ajax-filtered-gallery-holder .ajax-body ul").each(function() {
        var c = jQuery(this).find("li:first-child").width();
        10 >= jQuery(this).width() - c && jQuery(this).css({margin:"0px auto", width:c});
      }));
    }
    jQuery.fn.rockthemes_svg_control();
    jQuery(".row").each(function() {
      1 > jQuery(".ie.ie8").length && 1 > jQuery(".ie.ie9").length || (1 > jQuery(this).children().length && !(0 < jQuery(this).html().length && "" != jQuery.trim(jQuery(this).html())) && (0 < jQuery(this).text().length && "" != jQuery.trim(jQuery(this).text()) || jQuery(this).remove()), jQuery(this).find(" > .column").length && 1 > jQuery(this).find(" > .column").children().length && !(0 < jQuery(this).find(" > .column").html().length && "" != jQuery.trim(jQuery(this).find(" > .column").html())) && 
      (0 < jQuery(this).find(" > .column").text().length && "" != jQuery.trim(jQuery(this).find(" > .column").text()) || jQuery(this).remove()), jQuery(this).find(" > .columns").length && 1 > jQuery(this).find(" > .columns").children().length && !(0 < jQuery(this).find(" > .columns").html().length && "" != jQuery.trim(jQuery(this).find(" > .columns").html())) && (0 < jQuery(this).find(" > .columns").text().length && "" != jQuery.trim(jQuery(this).find(" > .columns").text()) || jQuery(this).remove()));
    });
    var g = 0;
    if (jQuery("#main-nav-bg").length && jQuery(".quasar-nav-fixed-ready").length && !Modernizr.ismobile && 1024 < jQuery(window).width() && 1 > jQuery(".ie.ie8").length && 1 > jQuery(".ie.ie9").length && (g = jQuery("#main-nav-bg").offset(), jQuery(".main-nav-placeholder").length || (jQuery("#main-nav-bg").wrap('<div class="main-nav-placeholder" style="position:relative;"></div>'), jQuery(".main-nav-placeholder").css({"min-height":jQuery("#main-nav-bg").height() + "px"})), jQuery(window).scroll(function() {
      jQuery("#main-nav-bg").hasClass("fixed-top-nav") ? jQuery(this).scrollTop() < g.top && (c() ? jQuery("#main-nav-bg").removeClass("fixed-top-nav") : jQuery("#main-nav-bg").removeClass("fixed-top-nav fadeInDown animated"), jQuery("#main-nav-bg").hasClass("nav-right") && jQuery("#main-nav-bg").removeClass("nav-box")) : jQuery(this).scrollTop() > g.top && (c() ? jQuery("#main-nav-bg").addClass("fixed-top-nav") : jQuery("#main-nav-bg").addClass("fixed-top-nav fadeInDown animated"), jQuery("#main-nav-bg").hasClass("nav-right") && 
      jQuery("#main-nav-bg").addClass("nav-box"));
    }), !c())) {
      jQuery(document).on("animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd", "#main-nav-bg", function() {
        jQuery("#main-nav-bg.fixed-top-nav").length && jQuery("#main-nav-bg.fixed-top-nav").removeClass("fadeInDown animated");
      });
    }
    jQuery(window).resize(function() {
      e();
    });
    e();
  });
})();