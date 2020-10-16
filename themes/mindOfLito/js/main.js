jQuery(document).ready(function ($) {

  $(".gallery-card-text").hide();

  $(".card-container").mouseenter(function () {
    $(this).find(".gallery-card-text").show();
  });

  $(".card-container").mouseleave(function () {
    $(this).find(".gallery-card-text").hide();
  });

  $('.video-link').click(function () {
    let newLink = $(this).attr('data-link');
    console.log("new link", newLink);
    $('#big-video').attr('src', newLink);
  });


});
