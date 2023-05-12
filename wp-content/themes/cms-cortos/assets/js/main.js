$(function () {
  $("#icon-menu").click(function () {
    if (!$(this).hasClass("close-icon")) {
      $(this).addClass("close-icon")
      $("#nav-menu").addClass("open-menu")
      $("body").css("overflow", "hidden")
    } else {
      $(this).removeClass("close-icon")
      $("#nav-menu").removeClass("open-menu")
      $("body").css("overflow", "scroll")
    }
  })

  $(".image-popup").magnificPopup({
    type: "image",
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    image: {
      verticalFit: true,
    },
    zoom: {
      enabled: true,
      duration: 250,
    },
  })
})

window.addEventListener("click", function (e) {
  /*2. Si el div con id clickbox contiene a e. target*/
  if (!document.getElementById("nav-page").contains(e.target)) {
    $("#icon-menu").removeClass("close-icon")
    $("#nav-menu").removeClass("open-menu")
  }
})

setTimeout(() => {
  $(".page-loader").addClass("page-loader-hide")
}, 1500)
setTimeout(() => {
  $(".page-loader").hide()
}, 2000)
