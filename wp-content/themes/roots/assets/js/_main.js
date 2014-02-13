/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 * ======================================================================== */



var Roots = {
  // All pages
  common: {
    init: function() {
      $(".hexagon").click(function(){
           window.location=$(this).find("a").attr("href");
           return false;
      });
      $(".masthead h1").fitText(2.0);
      $('.projects-interior').fitimg();
      $('.featured-blog-img').fitimg();
      $('.hexagon').click(function(){
        $(this).addClass('animated fadeOut');
          setTimeout(function() {
              $(".hex1").addClass('animated fadeOut');
          }, 500);
          setTimeout(function(){
              $(".hex2").addClass('animated fadeOut');
          }, 1000);
      });
    }
  },
  // Home page
  home: {
    init: function() {
      // JS here
    }
  },
  // About page
  about: {
    init: function() {
      // JavaScript to be fired on the about page
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);
