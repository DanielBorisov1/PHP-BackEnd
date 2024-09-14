$(document).ready(function () {
  //RERO SLIDER
  $('#hero-slider').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1,
    dots: false,
    smartSpeed: 1000,
    navText: ['PREV', 'NEXT'],
    responsive: {
      0: {
        nav: true,
      },
      768: {
        nav: true,
      },
      1000: {

      }

    }
  });
  //project

  $('#project-slider').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 4,
    dots: false,
    smartSpeed: 1000,
    navText: ['НАЗАД', 'НАПРЕД'],
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      768: {
        nav: true,
      },
      1000: {

      }

    }
  });



});