$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
  	items:4,
  	margin:30,
  	nav:true,
  	responsive : {
    // breakpoint from 0 up
    0 : {
        items:1
        
    },
    // breakpoint from 480 up
    480 : {
       	items:1
        
    },
    // breakpoint from 768 up
    1100 : {
        items:4
        
    }
}
  });
});


function stick(){
	$(window).scroll(function(){
		if($(this).scrollTop()>=150){
			$('header').addClass('stick');
			$('.stick_logo').fadeIn();
		}else{
			$('header').removeClass('stick');
			$('.stick_logo').fadeOut();

		}
	})
}
$('.header_hamburger').on('click',function(){
	$('.menu_mob').toggleClass('active');
	$('.header_hamburger').toggleClass('active');
	$('.overlay').toggleClass('active');

})
$('.bag').on('click',function(e){
  e.preventDefault();
  $('.overlay').addClass('active');
  $('.cart_show').addClass('active');
  

})
$('.cart_close').on('click',function(e){
  e.preventDefault();
  $('.overlay').removeClass('active');
  $('.cart_show').removeClass('active');
})
stick();

$(window).scroll(
        function(){
          if($(this).scrollTop()>=150){
            $('.prod_info').addClass('fixed');
            $('.dots').addClass('fixed');
          }
          else {
            $('.prod_info').removeClass('fixed');
            $('.dots').removeClass('fixed');
          }
        }
);



var numCount = $('#num_count');
    var plusBtn = $('#button_plus');
    var minusBtn = $('#button_minus');
    plusBtn.onclick = function() {
      var qty = parseInt(numCount.value);
      qty = qty + 1;
      numCount.value = qty;
    }
    minusBtn.onclick = function() {
      var qty = parseInt(numCount.value);
      qty = qty - 1;
      numCount.value = qty;};



