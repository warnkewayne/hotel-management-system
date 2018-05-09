$(function () {
    var body = $('.background-container');
    var backgrounds = [
      'url(hotel-1.jpg)',
      'url(hotel-2.jpg)',
      'url(hotel-3.jpg)',
      'url(hotel-4.jpg)'];
    var current = 0;
    function nextBackground() {
        body.css(
            'background-image',
        backgrounds[current = ++current % backgrounds.length]);
        body.css(
          'background-position',
          'center'
        )
        body.css(
          'background-repeat',
          'no-repeat'
        )
        body.css(
          'background-size',
          'cover'
        )
        setTimeout(nextBackground, 5000);
    }
    setTimeout(nextBackground, 5000);
    body.css('background', backgrounds[0]);
});
