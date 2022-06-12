$(document).ready(function() {

    $("input[data-type='currency']").on({
        keyup: function() {
          formatCurrency($(this));
        }
    });


    function formatNumber(n) {
      // format number 1000000 to 1,234,567
      return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }


    function formatCurrency(input) {
      // appends $ to value, validates decimal side
      // and puts cursor back in right position.

      // get input value
      var input_val = input.val();

      // don't validate empty input
      if (input_val === "") { return; }

      // original length
      var original_len = input_val.length;

      // initial caret position
      var caret_pos = input.prop("selectionStart");

      // check for decimal
      if (input_val.indexOf(".") >= 0) {

        // get position of first decimal
        // this prevents multiple decimals from
        // being entered
        var decimal_pos = input_val.indexOf(".");

        // split number by decimal point
        var left_side = input_val.substring(0, decimal_pos);
        var right_side = input_val.substring(decimal_pos);

        // add commas to left side of number
        left_side = formatNumber(left_side);

        // validate right side
        right_side = formatNumber(right_side);

        // Limit decimal to only 2 digits
        right_side = right_side.substring(0, 2);

        // join number by .
        input_val = left_side; // + "." + right_side;

      } else {
        // no decimal entered
        // add commas to number
        // remove all non-digits
        input_val = formatNumber(input_val);
        // input_val = "$" + input_val;
      }

      // send updated string to input
      input.val(input_val);

      // put caret back in the right position
      var updated_len = input_val.length;
      caret_pos = updated_len - original_len + caret_pos;
      input[0].setSelectionRange(caret_pos, caret_pos);
    }
    if($(".announcement-info__paragraph").height() < 145){
        $(".announcement-info__paragraph").next().addClass("d-none");
    }
  $(".languageDropdown .link-button").click(function () {
   var m = $(this).innerText;
      console.log(m)
      console.log("sak")
  })
    $(".business_center-link").click(function () {
        $('.coworking-link').toggleClass("link-active")
    })
    if ($(".announcement-allprice .announcement-price").length){
        $(".announcement-allprice").css("height","unset")
        $(".announcement-allprice .announcement-price--main").removeClass("amouttag")
    }else{
        $(".announcement-allprice").css("height","72px")
        $(".announcement-allprice .announcement-price--main").addClass("amouttag")
    }
    announcementHeadline();
    $(".login-menu a").click(function () {
    })
    var numItems = $(".carousel-item .thumb").length;
    if (numItems <= 6) {
        $(".carousel-control-prev").css("display", "none")
        $(".carousel-control-next").css("display", "none")
    }

    // if($("#metro-tab").hasClass(''))
    // {
    //     $(".modal-body__content").css("max-height","403px")
    // }else{
    //     $(".modal-body__content").css("max-height","370px")
    // }
//     $(".filter-map").click(function(){
//       $(".map-complex").toggleClass("d-none");
//       $(".announcement-group__body").toggleClass("d-none");
//       if($(".map-complex").hasClass("d-none")){
//          $(this).find("strong").text("Xəritədə göstər");
//       }
//       else{
//          $(this).find("strong").text(HIDE_MAP);
//       }
//    });
   $(".announcement-filter a").click(function(){
      var id = $(this).attr("id");
      $(".announcement-filter input." +id).prop( "checked", true );
      $(".announcement-filter input").not("."+id).prop( "checked", false );
   });
   $(".announcement-info a").click(function(){
    $(".announcement-info .arrow-button").addClass("invisible");
    $(".announcement-info__paragraph").animate({
        maxHeight: "2000px"
     }, 1000);
   });

   $(".showPhonebuttonlink").click(function(){
       $(".announcement-phone").show();
       $(".announcement-phone").addClass("addflex");
      $(".announcement-phone__label").hide();
      $(".whatshappIcon").addClass("notPointer")
       $(".showPhonebutton .state").addClass("addflex");
    //   var phoneNumber = $(this).find(".announcement-phone--href").text();
    //   var phoneNumberFormatted= phoneNumber.replaceAll("(", "").replaceAll(")", "").replaceAll("-", "").replaceAll(" ", "");
    //   $(".announcement-phone--href").attr("href", "tel:" + phoneNumber);
   });
    $(".showPhonebuttonlink").click(function(){
        $(this).addClass("showContent")
    });
    $(".announcementphone").click(function(){
        $(this).addClass("showContentmain")
    });
   $(".poster-filter button").click(function(){
      $(this).addClass("link-button--tertiary");
      $(".poster-filter button").not(this).removeClass("link-button--tertiary");
   });

    $('#image-gallery').lightSlider({
        onSliderLoad: function (el) {
            $('#image-gallery').removeClass('cS-hidden');
            var showActiveSlides = function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.src = entry.target.dataset.src;
                        observer.unobserve(entry.target);
                    }
                });
            };

            var imageWidth = el.find("li").outerWidth() + "px";

            var observer = new window.IntersectionObserver(showActiveSlides, {
                root: el.parent()[0],
                rootMargin: "0px "+ imageWidth + " 0px " + imageWidth
            });

            el.find("li img").each(function () {
                observer.observe(this);
            });
            el.lightGallery({
                selector: '#image-gallery .lslide',
                exThumbImage: 'data-src'
            });
        },
        autoplay:false,
        gallery:true,
        item:1,
        thumbItem:6,
        galleryMargin: 17,
        thumbMargin: 16,
        slideMargin: 0,
        speed:500,
        pause: 5000,
        auto:false,
        loop:true,
        fullScreen:true,
        responsive : [
            {
                breakpoint:768,
                settings: {
                    thumbItem:5,
                    thumbMargin: 13,
                }
            },
            {
                breakpoint:570,
                settings: {
                    thumbItem:4
                }
            },
            {
                breakpoint:467,
                settings: {
                    thumbItem:3
                }
            },
            {
                breakpoint:350,
                settings: {
                    thumbItem:2
                }
            }
        ]
    });

    $('#galleryfull').click()
    $('.portfolio-gallery').lightSlider({
        autoplay:false,
        gallery:true,
        item:1,
        thumbItem:6,
        galleryMargin: 17,
        thumbMargin: 10,
        slideMargin: 0,
        speed:500,
        pause: 5000,
        auto:false,
        loop:true,
        responsive : [
            {
                breakpoint:768,
                settings: {
                    thumbItem:5,
                    thumbMargin: 13,
                }
            },
            {
                breakpoint:570,
                settings: {
                    thumbItem:4
                }
            },
            {
                breakpoint:467,
                settings: {
                    thumbItem:3
                }
            },
            {
                breakpoint:350,
                settings: {
                    thumbItem:2
                }
            }
        ],
        onSliderLoad: function(el) {
            $('.portfolio-gallery').removeClass('cS-hidden');
            var showActiveSlides = function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.src = entry.target.dataset.src;
                        observer.unobserve(entry.target);
                    }
                });
            };

            var imageWidth = el.find("li").outerWidth() + "px";

            var observer = new window.IntersectionObserver(showActiveSlides, {
                root: el.parent()[0],
                rootMargin: "0px "+ imageWidth + " 0px " + imageWidth
            });

            el.find("li img").each(function () {
                observer.observe(this);
            });
            el.lightGallery({
                selector: '.portfolio-gallery .lslide',
                exThumbImage: 'data-src'
            });
        }
    });
    $("#announcement-gallery-360").on("click", function(){
        $('.gallery-porfolio-360').lightSlider({
            autoplay:false,
            gallery:true,
            item:1,
            thumbItem:6,
            galleryMargin: 17,
            thumbMargin: 10,
            slideMargin: 0,
            speed:500,
            pause: 5000,
            auto:false,
            loop:false,
            responsive : [
                {
                    breakpoint:768,
                    settings: {
                        thumbItem:5,
                        thumbMargin: 13,
                    }
                },
                {
                    breakpoint:570,
                    settings: {
                        thumbItem: 4
                    }
                },
                {
                    breakpoint:467,
                    settings: {
                        thumbItem:3
                    }
                },
                {
                    breakpoint:350,
                    settings: {
                        thumbItem:2
                    }
                }
            ],
            onSliderLoad: function(el) {
                $('.gallery-porfolio').removeClass('cS-hidden');
                var showActiveSlides = function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.src = entry.target.dataset.src;
                            observer.unobserve(entry.target);
                        }
                    });
                };

                var imageWidth = el.find("li").outerWidth() + "px";

                var observer = new window.IntersectionObserver(showActiveSlides, {
                    root: el.parent()[0],
                    rootMargin: "0px "+ imageWidth + " 0px " + imageWidth
                });

                el.find("li img").each(function () {
                    observer.observe(this);
                });
                el.lightGallery({
                    selector: '.gallery-porfolio .lslide',
                    exThumbImage: 'data-src'
                });
                if(window.matchMedia("(max-width: 575px)").matches){
                    if(el.find("li:nth-child(1)").attr("data-src").indexOf("youtube") != -1){
                        if(el.find("li:nth-child(1)").hasClass("active")){
                            $(".lSAction > .lSNext").css("display", "block");
                        }
                        else{
                            $(".lSAction > .lSNext").css("display", "none");
                        }
                    }
                }
            },
            onAfterSlide: function(el) {
                if(window.matchMedia("(max-width: 575px)").matches){
                    if(el.find("li:nth-child(1)").attr("data-src").indexOf("youtube") != -1){
                        if(el.find("li:nth-child(1)").hasClass("active")){
                            $(".lSAction > .lSNext").css("display", "block");
                        }
                        else{
                            $(".lSAction > .lSNext").css("display", "none");
                        }
                    }
                }
            }
        });
    });
    $('.gallery-porfolio-normal').lightSlider({
        autoplay:false,
        gallery:true,
        item:1,
        thumbItem:6,
        galleryMargin: 17,
        thumbMargin: 10,
        slideMargin: 0,
        speed:500,
        pause: 5000,
        auto:false,
        loop:false,
        responsive : [
            {
                breakpoint:768,
                settings: {
                    thumbItem:5,
                    thumbMargin: 13,
                }
            },
            {
                breakpoint:570,
                settings: {
                    thumbItem: 4
                }
            },
            {
                breakpoint:467,
                settings: {
                    thumbItem:3
                }
            },
            {
                breakpoint:350,
                settings: {
                    thumbItem:2
                }
            }
        ],
        onSliderLoad: function(el) {
            $('.gallery-porfolio').removeClass('cS-hidden');
            var showActiveSlides = function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.src = entry.target.dataset.src;
                        observer.unobserve(entry.target);
                    }
                });
            };

            var imageWidth = el.find("li").outerWidth() + "px";

            var observer = new window.IntersectionObserver(showActiveSlides, {
                root: el.parent()[0],
                rootMargin: "0px "+ imageWidth + " 0px " + imageWidth
            });

            el.find("li img").each(function () {
                observer.observe(this);
            });
            el.lightGallery({
                selector: '.gallery-porfolio .lslide',
                exThumbImage: 'data-src'
            });
            if(window.matchMedia("(max-width: 575px)").matches){
                if(el.find("li:nth-child(1)").attr("data-src").indexOf("youtube") != -1){
                    if(el.find("li:nth-child(1)").hasClass("active")){
                        $(".lSAction > .lSNext").css("display", "block");
                    }
                    else{
                        $(".lSAction > .lSNext").css("display", "none");
                    }
                }
            }
        },
        onAfterSlide: function(el) {
            if(window.matchMedia("(max-width: 575px)").matches){
                if(el.find("li:nth-child(1)").attr("data-src").indexOf("youtube") != -1){
                    if(el.find("li:nth-child(1)").hasClass("active")){
                        $(".lSAction > .lSNext").css("display", "block");
                    }
                    else{
                        $(".lSAction > .lSNext").css("display", "none");
                    }
                }
            }
        }
    });
   $(".filters button").click(function(){
      $(".filters button").not(this).removeClass("media-isotope--checked");
      $(this).addClass("media-isotope--checked");
   });
   $('.poster-image').lightGallery({});
   $(".agency-filter__content a").click(function(){
      $(this).addClass("active");
      $(".agency-filter__content a").not(this).removeClass("active");
      var id = $(this).attr("id");
      $(".agency-body__content>div." +id).css("display","flex");
      $(".agency-body__content>div").not("."+id).css("display","none");
   });
   if (window.location.href.indexOf("#owner") > -1) {
        $(".agency-inner").removeClass("agency-inner");
        agentURL = window.location.href.split("/");
        agentID = agentURL[agentURL.length - 1].split("#owner")[0];
        console.log(agentID);
        $("."+agentID).addClass("agency-inner");
        $(".rieltor-count").addClass("d-none");
        $(".agency-rieltor h1 svg").addClass("d-none");
   }
   $(".rieltor").click(function(){
      var id = $(this).attr("id");
      $(".agency-inner").css("display","none");
      $(".agency-rieltor." +id).css("display","flex");
      $(".agency-rieltor").not("."+id).css("display","none");
   });
   $(".agency-rieltor h1 svg").click(function(){
      var id = $(this).attr("id");
      $(".agency-inner").css("display","flex");
      $(".agency-rieltor").css("display","none");
   });
   $(".filter-tertiary a").click(function(){

      $(this).addClass("link-button--tertiary");
      $(".modal-header .filter-tertiary a").not(this).removeClass("link-button--tertiary");
      $(".announcement-filter a").not(this).removeClass("link-button--tertiary");
       if($(".filter-tertiary #announcement-map").hasClass("link-button--tertiary")){
           $(".announcement-address .notshow-map").css("display","block")
           $(".announcement-address .show-map").css("display","none")

       }else{
           $(".announcement-address .notshow-map").css("display","none")
           $(".announcement-address .show-map").css("display","block")
       }
   });

    $(".announcement-address a ").click(function () {
        $('html,body').animate({
                scrollTop: $("main").offset().top
            },
            'slow');

    })
    $(".announcement-address a .show-map").click(function () {
       $(this).css("display","none")
        $(".announcement-address .notshow-map").css("display","block");
    })
    /*$(document).on("click" , ".announcement-address a .notshow-map")*/
    $(".announcement-address a .notshow-map").click(function () {
        $(".announcement-map").hide();
        $(".announcement-gallery").show();
        $(this).css("display","none");
        $(".announcement-address .show-map").css("display","block")

    })
    $(".announcement-address a .notshow-map").click(function(){
        $("#announcement-gallery-normal").addClass("link-button--tertiary");
        $("#announcement-map").removeClass("link-button--tertiary");
    });
    $(".announcement-address a .show-map").click(function(){
        $(".announcement-map").show();
        $(".announcement-gallery").hide();
        $("#announcement-gallery-normal").removeClass("link-button--tertiary");
        $("#announcement-map").addClass("link-button--tertiary");

    });

   $(".announcement-filter--first a").click(function(){
      $(this).addClass("link-button--primary");
      $(".announcement-filter--first a").not(this).removeClass("link-button--primary");
   });
    $(".announcement-filter--second a").click(function(){
        $(this).addClass("link-button--primary");
        $(".announcement-filter--second a").not(this).removeClass("link-button--primary");
    });
   $(".announcement-filter a").click(function(){
      var id = $(this).attr("id");
      $(".announcement-body__item." +id).css("display","block");
      $(".announcement-body__item").not("."+id).css("display","none");
      $(".announcement-group." +id).css("display","block");
      // $(".announcement-group").not("."+id).css("display","none");
      $(".announcement-group__header p." +id).css("display","block");
      $(".announcement-group__header p").not("."+id).css("display","none");
      $(".announcement-group:first-child").css("display","block");
   });
   $(".burger").click(function(){
      $(".header").toggleClass("header-tertiary");
      $(this).toggleClass("open");
      $("body").toggleClass("noscroll");
   });
   $(".burger-menu__link").click(function(){
      $(this).next("ul").toggleClass("d-block");
      $(this).find("i").toggleClass("chevron-up");
      $(".burger-menu__container ul").not($(this).next("ul")).removeClass("d-block");
   });
   $(".form-item__password svg").click(function(){
      $(this).addClass("d-none");
      $(this).parent().find("svg").not(this).removeClass("d-none");
      if($(this).hasClass("icon-eye")){
         $(this).parent().find('input').attr("type", "text");
      }
      else{
         $(this).parent().find('input').attr("type", "password");
      }
   });
   $("[x-price-type='area']").click(function () {
     $("[x-price-type-show='area']").css("display","grid")
       $("[x-price-type-show='month']").css("display","none")
   })
    $("[x-price-type='month']").click(function () {
        $("[x-price-type-show='area']").css("display","none")
        $("[x-price-type-show='month']").css("display","grid")
    })
   $("#propertyType").find(".p-round").click(function(){
      if($(this).find("input").prop("checked") == true){
         $(this).parent().parent().find(".p-curve input").prop("checked", true);
      }
      else{
         $(this).parent().parent().find(".p-curve input").prop("checked", false);
      }
   });
   $("#propertyType").find(".p-curve").click(function(){
      if($(this).find("input").prop("checked") == false){
         $(this).parent().parent().find(".p-round input").prop("checked", false);
      }
   });
   $("#roomCount").find(".p-round").click(function(){
      if($(this).find("input").prop("checked") == true){
         $(this).parent().parent().find(".p-curve input").prop("checked", true);
      }
      else{
         $(this).parent().parent().find(".p-curve input").prop("checked", false);
      }
   });
   $("#roomCount").find(".p-curve").click(function(){
      if($(this).find("input").prop("checked") == false){
         $(this).parent().parent().find(".p-round input").prop("checked", false);
      }
   });
   $("#locationSearch .filter-tertiary a").click(function(){
      var id = $(this).attr("id");
      $("#locationSearch .modal-body." +id).removeClass("d-none");
      $("#locationSearch .modal-body").not("."+id).addClass("d-none");
      if(id == "metro-tab" || id == "target-tab"){
         $("#locationSearch .select2").addClass("invisible");
         $("#locationSearch .select2-modal").addClass("invisible");
      }
      else{
         $("#locationSearch .select2").removeClass("invisible");
         $("#locationSearch .select2-modal").removeClass("invisible");
      }
   });
});

$(document).ready(function(){
    function alignModal(){
        var modalDialog = $('#locationSearch').find(".modal-dialog");

        // Applying the top margin on modal to align it vertically center
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
    }
    // Align modal when it is displayed
    $(".modal").on("shown.bs.modal", alignModal);

    // Align modal when user resize the window
    $(window).on("resize", function(){
        $(".modal:visible").each(alignModal);
    });
});
$(window).bind("load", function() {
   $(".dropdown-nav").mouseover(function(){
      $(".dropdown-nav__menu").removeClass("menu-visible");
      $(this).find(".dropdown-nav__menu").addClass("menu-visible");
   });
   $(".dropdown-nav").mouseleave(function(){
      $(".dropdown-nav__menu").removeClass("menu-visible");
   });
});
$(document).ready(function(){
    var sitebutton = $(".businessCenterWebsite").text()
    if(sitebutton == ""){
        $(".businessCenterWebsite").parent().css("display","none")
    }
    var sitebuttonwebsite =$(".link-button--website").text().trim()
    if(sitebuttonwebsite == ""){
        $(".link-button--website").css("display","none")
    }
})

//accordion
var acc = document.getElementsByClassName("question");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}


$(document).ready(function() {
    // $('input[id="form_amount"]').keyup(function() {
    //     $(this).val($(this).val().replace(/(\d{4})(\d+)/g, '$1.$2'))
    // });
  $("#show_hide_password a").on('click', function(event) {
      event.preventDefault();
      if($('#show_hide_password input').attr("type") == "text"){
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass( "fa-eye-slash" );
          $('#show_hide_password i').removeClass( "fa-eye" );
      }else if($('#show_hide_password input').attr("type") == "password"){
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass( "fa-eye-slash" );
          $('#show_hide_password i').addClass( "fa-eye" );
      }
  });
  $('html').on('click', function(e) {
   if (!$(e.target).is('[data-toggle="popover"]') && $(e.target).closest('.popover').length == 0) {
     $('[data-toggle="popover"]').popover('hide');
   }
});
$(".scroll-up").click(function() {
   $(".header-secondary").removeClass("header-fixed");
   $('html,body').animate({
      scrollTop: $(".header").offset().top
   },
   'slow');
});
    if ($(window).scrollTop() > 100) {
        $('.scroll-up').fadeIn();
    } else {
        $('.scroll-up').fadeOut();
    }
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scroll-up').fadeIn();
        } else {
            $('.scroll-up').fadeOut();
        }
    });
$(".button-file").click(function(){
   $('#input-logo').on('change', function() {
      var filename = $(this).val();
      var res = filename.substring(12, 40);
      alert(filename);
      $('.button-file span').text(res);
   });
});
if($(".page-paragraph__container").height() < 400){
   $(".more-about").css("display","none")
}
$(".more-about").click(function(){
   $(".page-paragraph--less").toggleClass("page-paragraph--more");
   $(this).find("span").toggleClass("d-none");
});
});

// $('#announcement-1 .carousel-indicators  li').on('mouseover',function(){
//     $(this).trigger('click');
// })
//copy input
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  copyText.select().location.reload(false)
}
$(".btn-secondary").click(function(){
  $(this).css("background","#f5f6f9")
  $(this).css("border-color","#f5f6f9")
  $(this).css("color","#2a314a")
  $(this).css("box-shadow","none")
})

//load
// window.addEventListener("load", function () {
//    const loader = document.querySelector(".loader");
//    loader.className += " hidden"; // class "loader hidden"
// });
// window.addEventListener("load", function () {
//    const loader = document.querySelector(".loaderdiv");
//    loader.className += " hidden"; // class "loader hidden"
// });

var SignupButtons = {
   request: function(element) {
     element.classList.add('-request');
   },

   success: function(element) {
     element.classList.remove('-request');
     element.classList.add('-success');
   },

   reset: function(element) {
     element.classList.remove('-success');
   },

   flow: function(element) {
     SignupButtons.request(element);

     setTimeout(function() {
       SignupButtons.success(element);
     }, 2150);

     setTimeout(function() {
       SignupButtons.reset(element);
     }, 4000);
   },

   init: function() {
     var buttons = document.querySelectorAll('button');

     for (let i = 0; i < buttons.length; i++) {
       var button = buttons[i];

       button.addEventListener('click', function() {
         SignupButtons.flow(button);
       });
     }
   }
 };

 window.onload = SignupButtons.init;
 $(document).ready(function(){
   $(".btn_search").click(function(){
      $(this).css('background','#5f7bebb3');
      $(".btn_search").toggleClass("btn-load");
   });
});

$('.ui.dropdown').dropdown({});
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// $('.form-message--info span a').on('click', function(event) {
//     $("#modalMap").toggleClass("modalblock")
//     if($("#modalMap").hasClass("modalblock")){
//         $(".modal").addClass("modalClass")
//     }
// });
//
//
// $("#modalMap .modal-close").click(function () {
//   $("#modalMap").toggleClass("modalblock");
//     $('body').toggleClass("scroll-add")
// })
// $("span .showMap").click(function () {
//         $('body').addClass("scroll-add")
// })
// $("#modalMap .modal-body a").click(function () {
//     $('body').toggleClass("scroll-add")
//     $("#modalMap").toggleClass("modalblock")
// })
// $(".modal-close").click(function () {
//     $("body").toggleClass("modal-open");
// })
var last_value = $("#addressInput").val();

$("#addressInput").on("change", function () {
    if (this.value === last_value)
    last_value=this.value;
});
$('#savelocation').click(function(e) {
    e.preventDefault();
});
///360 tap
$('#myCarousel').carousel({
    interval: false
});
$('#carousel-thumbs').carousel({
    interval: false
});
// handles the carousel thumbnails
// https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
$('[id^=carousel-selector-]').click(function() {
    var id_selector = $(this).attr('id');
    var id = parseInt( id_selector.substr(id_selector.lastIndexOf('-') + 1) );
    $('#myCarousel').carousel(id);
});
// Only display 3 items in nav on mobile.
if ($(window).width() < 575) {
    $('#carousel-thumbs .row div:nth-child(4)').each(function() {
        var rowBoundary = $(this);
        $('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll().addBack());
    });
    $('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function() {
        var boundary = $(this);
        $('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll().addBack());
    });
}
// Hide slide arrows if too few items.
if ($('#carousel-thumbs .carousel-item').length < 2) {
    $('#carousel-thumbs [class^=carousel-control-]').remove();
    $('.machine-carousel-container #carousel-thumbs').css('padding','0 5px');
}
// when the carousel slides, auto update
$('#myCarousel').on('slide.bs.carousel', function(e) {
    var id = parseInt( $(e.relatedTarget).attr('data-slide-number') );
    $('[id^=carousel-selector-]').removeClass('selected');
    $('[id=carousel-selector-'+id+']').addClass('selected');
});
// when user swipes, go next or previous
// $('#myCarousel').swipe({
//     fallbackToMouseEvents: true,
//
//     swipeLeft: function(e) {
//         $('#myCarousel').carousel('next');
//     },
//     swipeRight: function(e) {
//         $('#myCarousel').carousel('prev');
//     },
//     allowPageScroll: 'vertical',
//     preventDefaultEvents: false,
//     threshold: 75
// });
/*
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
*/

$('#myCarousel .carousel-item img').on('click', function(e) {
    var src = $(e.target).attr('data-remote');
    if (src) $(this).ekkoLightbox();
});

// function formatNumber(n) {
//     if (n < 0) { throw 'must be non-negative: ' + n; }
//     if (n === 0) { return '0'; }
//
//     var output = [];
//
//     for (; n > 0; n = Math.floor(n/1000)) {
//         output.unshift(n % 1000);
//     }
//
//     return output.join(' ');
// }
function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1 ')
}

var numbers = document.getElementsByClassName('word-broken');
for (var index = 0; index < numbers.length; index++) {
    var elem = numbers.item(index);
    if( elem.textContent.length ) elem.textContent = formatNumber(parseInt(elem.textContent)) + ` ${elem.textContent.split(" ")[1]}` ;
}
var numbers = document.getElementsByClassName('num-broken');
for (var index = 0; index < numbers.length; index++) {
    var elem = numbers.item(index);
    if( elem.textContent.length ) elem.textContent = formatNumber(parseInt(elem.textContent));
}
function announcementHeadline(){
    var x = document.getElementsByClassName("announcement-headline");
    var i;
    const search = " - ";
    const replaceWith = " ⦁ ";
    for (i = 0; i < x.length; i++) {
        // x[i].innerHTML = x[i].innerHTML.replaceAll(" - ", " ⦁ ");
        x[i].innerHTML = x[i].innerHTML.split(search).join(replaceWith);
    }
}
