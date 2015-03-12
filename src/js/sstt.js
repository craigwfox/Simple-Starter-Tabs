jQuery(document).ready(function($) {
  var $ssttNav = $('.sstt__nav');
  var $ssttWrapper = $('.sstt__content-wrapper');
  var speed = 200;


  $ssttWrapper.find('.sstt__content:first-child').addClass('sstt__active');
  $ssttNav.find('.sstt__nav__title:first-child').addClass('sstt__active');


  var func_ssttNav = function(el, tabId) {
    $ssttNav.find('li').removeClass('sstt__active');
    el.addClass('sstt__active');
  };

  var func_ssttContent = function(el, tabId) {
    $ssttWrapper.find('.sstt__content')
      .removeClass('sstt__active')
      .fadeOut(speed);
    
    setTimeout(function() {
      $ssttWrapper.find('.sstt__content[data-tab_id="'+tabId+'"]')
        .addClass('sstt__active')
        .fadeIn(speed-100);
    }, speed);
  };

  $ssttNav.on('click', '.sstt__nav__title', function(event) {
    event.preventDefault();
    var $el = $(this);
    var tabId = $el.attr('data-tab_id');

    func_ssttNav($el, tabId);
    func_ssttContent($el, tabId);
  });
});