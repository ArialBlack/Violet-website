$(document).ready (function() {

    /** Tabs in Get-in-Touch**/
    $('.map-tabs .tabs a').click(function(event) {
        event.preventDefault();
        var target = '.' + $(this).attr('href');
        var target_src = $(this).attr('target-src');
        $(this).parent().addClass('map-active').siblings().removeClass('map-active');
        console.log(target);
        $(target).addClass('map-active').siblings('.map-active').fadeOut( 500, function() {
           $(this).removeClass('map-active');
            $(target).fadeIn();
        });
        $('.map iframe').attr('src', target_src);
    });

    /** /Tabs in Get-in-Touch**/


  /*** Opacity on scroll***/
  var discreteElements = document.getElementsByClassName('opacity')
    for (var i = 0; i < discreteElements.length; i++) {
        new Waypoint({
            element: discreteElements[i],
            handler: function(direction) {
                if (direction === 'down') {
                    $(this.element).addClass('visible');
                }
                else {
                    $(this.element).removeClass('visible');
                }
                // console.log('it works DOWN');
            },
            continuous: true,
            offset: function() {
                return document.documentElement.clientHeight - (this.element.clientHeight - this.element.style.padding)/1.5
            }
        });

        new Waypoint({
            element: discreteElements[i],
            handler: function(direction) {
                // notify(' hit')
                if (direction === 'up') {
                    $(this.element).addClass('visible');
                }
                else {
                    $(this.element).removeClass('visible');
                }
                console.log('it works UP');
            },
            continuous: true,
            offset: function() {
                return (65 - (this.element.clientHeight - this.element.style.padding)/2)
            }
        })
    }
  /*** /Opacity on scroll ***/


  
  var mobToBurger = $('.mob-to-burger');
  appendMobCollapse(mobToBurger);
  jumbCheckHeight();
  $(window).resize(function(){
    appendMobCollapse(mobToBurger);
    jumbCheckHeight();
  })

  $('.comp-block').click(function(){
    console.log(123);
    var blockUrl = $(this).find('.comp-more').attr('href');
    location.href = blockUrl; 
  })

  /*** burger-toggle ***/
  $('.burger').click(function(e){
    e.preventDefault();
    console.log('click');
    $(this).toggleClass('active');
    $('.burger-content').slideToggle();
  })
  /*** burger-toggle ***/


  /*** Button scroll down ***/
  $('.scroll-down').click(function(e) {
   e.preventDefault();
   var target = $(this).attr('href');
   var offsetScroll = $(target).offset().top;
   $('html, body').animate( { scrollTop:  offsetScroll}, 1000);
 });
  /*** Button scroll down ***/


  /*** Animation for navigation ***/
  return $('.burger-button').click(function() {
    console.log('clicked');
    $(this).toggleClass("active");
    talk();
    if (isOpen()) {
      close();
    } else {
      open();
    }
    return setTimeout(function() {
      return load();
    }, 500);
  });
  /*** Animation for navigation ***/

});

/*** Menu initial value and function ***/

var close, isOpen, load, open, talk, unload;

isOpen = function() {
  console.log('checking...');
  return $('.bubble-animation').hasClass('open');
};

open = function() {
  console.log('opening...');
  $('.nav-main .nav').css('display', 'block');
  setTimeout(function() {
      $('.mobile-nav li').fadeIn()
  }, 1100);
  if ($(this).width() >= 768) {
      $('.nav-main .burger-button').animate({ left:  '85%', borderBottomLeftRadius: '150px', borderTopLeftRadius: '150px'}, 1000);
  }
  else {
      $('.nav-main .burger-button').animate({ left: 'initial', right:  '85%', top: '92%'}, 1000);
  }
  // $('.nav-main').css('width', '100vw');
  return $('.bubble-animation').addClass('open');
};

close = function() {
  console.log('closing...');
    if ($(this).width() >= 768) {
        $('.nav-main .burger-button').animate({
            left: '-5px',
            borderBottomLeftRadius: '0',
            borderTopLeftRadius: '0'
        }, 1000);
    }
    else {
        $('.nav-main .burger-button').animate({
            left: 'initial',
            top: '32px',
            right: '10px'
        }, 1000);
    }
  $('.nav-main .nav, .mobile-nav li').css('display', 'none');
  // setTimeout(function(){
  //   $('.nav-main').css('width', '60px')
  // }, 1000);
  $('.bubble-animation').removeClass('open');
  return unload();
};

talk = function() {
  return console.log('Hello there!');
};

unload = function() {
  console.log('loading menu items...');
  return $('.nav-main .nav li').each(function(index, element) {
    console.log('item loaded');
    console.log('item removed class');
    return $(element).removeClass('comeIn');
  });
};

load = function() {
  console.log('loading menu items...');
  return $('.nav-main .nav li').each(function(index, element) {
    console.log('item loaded');
    return setTimeout(function() {
      console.log('item added class');
      if (isOpen()) {
        return $(element).addClass('comeIn');
      }
    }, 150 * index);
  });
};

/*** Menu initial value and function ***/

/*** Iphone-slider ***/
var slideWidth=250;
var sliderTimer;
$(function(){
  $('.slides-container').width($('.slides-container').children().length*slideWidth);
  sliderTimer=setInterval(nextSlide,3000);
  $('.slider-wrapper, .button-slide').hover(function(){
    clearInterval(sliderTimer);
  },function(){
    sliderTimer=setInterval(nextSlide,3000);
  });

  $('.prev').click(function(e){
    e.preventDefault();
    var currentSlide=parseInt($('.slides-container').data('current'));
    currentSlide--;
    if(currentSlide<0)
    {
      currentSlide=$('.slides-container').children().length - 1;   
    }
    $('.slides-container').animate({left: -currentSlide*slideWidth},800).data('current',currentSlide);
  })

  $('.next').click(function(e){
    e.preventDefault();
    var currentSlide=parseInt($('.slides-container').data('current'));
    currentSlide++;
    if(currentSlide>=$('.slides-container').children().length)
    {
      currentSlide=0;   
    }
    $('.slides-container').animate({left: -currentSlide*slideWidth},800).data('current',currentSlide);
  })
});

function nextSlide(){
  var currentSlide=parseInt($('.slides-container').data('current'));
  currentSlide++;
  if(currentSlide>=$('.slides-container').children().length)
  {
    currentSlide=0;   
  }
  $('.slides-container').animate({left: -currentSlide*slideWidth},800).data('current',currentSlide);
}
/*** Iphone-slider ***/


function appendMobCollapse(mobToBurger) {
  if ($(this).width() < 992 && $(this).width() > 768) {
    $('.burger-content .row').append(mobToBurger);
    $('.burger').fadeIn();
  } else if ($(this).width() < 768) {
  	$('.burger-content .row').append(mobToBurger);
  	$('.burger').fadeOut();
  	return false;
  } else {
    $('.header>.container>.row').prepend(mobToBurger[0]).append(mobToBurger[1]);
    $('.burger').fadeOut();
  }
}

function jumbCheckHeight() {
  if ($('.vert-bottom').length) {
    console.log(2);
    var newHeightJumb = $(".vert-bottom").height() + 180;
    $('.vert-bottom').parent().css('min-height', newHeightJumb);
  }
}