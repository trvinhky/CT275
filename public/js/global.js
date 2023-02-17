$(".navbar-item__link").click(function () {
  $(".navbar-item__link").removeClass("active");
  $(this).addClass("active");
});

function handleScroll() {
  const scrollTop = $(this).scrollTop();
  if (scrollTop > 50) {
    $(".header-navbar").addClass("scroll");
  } else {
    $(".header-navbar").removeClass("scroll");
  }
}

$(window).on("scroll", handleScroll);
