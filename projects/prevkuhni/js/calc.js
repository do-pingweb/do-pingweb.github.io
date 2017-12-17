$(document).ready(function (){
  $('.select1_container .select1_box').on('click', function (){

      $('.select1_container .select1_box_hover').removeClass('selected');
      $('.stage1_plan_item').removeClass('selected');
      $(this).children('.select1_box_hover').addClass('selected');
      $('#size3').addClass('disible_input');
      $('#size3').val(undefined);
      var n = $(this).index()+1;
      $(".stage1_plan .stage1_plan_item:nth-of-type("+n+")").addClass('selected');
      $("#select_stage1 option:nth-child("+n+")").prop('selected', true);
      switch (n) {
        case 1:
          $('#size1').css({
            'top': '155px',
            'left': '0'
          });
          $('#size1 + label').css({
            'top': '159px',
            'left': '52px'
          });
          $('#size2').css({
            'top': '83px',
            'left': '200px'
          });
          $('#size2 + label').css({
            'top': '87px',
            'left': '250px'
          });
          break;
        case 2:
          $('#size1').css({
            'top': '143px',
            'left': '0'
          });
          $('#size1 + label').css({
            'top': '147px',
            'left': '52px'
          });
          $('#size2').css({
            'top': '20px',
            'left': '200px'
          });
          $('#size2 + label').css({
            'top': '24px',
            'left': '253px'
          });
          break;
        case 3:
          $('#size1').css({
            'top': '143px',
            'left': '0'
          });
          $('#size1 + label').css({
            'top': '147px',
            'left': '52px'
          });
          $('#size2').css({
            'top': '20px',
            'left': '200px'
          });
          $('#size2 + label').css({
            'top': '24px',
            'left': '253px'
          });
          break;
        case 4:
          $('#size1').css({
            'top': '143px',
            'left': '0'
          });
          $('#size1 + label').css({
            'top': '147px',
            'left': '52px'
          });
          $('#size2').css({
            'top': '20px',
            'left': '200px'
          });
          $('#size2 + label').css({
            'top': '24px',
            'left': '253px'
          });
          $('#size3').css({
            'top': '152px',
            'left': '257px'
          });
          $('#size3').removeClass('disible_input');
          break;
      
        default:
          break;
      }

  });
  $('.select2_container .select1_box').on('click', function (){
    $('.select2_container .select1_box_hover').removeClass('selected');
    $(this).children('.select1_box_hover').addClass('selected');
    var n = $(this).index()+1;
    $("#select_stage2 option:nth-child("+n+")").prop('selected', true);
  });
  $('.select3_container .select1_box').on('click', function (){
    $('.select3_container .select1_box_hover').removeClass('selected');
    $(this).children('.select1_box_hover').addClass('selected');
    var n = $(this).index()+1;
    $("#select_stage3 option:nth-child("+n+")").prop('selected', true);
  });
  $('.select4_container .select1_box').on('click', function (){
    $('.select4_container .select1_box_hover').removeClass('selected');
    $(this).children('.select1_box_hover').addClass('selected');
    var n = $(this).index()+1;
    $("#select_stage4 option:nth-child("+n+")").prop('selected', true);
  });
  $('.select5_container .select1_box').on('click', function (){
    $('.select5_container .select1_box_hover').removeClass('selected');
    $(this).children('.select1_box_hover').addClass('selected');
    var n = $(this).index()+1;
    $("#select_stage5 option:nth-child("+n+")").prop('selected', true);
  });
  // выбор этапа
  
  $('.next_stage').click(function (){
    var quantity = document.querySelectorAll('.calculator_bar_item:not(.done)').length,
    last_stage = document.querySelectorAll('.calculator_bar_item.done').length + 1;
    if ((quantity != 0) && ($('input#size1').val() != '') && ($('input#size2').val() != '')) {
      document.querySelector('.calculator_bar_item:not(.done)').classList.add('done');
      $('.calc_form_stage').removeClass('active_stage');
      $(".calc_form_stage:nth-child("+last_stage+")").addClass('active_stage');
    }else{
      $('span.invalid-desc1').show();
      $('span.invalid-desc2').show();
      if (!$('input#size3').hasClass('disible_input')){
        $('span.invalid-desc3').show();
      } 
      var top1 = $('input#size1').position().top+40,
          left1 = $('input#size1').position().left,
          top2 = $('input#size2').position().top+40,
          left2 = $('input#size2').position().left,
          top3 = $('input#size3').position().top+40,
          left3 = $('input#size3').position().left;
      $('span.invalid-desc1').css({
        top:top1,
        left:left1
      });
      $('span.invalid-desc2').css({
        top:top2,
        left:left2
      });
      $('span.invalid-desc3').css({
        top:top3,
        left:left3
      });
      setTimeout(function() {
        $('span.invalid-desc1').hide();
        $('span.invalid-desc2').hide();
        $('span.invalid-desc3').hide();
      }, 2000);
     
    }
    if($('#stage6').hasClass('active_stage')) {
      $('.calculator_footer').hide();
    }
    
  });
  $('.back_stage').click(function (){
    var quantity = document.querySelectorAll('.calculator_bar_item.done').length,
    last_stage = quantity - 1;
    if (quantity > 1) {
      document.querySelectorAll('.calculator_bar_item.done')[quantity-1].classList.remove('done');
      $('.calc_form_stage').removeClass('active_stage');
      $(".calc_form_stage:nth-child("+last_stage+")").addClass('active_stage');
    }
    if($('#stage6').hasClass('active_stage') == false) {
      $('.calculator_footer').show();
    }
  });
});