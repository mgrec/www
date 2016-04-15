$( "#pres" ).click(function() {
  $( ".logo_petit" ).animate({
  },
  300, function() {
    $('.logo_petit').toggleClass('animated fadeInLeft');
    $('.text').toggleClass('animated fadeInRight');
    $('.img_bas').toggleClass('animated fadeInUp');
  });
});

$( "#acc" ).click(function() {
  $( ".logo_petit" ).animate({
  },
  800, function() {
    $('.logo_petit').removeClass('animated fadeInLeft');
    $('.text').removeClass('animated fadeInRight');
    $('.img_bas').removeClass('animated fadeInUp');
  });
});
