$(window).on("load", (function () { "use strict"; var e = $("#loading"); e.find("#loading-center-absolute").fadeOut(), e.delay(400).fadeOut("slow") })), $(window).on("scroll", (function () { "use strict"; $(window).scrollTop() > 80 ? $(".wsmainfull").addClass("scroll") : $(".wsmainfull").removeClass("scroll") })), $(document).ready((function () {
  "use strict"; (new WOW).init(), $("ul.tabs-1 li").on("click", (function () { var e = $(this).attr("data-tab"); $("ul.tabs-1 li").removeClass("current"), $(".tab-content").removeClass("current"), $(this).addClass("current"), $("#" + e).addClass("current") })), $(".grid-loaded").imagesLoaded((function () { $(".masonry-filter").on("click", "button", (function () { var a = $(this).attr("data-filter"); e.isotope({ filter: a }) })), $(".masonry-filter button").on("click", (function () { $(".masonry-filter button").removeClass("is-checked"), $(this).addClass("is-checked"); var a = $(this).attr("data-filter"); return e.isotope({ filter: a }), !1 })); var e = $(".masonry-wrap").isotope({ itemSelector: ".masonry-image", percentPosition: !0, transitionDuration: "0.7s", masonry: { columnWidth: ".masonry-image" } }) })), $(".image-link").magnificPopup({ type: "image" }), $(".video-popup1").magnificPopup({ type: "iframe", iframe: { patterns: { youtube: { index: "youtube.com", src: "https://www.youtube.com/embed/SZEflIVnhH8" } } } }), $(".video-popup2").magnificPopup({ type: "iframe", iframe: { patterns: { youtube: { index: "youtube.com", src: "https://www.youtube.com/embed/7e90gBu4pas" } } } }), $(".video-popup3").magnificPopup({ type: "iframe", iframe: { patterns: { youtube: { index: "youtube.com", src: "https://www.youtube.com/embed/0gv7OC9L2s8" } } } }), $(".count-element").each((function () { $(this).appear((function () { $(this).prop("Counter", 0).animate({ Counter: $(this).text() }, { duration: 4e3, easing: "swing", step: function (e) { $(this).text(Math.ceil(e)) } }) }), { accX: 0, accY: 0 }) })), $(".reviews-1-wrapper").owlCarousel({ items: 3, loop: !0, autoplay: !0, navBy: 1, autoplayTimeout: 4500, autoplayHoverPause: !0, smartSpeed: 1500, responsive: { 0: { items: 1 }, 767: { items: 1 }, 768: { items: 2 }, 991: { items: 3 }, 1e3: { items: 3 } } }), $(".reviews-4-wrapper").owlCarousel({ items: 2, loop: !0, autoplay: !0, navBy: 1, autoplayTimeout: 4500, autoplayHoverPause: !0, smartSpeed: 1500, responsive: { 0: { items: 1 }, 767: { items: 1 }, 768: { items: 2 }, 991: { items: 2 }, 1e3: { items: 2 } } }),
    $(".brands-carousel").owlCarousel({ items: 5, loop: !0, autoplay: !0, navBy: 1, nav: !1, autoplayTimeout: 4e3, autoplayHoverPause: !1, smartSpeed: 2e3, responsive: { 0: { items: 2 }, 550: { items: 3 }, 767: { items: 3 }, 768: { items: 4 }, 991: { items: 5 }, 1e3: { items: 5 } } }),
    $(".service-carousel").owlCarousel({ items: 4, loop: !0, autoplay: !0, navBy: 1, nav: !1, autoplayTimeout: 4e3, autoplayHoverPause: !1, smartSpeed: 2e3, responsive: { 0: { items: 2 }, 550: { items: 3 }, 767: { items: 3 }, 768: { items: 4 }, 991: { items: 4 }, 1e3: { items: 4 } } }),


    $(".request-form").validate({ rules: { name: { required: !0, minlength: 2, maxlength: 16 }, email: { required: !0, email: !0 } }, messages: { name: { required: "Please enter no less than (2) characters" }, email: { required: "We need your email address to contact you", email: "Your email address must be in the format of name@domain.com" } } }), $(".contact-form").validate({
      rules: { name: { required: !0, minlength: 1, maxlength: 16 }, email: { required: !0, email: !0 }, phone: { required: !0 }, company: { required: !0 }, services: { required: !0 }, budget: { required: !0 }, message: { required: !0, minlength: 2 } }, messages: {
        name: { required: "Please enter no less than (1) characters" },
        email: {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com"
        },
       
        message: { required: "Please enter no less than (2) characters" }
      }
    }),
    $(".comment-form").validate({
      rules: {
        name: { required: !0, minlength: 1, maxlength: 16 },
        email: { required: !0, email: !0 }, phone: { required: !0 }, message: { required: !0, minlength: 2 }
      },
      messages: {
        name: { required: "Please enter no less than (1) characters" }, email:
        {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com"
        },
        message: { required: "Please enter no less than (2) characters" }
      }
    })
}));