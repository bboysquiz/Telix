// $(".popup__callback-phone").mask("+7(999) 999-9999");
$.fn.setCursorPosition = function(pos) {
    if ($(this).get(0).setSelectionRange) {
      $(this).get(0).setSelectionRange(pos, pos);
    } else if ($(this).get(0).createTextRange) {
      var range = $(this).get(0).createTextRange();
      range.collapse(true);
      range.moveEnd('character', pos);
      range.moveStart('character', pos);
      range.select();
    }
};
$("#entrance-number").click(function(){
    $(this).setCursorPosition(3);
}).mask("9999-999-999-999");
$("#entrance-number").mask("9999-999-999-999");

$(".popup-callback__input-phone").mask("+7-999-999-99-99");




