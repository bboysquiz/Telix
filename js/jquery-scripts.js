$(document).ready(function () {
  if (screen.width < 768) {
    $(".menu-burger").click(function (event) {
      $(".menu-burger, .mobile-menu").toggleClass("active");
      $("body").toggleClass("lock");
      $(".mobile-menu").removeClass("hide");
    });

    $(".menu__item").click(function (event) {
      $(".menu-burger, .mobile-menu").toggleClass("active");
      $("body").toggleClass("lock");
    });
  }
    if (localStorage.getItem('tabMenu') == 1){
      $('.operator-tariffs__tab-content-internet').css('display','flex')
      $('.operator-tariffs__tab-content-phone').css('display','none')
      $('.operator-tariffs__tab-content-tv').css('display','none')
      if (screen.width > 920) {
        $('#internet-list-item').children('.operator-tariffs-tab-pannel__img').css('display', 'none')
        $('#internet-list-item').children('.operator-tariffs-tab-pannel__img_active').css('display', 'block')
      }
      $('#internet-list-item').addClass('active')
      $('#phone-list-item').removeClass('active')
      $('#tv-list-item').removeClass('active')
    } else if (localStorage.getItem('tabMenu') == 2) {
      $('.operator-tariffs__tab-content-phone').css('display','flex')
      $('.operator-tariffs__tab-content-internet').css('display','none')
      $('.operator-tariffs__tab-content-tv').css('display','none')
      if (screen.width > 920) {
        $('#phone-list-item').children('.operator-tariffs-tab-pannel__img').css('display', 'none')
        $('#phone-list-item').children('.operator-tariffs-tab-pannel__img_active').css('display', 'block')
      }
      $('#phone-list-item').addClass('active')
      $('#internet-list-item').removeClass('active')
      $('#tv-list-item').removeClass('active')
    } else if (localStorage.getItem('tabMenu') == 3) {
      $('.operator-tariffs__tab-content-tv').css('display','flex')
      $('.operator-tariffs__tab-content-internet').css('display','none')
      $('.operator-tariffs__tab-content-phone').css('display','none')
      if (screen.width > 920) {
        $('#tv-list-item').children('.operator-tariffs-tab-pannel__img').css('display', 'none')
        $('#tv-list-item').children('.operator-tariffs-tab-pannel__img_active').css('display', 'block')
      }
      $('#tv-list-item').addClass('active')
      $('#internet-list-item').removeClass('active')
      $('#phone-list-item').removeClass('active')
    }



  function openPopup(button, popupFade) {
    $(button).click(function () {
      $(popupFade).fadeIn();
      return false;
    });
  }

  function closePopup(popupFade, popup) {
    $(popupFade).click(function (e) {
      if ($(e.target).closest(popup).length == 0) {
        $(this).fadeOut();
      }
    });
  }

  openPopup(".link-contacts", ".popup-contacts__fade");
  openPopup(".button-site-creating", ".popup-site-creating__fade");
  openPopup(".link-about", ".popup-about__fade");
  openPopup(".how-to-pay", ".popup-how-to-pay__fade");

  closePopup(".popup-contacts__fade", ".popup-contacts");
  closePopup(".popup-site-creating__fade", ".popup-site-creating");
  closePopup(".popup-about__fade", ".popup-about");
  closePopup(".popup-how-to-pay__fade", ".popup-how-to-pay");

});


//operator tariffs
$('#internet-list-item').click(function(){
  $('.operator-tariffs__tab-content-internet').css('display','flex')
  $('.operator-tariffs__tab-content-phone').css('display','none')
  $('.operator-tariffs__tab-content-tv').css('display','none')
  if (screen.width > 920) {
    $('#internet-list-item').children('.operator-tariffs-tab-pannel__img').css('display', 'none')
    $('#internet-list-item').children('.operator-tariffs-tab-pannel__img_active').css('display', 'block')
    $('#tv-list-item').children('.operator-tariffs-tab-pannel__img_active').css('display', 'none')
    $('#phone-list-item').children('.operator-tariffs-tab-pannel__img_active').css('display', 'none')
    $('#phone-list-item').children('.operator-tariffs-tab-pannel__img').css('display', 'block')
    $('#tv-list-item').children('.operator-tariffs-tab-pannel__img').css('display', 'block')
  }
  $('#internet-list-item').addClass('active')
  $('#phone-list-item').removeClass('active')
  $('#tv-list-item').removeClass('active')
})
$('#phone-list-item').click(function(){
  $('.operator-tariffs__tab-content-phone').css('display','flex')
  $('.operator-tariffs__tab-content-internet').css('display','none')
  $('.operator-tariffs__tab-content-tv').css('display','none')
  if (screen.width > 920) {
    $('#phone-list-item').children('.operator-tariffs-tab-pannel__img').css('display', 'none')
    $('#phone-list-item').children('.operator-tariffs-tab-pannel__img_active').css('display', 'block')
    $('#tv-list-item').children('.operator-tariffs-tab-pannel__img_active').css('display', 'none')
    $('#internet-list-item').children('.operator-tariffs-tab-pannel__img_active').css('display', 'none')
    $('#internet-list-item').children('.operator-tariffs-tab-pannel__img').css('display', 'block')
    $('#tv-list-item').children('.operator-tariffs-tab-pannel__img').css('display', 'block')
  }
  $('#phone-list-item').addClass('active')
  $('#internet-list-item').removeClass('active')
  $('#tv-list-item').removeClass('active')
})
$('#tv-list-item').click(function(){
  $('.operator-tariffs__tab-content-tv').css('display','flex')
  $('.operator-tariffs__tab-content-internet').css('display','none')
  $('.operator-tariffs__tab-content-phone').css('display','none')
  if (screen.width > 920) {
    $('#tv-list-item').children('.operator-tariffs-tab-pannel__img').css('display', 'none')
    $('#tv-list-item').children('.operator-tariffs-tab-pannel__img_active').css('display', 'block')
    $('#phone-list-item').children('.operator-tariffs-tab-pannel__img_active').css('display', 'none')
    $('#internet-list-item').children('.operator-tariffs-tab-pannel__img_active').css('display', 'none')
    $('#phone-list-item').children('.operator-tariffs-tab-pannel__img').css('display', 'block')
    $('#internet-list-item').children('.operator-tariffs-tab-pannel__img').css('display', 'block')
  }
  $('#tv-list-item').addClass('active')
  $('#internet-list-item').removeClass('active')
  $('#phone-list-item').removeClass('active')
})

$('.bottom-pannel__item-tariff').click(function(){
  $('.bottom-pannel__item-tariff').css('background-color','#6F7B8D')
  $('.bottom-pannel__item-abon').css('background-color','#9AA3AF')
  $('.operator-tariffs__tab-content-internet-tariff').css('display','flex')
  $('.operator-tariffs__tab-content-internet-abon').css('display','none')
})
$('.bottom-pannel__item-abon').click(function(){
  $('.bottom-pannel__item-abon').css('background-color','#6F7B8D')
  $('.bottom-pannel__item-tariff').css('background-color','#9AA3AF')
  $('.operator-tariffs__tab-content-internet-abon').css('display','flex')
  $('.operator-tariffs__tab-content-internet-tariff').css('display','none')
})

$('.bottom-pannel__item-iptv').click(function(){
  $('.bottom-pannel__item-iptv').css('background-color','#6F7B8D')
  $('.bottom-pannel__item-ook').css('background-color','#9AA3AF')
  $('.bottom-pannel__item-ktv').css('background-color','#9AA3AF')
  $('.operator-tariffs__tab-content-tv-iptv').css('display','flex')
  $('.operator-tariffs__tab-content-tv-ook').css('display','none')
  $('.operator-tariffs__tab-content-tv-ktv').css('display','none')
})

$('.contractor-services-item').hover(
  function() {
    $(this).children().css('display','flex')
  }, function(){
    $(this).children().css('display','none')
  }
)


$('#internet').click(function(){
  localStorage.setItem('tabMenu', 1);
  console.log( localStorage.getItem('tabMenu') ); // 1
})
$('#telephonia').click(function(){
  localStorage.setItem('tabMenu', 2);
  console.log( localStorage.getItem('tabMenu') ); // 2
})
$('#televidenie').click(function(){
  localStorage.setItem('tabMenu', 3);
  console.log( localStorage.getItem('tabMenu') ); // 3
})
$('#internetMore').click(function(){
  localStorage.setItem('tabMenu', 1);
  console.log( localStorage.getItem('tabMenu') ); // 1
})
$('#phoneMore').click(function(){
  localStorage.setItem('tabMenu', 2);
  console.log( localStorage.getItem('tabMenu') ); // 2
})
$('#TVMore').click(function(){
  localStorage.setItem('tabMenu', 3);
  console.log( localStorage.getItem('tabMenu') ); // 3
})


$('.callback-popup-button').click(function(){
  $('.popup-callback').css('display','flex')
  $('.popup-callback-layer').css('display','block')
})
$('.popup-callback-layer').click(function(){
  $('.popup-callback').css('display','none')
  $('.popup-callback-thx').css('display','none')
  $('.popup-callback-layer').css('display','none')
})
$('.popup-callback__submit').click(function(){
  $('.popup-callback').css('display','none')
  $('.popup-callback-thx').css('display','flex')
})
$('.popup-callback-thx__button').click(function(){
  $('.popup-callback-thx').css('display','none')
  $('.popup-callback-layer').css('display','none')
})

$('.menu__link').hover(function(e){
    $(e.target).children('.menu__img').css('display','none')
    $(e.target).children('.menu__img_hover').css('display','block')
}, function(e) {
    $(e.target).children('.menu__img_hover').css('display','none')
    $(e.target).children('.menu__img').css('display','block')
})

//popup-changePassword
$('.content-changePassword__form-button').click(function(){
  $('.popup-changePassword__layer').css('display','block')
  $('.popup-changePassword').css('display','block')
})
$('.popup-changePassword__button-no').click(function(){
  $('.popup-changePassword').css('display','none')
  $('.popup-changePassword__layer').css('display','none')
})
$('.popup-changePassword__button-ok').click(function(){
  $('.popup-changePassword__access').css('display','none')
  $('.popup-changePassword__fail').css('display','none')
  $('.popup-changePassword__layer').css('display','none')
})
$('.popup-changePassword__layer').click(function(){
  $('.popup-changePassword__layer').css('display','none')
  $('.popup-changePassword').css('display','none')
  $('.popup-changePassword__access').css('display','none')
  $('.popup-changePassword__fail').css('display','none')
})

//popup-changeAdres
$('.content-changeAdres__form-button').click(function(){
  $('.popup-changeAdres__layer').css('display','block')
  $('.popup-changeAdres').css('display','block')
})
$('.popup-changeAdres__button-no').click(function(){
  $('.popup-changeAdres').css('display','none')
  $('.popup-changeAdres__layer').css('display','none')
})
$('.popup-changeAdres__button-ok').click(function(){
  $('.popup-changeAdres__access').css('display','none')
  $('.popup-changeAdres__fail').css('display','none')
  $('.popup-changeAdres__layer').css('display','none')
})
$('.popup-changeAdres__layer').click(function(){
  $('.popup-changeAdres__layer').css('display','none')
  $('.popup-changeAdres').css('display','none')
  $('.popup-changeAdres__access').css('display','none')
  $('.popup-changeAdres__fail').css('display','none')
})

//popup-suspenseService
$('.profile__button-suspenseService').click(function(){
  $('.popup-suspenseService__layer').css('display','block')
  $('.popup-suspenseService').css('display','block')
})
$('.popup-suspenseService__button-no').click(function(){
  $('.popup-suspenseService').css('display','none')
  $('.popup-suspenseService__layer').css('display','none')
})
$('.popup-suspenseService__button-ok').click(function(){
  $('.popup-suspenseService__access').css('display','none')
  $('.popup-suspenseService__layer').css('display','none')
})
$('.popup-suspenseService__layer').click(function(){
  $('.popup-suspenseService__layer').css('display','none')
  $('.popup-suspenseService').css('display','none')
  $('.popup-suspenseService__access').css('display','none')
})

//popup-stopService
$('.profile__button-stopService').click(function(){
  $('.popup-stopService__layer').css('display','block')
  $('.popup-stopService').css('display','block')
})
$('.popup-stopService__button-no').click(function(){
  $('.popup-stopService').css('display','none')
  $('.popup-stopService__layer').css('display','none')
})
$('.popup-stopService__button-ok').click(function(){
  $('.popup-stopService__access').css('display','none')
  $('.popup-stopService__fail').css('display','none')
  $('.popup-stopService__layer').css('display','none')
})
$('.popup-stopService__layer').click(function(){
  $('.popup-stopService__layer').css('display','none')
  $('.popup-stopService').css('display','none')
  $('.popup-stopService__access').css('display','none')
  $('.popup-stopService__fail').css('display','none')
})

$('.popup-suspenseService__button-yes').click(function(){
  $('.popup-suspenseService__button-yes').css('pointer-events','none');
  $.ajax({
    method: "POST",
    url: "suspenseService.php"
  })
    .done(function( msg ) {
      if (msg = 'success'){
        $('.popup-suspenseService__access').css('display','block')
        $('.popup-suspenseService').css('display','none')
        console.log(msg)
      }
  });
})

$('.popup-stopService__button-yes').click(function(){
  $('.popup-stopService__button-yes').css('pointer-events','none');
  $.ajax({
    method: "POST",
    url: "stopService.php"
  })
    .done(function( msg ) {
      if (msg = 'success'){
        $('.popup-stopService__access').css('display','block')
        $('.popup-stopService').css('display','none')
        console.log(msg)
      }
  });
})

$('.popup-changePassword__button-yes').click(function(){
  $('.popup-changePassword__button-yes').css('pointer-events','none');
  let inputValue = $('.content-changePassword__form-input').val()
  $.ajax({
    method: "POST",
    url: "changePasswordQuery.php",
    data: { password: inputValue }
  })
    .done(function( msg ) {
      if (msg = 'success'){
        $('.popup-changePassword__access').css('display','block')
        $('.popup-changePassword').css('display','none')
        $('.content-changePassword__form-input').val('')
        $('.popup-changePassword__button-yes').css('pointer-events','auto');
        console.log(msg)
      }
  });
})

$('.popup-changeAdres__button-yes').click(function(){
  $('.popup-changeAdres__button-yes').css('pointer-events','none');
  let inputValue = $('.content-changeAdres__form-input').val()
  $.ajax({
    method: "POST",
    url: "changeAdresQuery.php",
    data: { adres: inputValue }
  })
    .done(function( msg ) {
      if (msg = 'success'){
        $('.popup-changeAdres__access').css('display','block')
        $('.popup-changeAdres').css('display','none')
        $('.content-changeAdres__form-input').val('')
        $('.popup-changeAdres__button-yes').css('pointer-events','auto');
        console.log(msg)
      }
  });
})

$('.requestConnect__radio-input').click(function(e){
    if ($(e.target).parent().find('.requestConnect__radio-input').prop('checked') === true) {
      $(e.target).parent().find('.requestConnect__radio-input-fake').css('background-color', '#57A7BF')
    }else{
      $(e.target).parent().find('.requestConnect__radio-input-fake').css('background', 'none')
    }
})

$('.requestConnect__button').click(function(){
  setTimeout(function(){
    $('.requestConnect__button').css('pointer-events','none')
  })
  let adres = $('.requestConnect__adres-input').val();
  let fio = $('.requestConnect__fio-textarea').val();
  let date = $('.requestConnect__date-input').val();
  let serviceInternet;
  let servicePhone;
  let serviceTV;
  let serviceRouter;
  if ( $('#serviceInternet').prop('checked') === true ){
    serviceInternet = 100;
  }else{
    serviceInternet = 0;
  }
  if ($('#servicePhone').prop('checked') === true){
    servicePhone = 100
  }else{
    servicePhone = 0
  }
  if ($('#serviceTV').prop('checked') === true){
    serviceTV = 100
  }else{
    serviceTV = 0
  }
  if ($('#serviceRouter').prop('checked') === true){
    serviceRouter = 100
  }else{
    serviceRouter = 0
  }
    $.ajax({
      method: "POST",
      url: "requestConnecting.php",
      data: {
        adres: adres,
        fio: fio,
        date: date,
        internet: serviceInternet,
        phone: servicePhone,
        tv: serviceTV,
        router: serviceRouter
      }
    })
      .done(function( msg ) {
        if (msg = 'success'){
          console.log(msg)
          $('.popup-requestConnect__access').css('display','flex')
          $('.popup-requestConnect__layer').css('display','block')
          $('.requestConnect__adres-input').val('');
          $('.requestConnect__fio-textarea').val('');
          $('.requestConnect__date-input').val('');
          $('#serviceInternet').prop('checked' , false)
          $('#servicePhone').prop('checked' , false)
          $('#serviceTV').prop('checked' , false)
          $('#serviceRouter').prop('checked' , false)
          $('#servicePhone').parent().find('.requestConnect__radio-input-fake').css('background', 'none')
          $('#serviceTV').parent().find('.requestConnect__radio-input-fake').css('background', 'none')
          $('#serviceRouter').parent().find('.requestConnect__radio-input-fake').css('background', 'none')
          $('#serviceInternet').parent().find('.requestConnect__radio-input-fake').css('background', 'none')
        }
    });
});
$('.popup-requestConnect__button-ok').click(function(){
  $('.popup-requestConnect__access').css('display','none')
  $('.popup-requestConnect__layer').css('display','none')
  $('.requestConnect__button').css('pointer-events','auto')
})