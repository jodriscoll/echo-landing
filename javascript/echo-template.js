$(document).ready(function() {
  // since we're loading a newer version of jQuery, lets fix the old stuff
  $('#rwd-menu-btn').on('click', function(e) {
      e.preventDefault();
      toggleMenu(this);
      return 0;
  });

  // inject the "Get in Touch" button within the <header>
  $('#header .rwd-menu').prepend('<a href="#get-in-touch" class="echo--header-git" id="js-git-click">Get in Touch</a>');

  // scrolling functionality for the "Get in Touch" button above
  $('#js-git-click').click(function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $('#get-in-touch').offset().top - 0                          // controls the offset of the scroll destination
    }, 1000);                                                                   // controls the speed of the scroll
  });
  
  // initiate the first tab as the active one
  $('#echo--tabs li:first-of-type').addClass('active');

  // associate the tabs with the tab content
  $('#echo--tabs li:first-of-type a').attr('href','#tab-first');
  $('#echo--tabs li:nth-of-type(2) a').attr('href','#tab-second');
  $('#echo--tabs li:last-of-type a').attr('href','#tab-third');

  // probably define the tab content
  $('#echo--tabs-content div.tab-pane:first-of-type').attr('id','tab-first').addClass('in active');
  $('#echo--tabs-content div.tab-pane:nth-of-type(2)').attr('id','tab-second');
  $('#echo--tabs-content div.tab-pane:last-of-type').attr('id','tab-third');
  
  // establish the click to show behavior for the tabs
  $('#echo--tabs a').click(function(e) {
    e.preventDefault();
    $(this).tab('show');
  });
});