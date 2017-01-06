// Pulls HREF of designated links on images
// IDs are #video1 - 4
// Use http://digitalzoomstudio.net/vimeo-thumbnail-generator/ to get image for placeholder. Add 1280 or 640 to the end for the size.
// Use URL embed type for BB image module.

jQuery( function ( $ ) {

  $("#video1 a").click(function (e) {
    var video_url = $(this).attr("href");
    openPopup("#video1", video_url);
    e.preventDefault();
  });

  $("#video2 a").click(function (e) {
    var video_url = $(this).attr("href");
    openPopup("#video2", video_url);
    e.preventDefault();
  });

  $("#video3 a").click(function (e) {
    var video_url = $(this).attr("href");
    openPopup("#video3", video_url);
    e.preventDefault();
  });

  $("#video4 a").click(function (e) {
    var video_url = $(this).attr("href");
    openPopup("#video4", video_url);
    e.preventDefault();
  });

  function openPopup(video_id, video_url) {
    $(video_id).magnificPopup({
      mainClass: 'mfp-fade',
      fixedContentPos: false,
      type: 'iframe',
      gallery: { 
        enabled: true,
      },
      items: [
        { src: video_url, },
      ],
    });
  }

});
