$(function () {
  // header search
  $(".search-btn").click(function () {
    console.log("hello");
    $(this).next(".search-form").toggleClass("hidden");
    $(this).addClass("hidden");
    $(this).nextAll(".btn-close").toggleClass("hidden");
  });

  $(".btn-close").click(function () {
    $(this).prev(".search-form").toggleClass("hidden");
    $(this).addClass("hidden");
    $(this).prevAll(".search-btn").toggleClass("hidden");
  });
});
