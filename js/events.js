"use strict";

var $ = app.jQuery;

app.functions.events = function events(){

  // Log Message
  app.debugLoadMessages.push("Events ready !");

  // Create Snapper
  var snapper = new Snap({
    element: document.getElementById('content'),
    disable: 'right',
    maxPosition: 265,
    minPosition: -265,
    touchToDrag: false
  });

  // Manage anchor link
  $(document).on('click', 'nav a', function(event){
    var $this = $(this);

    $('nav a').removeClass('active');
    $this.addClass('active');
  });

  // Manage SnapToggle
  $(document).on('click', '#snap-toggle:not(.active)', function(event) {
    $(this).addClass('active');
    snapper.open('left');
  });
  snapper.on('close', function(){
    $('#snap-toggle').removeClass('active');
  });
  $(document).on('click', '#snap-toggle.active', function(event) {
    $(this).removeClass('active');
    snapper.close('left');
  });

  // Hide Header on on scroll down
  var didScroll,
      lastScrollTop = 0,
      delta = 5,
      $element = ($('#snap-toggle:hidden').length) ? $('header') : $('#snap-toggle'),
      navbarHeight = $element.outerHeight();

  $('#content').scroll(function(event){
    didScroll = true;
  });

  setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled() {
    var st = $('#content').scrollTop();
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
      return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
      // Scroll Down
      $element.removeClass('nav-down').addClass('nav-up');
    } else {
      // Scroll Up
      if(st + navbarHeight + delta < lastScrollTop) {
        $element.removeClass('nav-up').addClass('nav-down');
      }
    }
    
    lastScrollTop = st;
  }

};