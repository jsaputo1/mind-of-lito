jQuery(document).ready(function ($) {

  $(".gallery-card-text").hide();

  $(".card-container").mouseenter(function () {
    $(this).find(".gallery-card-text").show();
    $(this).find(".card-image").hide();
  });

  $(".card-container").mouseleave(function () {
    $(this).find(".gallery-card-text").hide();
    $(this).find(".card-image").show();
  });

  $('.video-link').click(function () {
    let newLink = $(this).attr('data-link');
    console.log("new link", newLink);
    $('#big-video').attr('src', newLink);
  });


});
