
$('.happy-client').owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  dots: false,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  center: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 2
    }
  }
})


$('.banner-sliders').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
   autoplay: true,
   autoplaySpeed:1000,
    autoplayHoverPause: true,
     autoplayTimeout: 5000,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})



function typeAndDeleteEffect(element, speed, pause = 1000) {
  const text = element.getAttribute("data-text");
  let i = 0;
  let isDeleting = false;

  function typeLoop() {
    if (!isDeleting) {
      element.innerHTML = text.substring(0, i + 1);
      i++;
      if (i === text.length) {
        isDeleting = true;
        setTimeout(typeLoop, pause); // Pause before deleting
        return;
      }
    } else {
      element.innerHTML = text.substring(0, i - 1);
      i--;
      if (i === 0) {
        isDeleting = false;
        setTimeout(typeLoop, pause); // Pause before typing again
        return;
      }
    }
    setTimeout(typeLoop, speed);
  }

  typeLoop();
}


// Apply to all headings
const headings = document.querySelectorAll('.typingheading');

headings.forEach((h) => {
  const original = h.innerHTML;
  h.setAttribute("data-text", original);
  h.innerHTML = "";
  typeAndDeleteEffect(h, 100); // Adjust speed as needed
});






//  section-3
$(document).ready(function () {
  $('.main-text-1').click(function () {
    $(".beast").toggleClass('main-book-inner');
  });
  $("#hide").click(function () {
    $(".main-book-inner").hide();
  });
  $("#show").click(function () {
    $(".main-book-inner").show();
  });
  $("#show1").click(function () {
    $(".main-book-inner").show();
  });
});
// section-3

// section-3
$(document).ready(function () {
  $('.main-text-2').click(function () {
    $(".beast1").toggleClass('main-book-inner1');
  });
  $("#show1").click(function () {
    $(".main-book-inner1").show();
  });
  $("#hide1").click(function () {
    $(".main-book-inner1").hide();
  });

  $("#show1").click(function () {
    $(".main-book-inner1").show();
  });
});
// section-3

// section-3
$(document).ready(function () {
  $('.main-text-3').click(function () {
    $(".beast3").toggleClass('main-book-inner3');
  });
  $("#show3").click(function () {
    $(".main-book-inner3").show();
  });
  $("#hide3").click(function () {
    $(".main-book-inner3").hide();
  });

  $("#show3").click(function () {
    $(".main-book-inner3").show();
  });
});
// section-3

// section-3
$(document).ready(function () {
  $('.main-text-4').click(function () {
    $(".beast4").toggleClass('main-book-inner4');
  });
  $("#show4").click(function () {
    $(".main-book-inner4").show();
  });
  $("#hide4").click(function () {
    $(".main-book-inner4").hide();
  });

  $("#show4").click(function () {
    $(".main-book-inner4").show();
  });
});
// section-3

// section-3
$(document).ready(function () {
  $('.main-text-2').click(function () {
    $(".beast2").toggleClass('main-book-inner2');
  });
  $("#show2").click(function () {
    $(".main-book-inner2").show();
  });
  $("#hide2").click(function () {
    $(".main-book-inner2").hide();
  });

  $("#show2").click(function () {
    $(".main-book-inner2").show();
  });
});
// section-3











