$(() => {

  // Menu

  const $button = $('#header button');
  const $screen = $('#header .screen');
  const $nav = $('nav');

  $button.click(showMenu);
  $screen.click(hideMenu);

  function showMenu() {
    $screen.fadeIn();
    $nav.animate({ left: '0%' });
  }

  function hideMenu() {
    $screen.fadeOut();
    $nav.animate({ left: '-100%' });
  }

  const qs = x => document.querySelector(x);
  delete Hammer.defaults.cssProps.userSelect;
  new Hammer(document.body).on('swiperight', ev => {
    if (ev.srcEvent.clientX - ev.deltaX < 15) {
      showMenu();
    }
  });
  new Hammer(qs('#header')).on('swipeleft', hideMenu);
  new Hammer(qs('nav')).on('swipeleft', hideMenu);
  
});
