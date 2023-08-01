function myFunction() {
  var navbar = document.getElementById("header");
  if (navbar.className === "responsive") {
    navbar.className = "";
  } else {
    navbar.className = "responsive";
  }
}

function buttonNavigation(args) {
  var closeNavigation = document.getElementById("closeNavigation");
  var openNavigation = document.getElementById("openNavigation");

  if (args === "open") {
    openNavigation.style.display = "none";
    closeNavigation.style.display = "inline";
  } else {
    openNavigation.style.display = "inline";
    closeNavigation.style.display = "none";
  }
}

$(document).ready(function () {
  $(".add_to_cart_button").text('Add To Cart');
  $(".product_type_simple").text('Add To Cart');
  $("#s").attr("placeholder", "Search");

  var header = $("#header");
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 55) {
      header.addClass("nav-white");
    } else {
      header.removeClass("nav-white");
    }
  });
});

// Sliders
var slideIndex = 1;
displaySlide(slideIndex);

function moveSlides(n) {
  displaySlide((slideIndex += n));
}

function activeSlide(n) {
  displaySlide((slideIndex = n));
}

function displaySlide(n) {
  var i;
  var totalslides = document.getElementsByClassName("slide");
  var totaldots = document.getElementsByClassName("footerdot");
  if (n > totalslides.length) {
    slideIndex = 1;
  }

  if (n < 1) {
    slideIndex = totalslides.length;
  }

  for (i = 0; i < totalslides.length; i++) {
    totalslides[i].style.display = "none";
  }

  for (i = 0; i < totaldots.length; i++) {
    totaldots[i].className = totaldots[i].className.replace(" active", "");
  }

  totalslides[slideIndex - 1].style.display = "block";
  totaldots[slideIndex - 1].className += " active";
}

setInterval(function() {
    moveSlides(1);
}, 5000);