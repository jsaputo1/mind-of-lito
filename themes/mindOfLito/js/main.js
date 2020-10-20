jQuery(document).ready(function ($) {

  $(".gallery-image-text").hide();

  $(".card-container").mouseenter(function () {
    $(this).find(".gallery-image-text").show();
    $(this).find(".gallery-image img").css("opacity", "0.3");
  });

  $(".card-container").mouseleave(function () {
    $(this).find(".gallery-image-text").hide();
    $(this).find(".gallery-image img").css("opacity", "1");
  });

  $('.video-link').click(function () {
    let newLink = $(this).attr('data-link');
    console.log("new link", newLink);
    $('#big-video').attr('src', newLink);
  });


});
