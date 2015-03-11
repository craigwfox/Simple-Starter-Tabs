jQuery(document).ready(function($) {
  var $ssttNav = $('.sstt__nav');
  var $ssttWrapper = $('.sstt__content-wrapper');


  $ssttWrapper.find('.sstt__content:first-child').addClass('sstt__active');

  $ssttNav.on('click', '.sstt__nav__title', function(event) {
    event.preventDefault();
    var $el = $(this);
    var tabId = $el.attr('data-tab_id');

    $ssttNav.find('li').removeClass('sstt__active');
    $el.addClass('sstt__active');


    $ssttWrapper.find('.sstt__content').removeClass('sstt__active');
    $ssttWrapper.find('.sstt__content[data-tab_id="'+tabId+'"]').addClass('sstt__active');
    
    console.log($el.attr('data-tab_id'));
  });
  console.log('tabs loaded');
});