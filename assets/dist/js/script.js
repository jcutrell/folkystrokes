"use strict";

(function () {
  "use strict";
  var slick = $(".slick").slick();
  $('body').imagesLoaded(function () {
    $(".masonry").masonry({
      itemSelector: '.painting-tile',
      gutter: 0
    });
  });

  $(".painting-tile").on('click', function (e) {
    var id = parseInt($(this).data('id'));
    var position = $(this).index();
    $('.slick').slick('slickGoTo', position, true);
    $('.slick-slide').eq(position).focus();
    $(".overlay").addClass('show');
  });

  $(".close-btn").on("click", function (e) {
    $(".overlay").removeClass("show");
  });
  $("body").on("keyup", function (e) {
    if (e.keyCode == 27) {
      $(".overlay").removeClass("show");
    }
  });
})();