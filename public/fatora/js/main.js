//loader
$(function() {
  $('.loader-container').delay(500).fadeOut(1500);
})

// sidebar menu toggle

$(document).on('click', '#sidebar_toggler', function() {
  $('#sidebar_toggler').hide();
  $('.sidebar-wrapper').addClass('sidebar-show');
   $('.mob-overlay').addClass('active');
});

$(document).on('click', '#burgerBtn', function() {
  $('.sidebar-wrapper').removeClass('sidebar-show');
  $('.mob-overlay').removeClass('active');
  $('#sidebar_toggler').show();
});

$(document).on('click', '.mob-overlay', function() {
  $('#sidebar_toggler').show();
  $('.sidebar-wrapper').removeClass('sidebar-show');
  $('.mob-overlay').removeClass('active');
});


// scroll top button
$(function () {

  var scrollButton = $('.go-top');

  $(window).scroll(function () {

    if($(window).scrollTop() >= 500) {
      scrollButton.show();
    }else {
      scrollButton.hide();
    }
  });

  scrollButton.click(function () {
    $('html, body').animate({scrollTop: 0});
  })
});






