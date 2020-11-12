jQuery(document).ready(function ($) {

  // console.log('working');

  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: false
      },
      1000: {
        items: 4,
        nav: true,
        loop: false
      }
    }
  });

  $(".gallery-image-text").hide();

  $(".card-container").mouseenter(function () {
    $(this).find(".gallery-image-text").show();
    $(this).find(".gallery-image img").css("opacity", "0.7");
  });

  $(".card-container").mouseleave(function () {
    $(this).find(".gallery-image-text").hide();
    $(this).find(".gallery-image img").css("opacity", "1");
  });

  $('.video-link').click(function (event) {
    event.preventDefault();
    let newLink = $(this).attr('data-link');
    let newTitle = $(this).attr('title');
    let newDescription = $(this).attr("description");
    let newThumbnail = $(this).attr('thumbnail-link');

    // console.log("new link", newLink);
    // console.log("new Title", newTitle);
    // console.log("new Description", newDescription);
    // console.log("new Thumbnail", newThumbnail);

    $('#big-video').attr('src', newLink);
    $('#big-video-title').html(newTitle);
    $('#video-description').html(newDescription);
    $('#video-description-thumbnail').attr('src', newThumbnail);

  });

});

