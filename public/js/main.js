// home page 
var startPos = 1550;
var threshold = 1600;
  $(window).on('scroll',function(){
    var currentPos = $(this).scrollTop();
    // console.log(startPos, currentPos)
    if(currentPos > startPos) {
      if($(window).scrollTop() >= threshold) {
         $(".card-services").css({"transform": "translateY(110px)", "transition": "0.5s"})
      }}else{
        $(".card-services").css({"transform": "translateY(0px)"})
      }
  
  });

// services page 
var startPos1 = 1300;
var threshold1 = 1350;
  $(window).on('scroll',function(){
    var currentPos = $(this).scrollTop();
    // console.log(startPos, currentPos)
    if(currentPos > startPos1) {
      if($(window).scrollTop() >= threshold1) {
         $(".card-services1").css({"transform": "translateY(110px)", "transition": "0.5s"})
      }}else{
        $(".card-services1").css({"transform": "translateY(0px)"})
      }
  
  });
// about page 
var startPos2 = 200;
var threshold2 = 300;
  $(window).on('scroll',function(){
    var currentPos = $(this).scrollTop();
    // console.log(startPos, currentPos)
    if(currentPos > startPos2) {
      if($(window).scrollTop() >= threshold2) {
         $(".headingline-4.about-page-heading path").addClass('line2');
         $(".headingline-4.about-page-heading path").removeClass('d-none');
      }}else{
        // $(".card-services1").css({"transform": "translateY(0px)"})
      }
  
  });
// it page 
var startPos5 = 100;
var threshold5 = 150;
  $(window).on('scroll',function(){
    var currentPos = $(this).scrollTop();
    // console.log(startPos, currentPos)
    if(currentPos > startPos5) {
      if($(window).scrollTop() >= threshold5) {
         $(".headingline9.it-services1 .heading-4").removeClass('d-none');
      }}else{
        // $(".card-services1").css({"transform": "translateY(0px)"})
      }
  
  });
// client slider 
$('.client-slider').slick({
    dots: false,
    infinite: true,
    speed: 3000,
    slidesToShow:3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow:".slick-prev",
    nextArrow:".slick-next",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });



// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
$(document).ready(function ($) {
    //Check if an element was in a screen
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();
        return elemBottom <= docViewBottom;
    }
    //Count up code
    function countUp() {
        $(".counter").each(function () {
            var $this = $(this), // <- Don't touch this variable. It's pure magic.
                countTo = $this.attr("data-count");
            ended = $this.attr("ended");

            if (ended != "true" && isScrolledIntoView($this)) {
                $({ countNum: $this.text() }).animate(
                    {
                        countNum: countTo,
                    },
                    {
                        duration: 2500, //duration of counting
                        easing: "swing",
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                        },
                    },
                );
                $this.attr("ended", "true");
            }
        });
    }
    //Start animation on page-load
    if (isScrolledIntoView(".counter")) {
        countUp();
    }
    //Start animation on screen
    $(document).scroll(function () {
        if (isScrolledIntoView(".counter")) {
            countUp();
        }
    });
});

// $(".active-tab, .dropdown-menu").mouseenter(function () {
//     $('section').css('filter', 'blur(5px)');
// }); 
// $(".active-tab, .dropdown-menu").mouseleave(function () {
//     $('section').css('filter', 'blur(0)');
// }); 

$(".hover-box").mouseover(function(){
    $(".child-first").css("visibility", "hidden");
    $(".image-box:first-child").css("width", "100px");
    $(".image-box:first-child .col-content").show();



  });
  $(".hover-box").mouseout(function(){
    $(".child-first").css("visibility", "visible");
    $(".image-box:first-child").css("width", "400px");
    $(".image-box:first-child .col-content").hide();
  });


  let path = document.querySelector(".star");
 let length = path.getTotalLength();
 // console.log(length);

 path.style.strokeDasharray = length + ' ' + length;
 path.style.strokeDashoffset = length;


