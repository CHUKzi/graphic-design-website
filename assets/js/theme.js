// -----------------------------

//   JS INDEX
/* =================== */
/* 

    ## Animation Js
    ## Preloder
    ## Stiky menu
    ## Scrool Menu
    ## Scrool Up
    ## smart menu
    ## smoothscroll 
    ## Owl Carousel 
    ## Timer Js
    ## Googel Map
    ## Ajax
    ## Recaptcha

*/


(function($) {
  "use strict"; 


/*Animation js*/
AOS.init({

  offset:     120,

  delay:      0,

  easing:     'ease',

  duration:   5000,

  disable:    false, // Condition when AOS should be disabled. e.g. 'mobile'

  once:       false,

  mirror:     false, // whether elements should animate out while scrolling past them

  startEvent: 'DOMContentLoaded'

});








//**================== Preloder========================*//
$(window).on('load', function() {
  $('#preloader').fadeOut('slow', function() { $(this).remove(); });
});

//**================= End of Preloder =====================**//


//**================= Sticky =====================**//

 $(window).on('scroll', function() {
  if ($(window).scrollTop() > 50) {
      $('.header-navigation').addClass('nav-fixed');
      $('.scroll-to-target').addClass('open');
  } else {
      $('.header-navigation').removeClass('nav-fixed');
      $('.scroll-to-target').removeClass('open');
  }
});
 


//**===================Scroll UP ===================**//

if ($('.scroll-to-target').length) {
  $(".scroll-to-target").on('click', function () {
    var target = $(this).attr('data-target');
    // animate
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 1000);

  });
} 

//**===================Scroll UP ===================**//

//*==========Scroll Up Logo===============*//

var initialSrc = "assets/img/logo-2.png";
var scrollSrc = "assets/img/logo.png";

var initialSrc2 = "assets/img/logo-4.png";
var scrollSrc2 = "assets/img/logo-3.png";

var initialSrc3 = "../assets/img/logo-2.html";
var scrollSrc3 = "../assets/img/logo.html";

$(window).scroll(function() {

   var value = $(this).scrollTop();

   if (value > 50)
      $(".top-logo").attr("src", scrollSrc),
      $(".top-logo2").attr("src", scrollSrc2),
      $(".top-logo3").attr("src", scrollSrc3)
   else
      $(".top-logo").attr("src", initialSrc),
      $(".top-logo2").attr("src", initialSrc2),
      $(".top-logo3").attr("src", initialSrc3)

});


//*==========Scroll Up Logo===============*//

//**================= Smart Menu =====================**//

// SmartMenus init
$(function() {
  $('#main-menu').smartmenus({
    subMenusSubOffsetX: 6,
    subMenusSubOffsetY: -8
  });
});

// SmartMenus mobile menu toggle button
$(function() {
  var $mainMenuState = $('#main-menu-state');
  if ($mainMenuState.length) {
    // animate mobile menu
    $mainMenuState.change(function(e) {
      var $menu = $('#main-menu');
      if (this.checked) {
        $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
      } else {
        $menu.show().slideUp(250, function() { $menu.css('display', ''); });
      }
    });
    // hide mobile menu beforeunload
    $(window).bind('beforeunload unload', function() {
      if ($mainMenuState[0].checked) {
        $mainMenuState[0].click();
      }
    });
  }
});

//**================= End Smart Menu =====================**//


    /*---------------------
    smooth scroll
    --------------------- */
    $('.smoothscroll').on('click', function(e) {
      e.preventDefault();
      var target = this.hash;

      $('html, body').stop().animate({
          'scrollTop': $(target).offset().top - 150
      }, 3000);
  });


  /*---------------------


    /*================================

    Magnific Popup

    ==================================*/

   $('.expand-img').magnificPopup({

      type: 'image',

      gallery: {

          enabled: true

      }

  }); 



  $('.expand-video').magnificPopup({

      type: 'iframe',

      gallery: {

          enabled: true

      }

  });

  
    // RTL Switcher

    $('.psg-icon').on('click', function(){

      $(this).parent().toggleClass('active');

  });
  




//**================= CounterUp =====================**//
if ($('.counterUp').length > 0) {   
  $('.counterUp').counterUp({
      delay: 10,
      time: 1000
  });
} 

//**================= End CounterUp =====================**//
  

  //*================Portfolio Shuffle ============*//
/*---------------------
    Shuffle Activation    
   --------------------- */
   $(window).on('load', function(e) {
    if ($('body').find('.my-shuffle-container').length !== 0) {
        var Shuffle = window.Shuffle;
        var jQuery = window.jQuery;
        var portFolioShuffle = new Shuffle(document.querySelector('.my-shuffle-container'), {
            itemSelector: '.single-portfolio',
            sizer: '.Ssizer-element',
            buffer: 1,
        });
        $('input[name="shuffle-filter"]').on('change', function(evt) {
            var input = evt.currentTarget;
            if (input.checked) {
                portFolioShuffle.filter(input.value);
            }
        });
    }
});



//*================End Portfolio Shuffle ============*//

//**================== Owl Carousl========================*//

if ($('.client').length > 0) {   

  $('.client').owlCarousel({
  
    loop:true,
    margin:20,
    dots:true,
    nav:false,
    autoplay:false,
    autoplayTimeout:3000,
    smartSpeed :3000,
    responsive:{
        0:{
            items:1
        },
        450:{
            items:1
            },
        600:{
            items:1
            }, 
        750:{
         items:2
        },
        1000:{
            items:2
        },
        1200:{
          items:3
      },
       1500:{
        items:4
        },
    }
  })
  }



  if ($('.w-slide').length > 0) {
    $('.w-slide').owlCarousel({
      loop:true,
      margin:30,
      dots:true,
      nav:false,
      autoplay:false,
      autoplayTimeout:5000,
      smartSpeed:2000,
      responsive:{
          0:{
              items:1
          },
          450:{
              items:1
              },
          600:{
              items:1
              },
          1000:{
              items:1
          },
          1400:{
            items:2
        }
      }
    })
    }


    if ($('.testimonial-slide').length > 0) {
      $('.testimonial-slide').owlCarousel({
        loop:true,
        margin:30,
        dots:true,
        nav:false,
        autoplay:true,
        autoplayTimeout:5000,
        smartSpeed:2000,
        responsive:{
            0:{
                items:1
            },
            450:{
                items:1
                },
            600:{
                items:1
                },
            1000:{
                items:2
            }
        }
      })
      }


    if ($('.case-slide').length > 0) {
      
      $('.case-slide').owlCarousel({
        loop:true,
        margin:30,
        dots:true,
        nav:false,
        autoplay:true,
        autoplayTimeout:5000,
        smartSpeed:2000,
        responsive:{
            0:{
                items:1
            },
            450:{
                items:1
                },
            600:{
                items:2
                },
            1000:{
                items:4
            }
        }
      })
      }
      
    if ($('.case-slide2').length > 0) {
      
      $('.case-slide2').owlCarousel({
        loop:true,
        margin:30,
        dots:true,
        nav:false,
        autoplay:true,
        autoplayTimeout:5000,
        smartSpeed:2000,
        responsive:{
            0:{
                items:1
            },
            450:{
                items:1
                },
            600:{
                items:1
                },
              768:{
                  items:2
                  },
            1000:{
                items:3
            }
        }
      })
      }

      if ($('.blog-slider').length > 0) {
      
        $('.blog-slider').owlCarousel({
          loop:true,
          margin:30,
          dots:false,
          nav:true,
          autoplay:true,
          navText:["<i class='flaticon-left-arrow-1'></i>","<i class='flaticon-right-arrow-1'></i>"],
          autoplayTimeout:5000,
          smartSpeed:2000,
          responsive:{
              0:{
                  items:1
              },
              450:{
                  items:1
                  },
              600:{
                  items:2
                  },
              1000:{
                  items:3
              }
          }
        })
        }

      
      if ($('.feature').length > 0) {
        $('.feature').owlCarousel({
          loop:true,
          margin:30,
          dots:true,
          nav:false,
          autoplay:true,
          autoplayTimeout:5000,
          smartSpeed:2000,
          responsive:{
              0:{
                  items:1
              },
              450:{
                  items:1
                  },
              600:{
                  items:1
                  },
                  768:{
                      items:2
                      },
              1000:{
                  items:3
              }
          }
        })

        }

        if ($('.p-slider').length > 0) {
      
          $('.p-slider').owlCarousel({
            loop:true,
            margin:30,
            dots:false,
            nav:true,
            autoplay:false,
            navText:["<i class='flaticon-left-arrow'></i>","<i class='flaticon-right-arrow'></i>"],
            autoplayTimeout:5000,
            smartSpeed:2000,
            responsive:{
                0:{
                    items:1
                },
                450:{
                    items:1
                    },
                600:{
                    items:1
                    },
                1000:{
                    items:1
                }
            }
          })
          }

//**================== Owl Carousl========================*//

//Timer Js//

if ($('body').find('#clockdiv').length !== 0) {

  function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
    };
  }
  
  function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');
  
    function updateClock() {
      var t = getTimeRemaining(endtime);
  
      daysSpan.innerHTML = t.days;
      hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
      minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
      secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
  
      if (t.total <= 0) {
        clearInterval(timeinterval);
      }
    }
  
    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
  }
  var deadline = new Date("Sep5, 2020 19:37:25"); 
  initializeClock('clockdiv', deadline);
} 

//**=================End Timer=====================**//

}(jQuery));
  


//**=================== Google Map ==========================**//

if ($('#googleMap').length > 0) { 
  var user_lat, user_lng;
      var map;
  
      function initMap() {
          map = new google.maps.Map(document.getElementById('googleMap'), {
              center: {
                  lat: 23.782062,
                  lng: 90.416053
              },
              zoom: 15,
              scrollwheel: false
          });
                
        var marker = new google.maps.Marker({
          position:  {  lat: 23.782062, lng: 90.416053},
          map: map,
       /*    icon: "assets/img/locator.png" */
        });
  
            } 
          }
  
  //*================ End Google Map ============*//
  
/*---------------------
    // Ajax Contact Form
    --------------------- */

    $('.cf-msg').hide();
    $('form#cf button#submit').on('click', function() {
    
        var name = $('#name').val();
        var email = $('#email').val();
        var number = $('#number').val();
        var msg = $('#msg').val();2
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    
        if (!regex.test(email)) {
            alert('Please enter valid email');
            return false;
        }
    
        name = $.trim(name);
        email = $.trim(email);
        msg = $.trim(msg);
    
        if (name != '' && email != '' && number != '' && msg != '') {
            var values = "name=" + name + "&email=" + email + "&number=" + number + "&msg=" + msg;
            $.ajax({
                type: "POST",
                url: "assets/mail-sender/contact.php",
                data: values,
                success: function() {
                    $('#name').val('');
                    $('#email').val('');
                    $('#number').val('');
                    $('#msg').val('');
    
                   $('.cf-msg').fadeIn().html('<div class="alert alert-success"><strong>Success!</strong> Email has been sent successfully.</div>');
                    setTimeout(function() {
                        $('.cf-msg').fadeOut('slow');
                    }, 4000);
                }
            });
        } else {
            $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Please fillup the informations correctly.</div>')   
            $('.cf-msg').fadeOut(2000)
        }
        return false;
    });


// Ajax Contact Form JS END

