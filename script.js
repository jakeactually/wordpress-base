$(() => {

  //  Responsive Menu
  $('nav')
    .css({ display: 'flex' })
    .fadeOut(0);

  $('#open').click(() => {
    $('nav').fadeIn();
  });

  $('#close').click(() => {
    $('nav').fadeOut();
  });

});
