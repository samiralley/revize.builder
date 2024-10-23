/*-----------------------------------------------------------------------------------

	Theme Name: Site Name
	Front-end developer: Samir Alley
	Author Design: Samir Alley @samiralley
	Author URI: https://www.revize.com/
	Date: 10/09/2024
	Version: 1.0

-----------------------------------------------------------------------------------*/

(function ($) {
  "use strict";

  var $window = $(window),
    $body = $("body"),
    $html = $("html"),
    $rzBarWrap = $("#rz-bar-wrap"),
    $rzBtnsContainer = $(".rz-btns-container");

  // RZ Class + remove revize bar
  if (typeof RZ !== "undefined") {
    if (RZ.login) {
      $body.addClass("user-logged-in");
    } else {
      // $body.addClass("user-not-logged-in");
    }
  }

  // needed for revize bar
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  const tooltipList = [...tooltipTriggerList].map((tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl));

  // Photo Gallery from https://www.lightgalleryjs.com/demos/thumbnails/
  lightGallery(document.getElementById("lightgallery"), {
    plugins: [lgZoom, lgThumbnail, lgVideo],
    licenseKey: "E85B5C22-0F6A-4E84-8A38-013E4E9E31E2",
    speed: 500,
    // ... other settings
  });

  fitty(".mega-font", {
    minSize: 32,
    maxSize: 800,
  });

  // matchHeight not in use but might be an option
  if (typeof $.fn.matchHeight !== "undefined") {
    $('[data-match-height="true"]').matchHeight({
      //defaults
      byRow: true,
      property: "height", // height or min-height
      target: null,
      remove: false,
    });
  }
  // https://codepen.io/WebIntricate/pen/Pxzpro
  $body.on("click", ".dropdown-menu", function (e) {
    $(this).parent().is(".open") && e.stopPropagation();
  });

  $(".selectall").click(function () {
    if ($(this).is(":checked")) {
      $(".option").prop("checked", true);
      var total = $('input[name="options[]"]:checked').length;
      $(".dropdown-text").html("(" + total + ") Selected");
      $(".select-text").html(" Deselect");
    } else {
      $(".option").prop("checked", false);
      $(".dropdown-text").html("(0) Selected");
      $(".select-text").html(" Select");
    }
  });

  $("input[type='checkbox'].justone").change(function () {
    var a = $("input[type='checkbox'].justone");
    if (a.length == a.filter(":checked").length) {
      $(".selectall").prop("checked", true);
      $(".select-text").html(" Deselect");
    } else {
      $(".selectall").prop("checked", false);
      $(".select-text").html(" Select");
    }
    var total = $('input[name="options[]"]:checked').length;
    $(".dropdown-text").html("(" + total + ") Selected");
  });

  //make menu Mega
  $("#nav>li>ul")
    .filter(function () {
      return $(this).find("li").length >= 12;
    })
    .addClass("make-mega")
    .parent()
    .addClass("static");

  // header
  var scrollTop = $(window).scrollTop(),
    stickyHeader = $('[data-sticky="true"]'),
    // #todo stickyHeader.offset() is undefined error
    elementOffset = stickyHeader.offset().top,
    distance = elementOffset - scrollTop,
    logoNoScroll = $(".logo-no-scroll"),
    logoOnScroll = $(".logo-on-scroll");

  $(window).on("scroll", function () {
    if ($(window).scrollTop() >= distance) {
      stickyHeader.addClass("sticky-top");
      logoOnScroll.removeClass("d-none");
      logoNoScroll.addClass("d-none");
    } else {
      stickyHeader.removeClass("sticky-top");
      logoOnScroll.addClass("d-none");
      logoNoScroll.removeClass("d-none");
    }
  });

  // Font resizer
  function textResizer() {
    var $dec, $inc;
    $inc = $("#increase-font");
    $dec = $("#decrease-font");
    $inc.on("click", function (e) {
      return $("body").css({
        "font-size": "+=1.5",
      });
    });
    $dec.on("click", function (e) {
      return $("body").css({
        "font-size": "-=1.5",
      });
    });
    return $("#font-resizer a").on("click", function (e) {
      return e.preventDefault();
    });
  }
  textResizer();

  // Clone icons to each navigation link/span
  $('[data-nav-icons="true"] #navicons li').each(function () {
    var navIconIndex = $(this).index();
    $(this).find("i").prependTo($("#nav>li").eq(navIconIndex).children("a,span"));
  });

  // Keyboard Navigation: Nav, flyout
  var isClick = false;
  $("#nav li a, #submenu  li a, a, button, .toggle, .toggle2").on("focusin", function (e) {
    if (isClick === false) {
      $(".focused").removeClass("focused");
      $(e.currentTarget).parents("#nav li, #submenu li").addClass("focused");
      $(".opened:not(.focused) ul:visible,.opened2:not(.focused) ul:visible").slideUp().parent().removeClass("opened opened2");
    } else {
      $(".focused").removeClass("focused");
      isClick = false;
    }
  });

  // for revize buttons container
  $rzBtnsContainer.each(function () {
    var $container = $(this);
    if ($container.html().trim() != "") {
      $container.closest(".has-edit-buttons").addClass("yes-has-edit-buttons");
    }
  });
  $(".has-edit-buttons").not(".yes-has-edit-buttons").removeClass("has-edit-buttons");

  // responsive views from revize bar
  var urlParams = new URLSearchParams(window.location.search); //get all parameters
  var hidebar = urlParams.get("hidebar"); //extract the hidebar parameter - this will return NULL if hidebar isn't a parameter

  if (hidebar) {
    //check if hidebar parameter is set to anything
    $body.removeClass("user-logged-in").addClass("hide-edit-btns");
  }

  // prevent focused class changes on click - This way arrows wont pop when clicking nav links
  $("#nav a,#submenu a").on("mousedown", function () {
    isClick = true;
  });

  /*!
	Name: Estimated Reading Time
	Dependencies: jQuery
	Author: Michael Lynch
	Author URL: http://michaelynch.com
	Date Created: August 14, 2013
	Licensed under the MIT license
	*/

  $.fn.estimatedReadingTime = function (options) {
    //return if no element was bound
    //so chained events can continue
    if (!this.length) {
      return this;
    }
    //define default parameters
    var defaults = {
      readingTimeTarget: "eta",
      wordCountTarget: "words",
      readingSpeed: 200,
      round: true,
    };
    //define plugin
    var plugin = this;
    //define element
    var el = $(this);
    //merge defaults and options
    plugin.settings = $.extend({}, defaults, options);
    //define vars
    var readingTimeTarget = plugin.settings.readingTimeTarget;
    var wordCountTarget = plugin.settings.wordCountTarget;
    var readingSpeed = plugin.settings.readingSpeed;
    var round = plugin.settings.round;
    //define text
    var text = el.text();
    //split text by spaces to define total words
    var totalWords = text.split(" ").length;
    //define words per second based on words per minute (readingSpeed)
    var wordsPerSecond = readingSpeed / 60;
    //define total reading time in seconds
    var totalReadingTimeSeconds = totalWords / wordsPerSecond;
    //define reading time in minutes
    var readingTimeMinutes = Math.round(totalReadingTimeSeconds / 60);
    //define remaining reading time seconds
    var readingTimeSeconds = Math.round(totalReadingTimeSeconds - readingTimeMinutes * 60);
    //if round is set to true
    if (round === true) {
      //if minutes are greater than 0
      if (readingTimeMinutes > 0) {
        //set reading time by the minute
        $("#" + readingTimeTarget).text(readingTimeMinutes + " Min Read");
      } else {
        //set reading time as less than a minute
        $("#" + readingTimeTarget).text("Less than a minute");
      }
      //if round is set to false
    } else {
      //format reading time
      var readingTime = readingTimeMinutes + ":" + readingTimeSeconds;
      //set reading time in minutes and seconds
      $("#" + readingTimeTarget).text(readingTime + " Min");
    }

    //if word count container isn't blank or undefined
    if (wordCountTarget !== "" && wordCountTarget !== undefined) {
      //set word count
      $("#" + wordCountTarget).text(totalWords);
    }
  };
  $("#post-details").estimatedReadingTime();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $("#back-to-top").css({
        opacity: 1,
        transform: "translateX(1rem)",
        transition: "all .5s",
      });
    } else {
      $("#back-to-top").css({
        opacity: 0,
        transform: "translateX(-100px)",
        transition: "all .5s",
      });
    }
  });

  $($("a[href='#top']")).click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      800
    );
    return false;
  });

  function cloneNavItems() {
    if ($window.width() < 992) {
      var headerItem = $(".move-to-offcanvas");
      var cloned = headerItem.clone();
      cloned.appendTo(".offcanvasHeaderItems-offcanvas-body").removeClass("d-none");

      //#todo keeps on appendTo test it
    } else {
      // Insert needed for desktop
    }
  }
  $window.on("load", function () {
    cloneNavItems();
  });

  // Menu Arrows and Toggles
  $("#nav >li>ul,#submenu >li>ul").addClass("first-level");
  $("#nav  li ul ul").addClass("second-level");
  $("#nav>li:has(ul)").each(function () {
    $('<a href="#" class="fa fa-angle-down toggle" tabindex="0" aria-haspopup="true" aria-expanded="false" id="dropdown-toggle-' + $(this).index() + '" aria-label="Show Dropdown for ' + $(this).find("a:first").text() + '"></a>').insertAfter(
      $(this).find("a:first")
    );
    $(this)
      .find("ul:first")
      .attr("aria-labelledby", "dropdown-toggle-" + $(this).index());
  });
  $("#nav li ul>li:has(ul)").each(function (index) {
    $('<a href="#" class="fa fa-angle-down toggle2" tabindex="0" aria-haspopup="true" aria-expanded="false" id="sub-dropdown-toggle-' + index + '" aria-label="Show Dropdown for ' + $(this).find("a:first").text() + '"></a>').insertAfter(
      $(this).find("a:first")
    );
    $(this)
      .find("ul:first")
      .attr("aria-labelledby", "sub-dropdown-toggle-" + index);
  });
  $("#submenu >li:has(ul)").each(function () {
    $('<a href="#" class="fa fa-angle-down toggle" tabindex="0" aria-haspopup="true" aria-expanded="false" id="flyout-dropdown-toggle-' + $(this).index() + '" aria-label="Show Flyout for ' + $(this).find("a:first").text() + '"></a>').insertAfter(
      $(this).find("a:first")
    );
    $(this)
      .find("ul:first")
      .attr("aria-labelledby", "flyout-dropdown-toggle-" + $(this).index());
  });

  function navDropdowns() {
    if ($window.width() < 992) {
      //do nothing
    } else {
      $("ul.first-level").hide();
      $("#nav > li, #nav > li li").hover(
        function () {
          if ($("> ul.first-level, > ul.second-level", this).not(".make-mega .second-level").length > 0) {
            $("> ul.first-level, > ul.second-level", this).not(".make-mega .second-level").stop().delay(400).fadeIn(0);
          }
        },
        function () {
          if ($("> ul.first-level,> ul.second-level", this).not(".make-mega .second-level").length > 0) {
            $("> ul.first-level,> ul.second-level", this).not(".make-mega .second-level").stop().fadeOut(0);
          }
        }
      );
    }
  }

  navDropdowns();
  $window.on("resize", navDropdowns);

  function megaPosition() {
    if ($window.width() > 992) {
      $(".make-mega").css({
        left: -$("#nav").offset().left + 0,
      });
      $(".make-mega").css({
        width: $(window).width() - 0,
      });
    }
  }
  $window.on("load", function () {
    // #todo check this on scroll when nav items shrink
    megaPosition();
  });

  $window.on("resize scroll", megaPosition);

  $(".toggle").on("click keydown", function (e) {
    if (e.keyCode === 13 || e.type === "click") {
      e.preventDefault();
      var $parent = $(this).parent();
      var $parentLi = $parent.parent();
      $parent.toggleClass("opened");
      if ($parent.addClass("active") && $(this).next(".first-level").is(":visible")) {
        $(this).next(".first-level").slideUp();
        $parent.removeClass("active");
        $(this).attr({
          "aria-expanded": "false",
        });
      } else {
        $(this).attr({
          "aria-expanded": "true",
        });
        $(".first-level").slideUp("slow");
        $parent.addClass("active");
        $(this).next(".first-level").slideToggle();
      }
    }
  });
  $(".toggle2").on("click keydown", function (e) {
    if (e.keyCode === 13 || e.type === "click") {
      e.preventDefault();
      var $parent = $(this).parent();
      var $parentLi = $parent.parent();
      $parent.toggleClass("opened2");
      if ($parent.addClass("active") && $(this).next(".second-level").is(":visible")) {
        $(this).next(".second-level").slideUp();
        $parent.removeClass("active");
        $(this).attr({
          "aria-expanded": "false",
        });
      } else {
        $(this).attr({
          "aria-expanded": "true",
        });
        $(".second-level").slideUp("slow");
        $parent.addClass("active");
        $(this).next(".second-level").slideToggle();
      }
    }
  });

  // close nav if left
  $(".desktop *").focus(function (e) {
    var $opened = $(".opened");
    var $opened2 = $(".opened2");
    if ($opened.length > 0 || $opened2.length > 0) {
      if ($(".opened :focus").length < 1) {
        $opened.children("ul").slideUp();
        $opened.removeClass("opened");
        $(".opened2").removeClass("opened2");
      }
      if ($(".opened2 :focus").length < 1) {
        $opened2.children("ul").slideUp();
        $opened2.removeClass("opened2");
      }
    }
  });

  function fillSide() {
    if ($window.width() > 992) {
      var whiteSpace = parseFloat($(".container").css("margin-right")) + 15;
      $(".fillLeft").css("margin-left", -whiteSpace);
      $(".fillLeft.withPadding").css("padding-left", whiteSpace);
      $(".fillRight").css("margin-right", -whiteSpace);
      $(".fillRight.withPadding").css("padding-right", whiteSpace);
    }
  }
  fillSide();
  $window.resize(fillSide);

  /*
   * E-Notify Auto submit
   */
  $.urlParam = function (n) {
    var e = new RegExp("[?&]" + n + "=([^]*)").exec(window.location.href);
    return null == e ? null : e[1] || 0;
  };
  var $enotify = $('iframe[src*="/revize/plugins/notify/notify.jsp"]');
  if ($enotify.length > 0) {
    var emailStr = $.urlParam("email");
    if (emailStr != null) {
      $enotify.attr("src", $enotify.attr("src") + "&email=" + emailStr);
    }
  }

  // Make sure all calendars have unique ids
  $('iframe[name="calendar"]').each(function (index, calendar) {
    calendar.id = "calendar-" + index;
  });

  // Start Frame Resizer
  function resizeIframe(height, frameElement) {
    if (frameElement) {
      frameElement.height = "";
      frameElement.height = height;
    }
  }

  var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
  var eventHandler = window[eventMethod];
  var messageEvent = eventMethod === "attachEvent" ? "onmessage" : "message";
  eventHandler(messageEvent, function (e) {
    if (Array.isArray(e.data)) {
      if (e.data[0] === "setCalHeight" || e.data[0] === "setNotifyHeight") {
        var frames = document.querySelectorAll("iframe");
        for (var i = 0; i < frames.length; i++) {
          if (frames[i].contentWindow === e.source) {
            resizeIframe(e.data[1], frames[i]);
          }
        }
      }
    }
  });
  // End Frame Resizer

  // Alert Close Caching
  if ($("div.alert").length) {
    var hide = window.sessionStorage && parseInt(window.sessionStorage.getItem("alertClosed")) > 1;
    if (!hide || $(".user-logged-in").length != 0) {
      $("div.alert").addClass("show");
    }
    $("div.alert .close-alert").on("click", function (e) {
      if (window.sessionStorage) {
        window.sessionStorage.setItem("alertClosed", parseInt(window.sessionStorage.getItem("alertClosed") || 0) + 1);
      }
    });
  }
  //
  // 	// revizeWeather #todo check on live server
  // 	if( typeof $.fn.revizeWeather !== "undefined" ){
  // 		$.fn.revizeWeather({
  // 			zip: '48326',
  // 			city_name: '',
  // 			unit: 'f',
  // 			success: function(weather) {
  // 				var date = new Date();
  // 				date = (date.getMonth() + 1) + "/" + date.getDate() + "/" + date.getFullYear();
  // 				var html = '<span>'+date+'</span> <span class="forecast">'+weather.temp+'&deg; '+weather.forecast+'</span>';
  // 				html += '<i class="'+weather.icon+'"></i>';
  //
  // 				$("#weather").html(html);
  // 			},
  // 			error: function(error) {
  // 				// better to just hide the secion if there is an error
  // 				$('.weather').hide();
  // 				console.log(error);
  // 			}
  // 		});
  // 	}

  function removeCookieString(value, domain) {
    domain = domain ? "domain=" + domain + "; " : "";
    return value + "; expires=Thu, 01 Jan 1970 00:00:01 GMT; " + domain + "path=/";
  }

  function unsetGoogtransCookie() {
    for (var domains = window.location.hostname.split("."); domains.length >= 2; domains.shift()) {
      var cookieString = removeCookieString("googtrans=unset", domains.join("."));
      document.cookie = cookieString;
      if (domains.length === 2) {
        cookieString = removeCookieString("googtrans=unset", "." + domains.join("."));
        document.cookie = cookieString;
      }
    }
    document.cookie = removeCookieString("googtrans=unset");
  }

  if (
    document.cookie.split(";").some(function (item) {
      return item.trim().startsWith("googtrans=/auto/en");
    })
  ) {
    unsetGoogtransCookie();
  }

  // Translate Script
  var translateURL = "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
  $.getScript(translateURL);
  $("#translation-links a").click(function () {
    var lang = $(this).data("lang");
    var $frame = $("iframe.skiptranslate");
    if (!$frame.length) {
      return false;
    }
    var $el = $frame
      .contents()
      .find("span.text:contains(" + lang + ")")
      .parent()
      .parent()
      .get(0);

    if (!$el) {
      $frame.contents().find('span.text:contains("English")').parent().parent().get(0);
    }
    $el.click();
    return false;
  });

  var $translateReset = $("#translate-reset");
  $translateReset.on("keydown click", function (e) {
    if (e.keyCode === 13 || e.type === "click") {
      $("iframe.skiptranslate").contents().find('span.text:contains("English")').parent().parent().get(0).click();
    }
  });

  // Tiny Slider
  if (typeof tns !== "undefined") {
    $(".tiny-slider").each(function (i, el) {
      var $el = $(el);
      var tinyItemCount = $el.children().length;
      var tinyItemData = $el.data("tinyItems") ? $el.data("tinyItems") : 1;
      var tinyItemDataSm = $el.data("tinyItemsSm") ? $el.data("tinyItemsSm") : 1;
      var tinyItemDataMd = $el.data("tinyItemsMd") ? $el.data("tinyItemsMd") : 1;
      var tinyGapData = $el.data("tinyGap") ? $el.data("tinyGap") : 0;
      var tinyNavData = $(el).data("tiny-nav");
      var tinyControlsData = $(el).data("tiny-controls");
      var tinyAutoplayButtonsData = $(el).data("tiny-autoplay-buttons");
      var tinyAutoplayData = $(el).data("tiny-autoplay");
      var tinyModeData = $(el).data("tiny-mode");
      tns({
        container: el,
        items: Math.min(tinyItemCount, tinyItemData),
        responsive: {
          0: {
            items: Math.min(tinyItemCount, tinyItemDataSm),
          },
          768: {
            items: Math.min(tinyItemCount, tinyItemDataMd),
          },
          1200: {
            items: Math.min(tinyItemCount, tinyItemData),
          },
        },
        lazyload: true,
        nav: tinyNavData,
        gutter: Math.min(tinyGapData, tinyGapData),
        lazyloadSelector: ".tns-lazy-img", // accompanied with data src or data-style
        preventScrollOnTouch: "force",
        controls: tinyControlsData,
        autoplay: tinyAutoplayData,
        autoplayButtonOutput: tinyAutoplayButtonsData,
        mode: tinyModeData,
        autoplayText: ['<i class="bi bi-play-fill"></i>', '<i class="bi bi-pause-fill"></i>'],
        controlsText: ['<i class="bi bi-chevron-left" aria-hidden="true"></i>', '<i class="bi bi-chevron-right" aria-hidden="true"></i>'],
      });
    });

    $(".tiny-carousel").each(function (i, el) {
      var $el = $(el);
      var tinyItemCount = $el.children().length;
      var tinyItemData = $el.data("tinyItems") ? $el.data("tinyItems") : 1;
      var tinyItemDataSm = $el.data("tinyItemsSm") ? $el.data("tinyItemsSm") : 1;
      var tinyItemDataMd = $el.data("tinyItemsMd") ? $el.data("tinyItemsMd") : 1;
      var tinyGapData = $el.data("tinyGap") ? $el.data("tinyGap") : 0;
      var tinyNavData = $(el).data("tiny-nav");
      var tinyControlsData = $(el).data("tiny-controls");
      var tinyAutoplayButtonsData = $(el).data("tiny-autoplay-buttons");
      var tinyAutoplayData = $(el).data("tiny-autoplay");
      var tinyEdgePaddingData = $(el).data("tiny-padding-x");

      tns({
        container: el,
        items: Math.min(tinyItemCount, tinyItemData),
        responsive: {
          0: {
            items: Math.min(tinyItemCount, tinyItemDataSm),
          },
          768: {
            items: Math.min(tinyItemCount, tinyItemDataMd),
          },
          1200: {
            items: Math.min(tinyItemCount, tinyItemData),
          },
        },
        lazyload: true,
        nav: tinyNavData,
        center: true,
        gutter: Math.min(tinyGapData, tinyGapData),
        edgePadding: tinyEdgePaddingData,
        lazyloadSelector: ".tns-lazy-img", // accompanied with data src or data-style
        preventScrollOnTouch: "force",
        controls: tinyControlsData,
        autoplay: tinyAutoplayData,
        autoplayButtonOutput: tinyAutoplayButtonsData,
        autoplayText: ['<i class="bi bi-play-fill"></i>', '<i class="bi bi-pause-fill"></i>'],
        controlsText: ['<i class="bi bi-chevron-left" aria-hidden="true"></i>', '<i class="bi bi-chevron-right" aria-hidden="true"></i>'],
      });
    });
  }

  $(".tns-outer").each(function () {
    $(this).find(".tns-nav,[data-action]").wrapAll('<div class="nav-controls absolute"></div>');
  });

  // Sets aria-labels for carousel buttons (Previous/Next)
  $('.tns-outer button[data-controls="prev"]').attr("aria-label", "Previous Slide");
  $('.tns-outer button[data-controls="next"]').attr("aria-label", "Next Slide");

  // You can also pass an optional settings object
  // below listed default settings
  AOS.init({
    // Global settings:
    disable: "phone, tablet, mobile", // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: "DOMContentLoaded", // name of the event dispatched on the document, that AOS should initialize on
    initClassName: "aos-init", // class applied after initialization
    animatedClassName: "aos-animate", // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 0, // offset (in px) from the original trigger point
    delay: 400, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: "ease", // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
  });

  $(function () {
    $(".lazy,.rz-card-img,.rz-gallery-image img,.rz-qlink-img,.featured-image-wrap").lazy();
  });

  // Responsive Tables
  $(".post table:not(.layout-table):not(.not-responsive)").wrap('<div class="table-responsive"></div>');
  $(".layout-table").attr("role", "presentation");

  // Preloader
  $window.on("load", function () {
    setTimeout(function () {
      $body.addClass("loaded");
      $(".loader-wrapper").fadeOut();
    }, 600);
  });

  $window.ready(function () {
    //#Smooth Scrolling
    $('a[href*="#"]')
      .not('[href="#"]')
      .not('[href*="#collapse"]')
      .click(function (event) {
        if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
          if (target.length) {
            event.preventDefault();
            $("html,body").animate(
              {
                scrollTop: target.offset().top,
              },
              1000,
              function () {
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) {
                  return false;
                } else {
                  $target.attr("tabindex", "-1");
                  $target.focus();
                  $target.removeAttr("tabindex");
                }
              }
            );
          }
        }
      });

    // Removes aria-live attribute which reads to screen reader when slide is changed. Also sets aria-hidden to true so this element
    // is ignored from the dom. - Michael S.
    $(".tns-liveregion.tns-visually-hidden").attr("aria-hidden", "true").removeAttr("aria-live");

    // Looks through all .tns-items and if tns-slide-active is there, find <a> children and also update tabindex
    // Problem currently: Two slides off page before and after still have tns-slide-active so this doesn't work as expected.
    // If possible figure out how to only allow 3 visible slides to have tns-slide-active.
    // Added by: Michael S.

    // function observeTinyItemsForActiveClass() {
    //   function updateTabindex() {
    //     $(".tns-item").each(function () {
    //       if ($(this).hasClass("tns-slide-active")) {
    //         $(this).find("a").attr("tabindex", "0");
    //       } else {
    //         $(this).find("a").attr("tabindex", "-1");
    //       }
    //     });
    //   }

    //   const observer = new MutationObserver(function (mutations) {
    //     mutations.forEach(function (mutation) {
    //       if (mutation.attributeName === "class") {
    //         updateTabindex();
    //       }
    //     });
    //   });

    //   $(".tns-item").each(function () {
    //     observer.observe(this, { attributes: true });
    //   });

    //   updateTabindex();
    // }

    // observeTinyItemsForActiveClass();
  }); // Ready
})(jQuery);
