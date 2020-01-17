$(document).ready(function() {
	$('.js-scrollTo').on('click', function() {
		var page = $(this).attr('href');
		var speed = 1500;
		$('html, body').animate( { scrollTop: $(page).offset().top }, speed );
		return false;
  });
  
  $(function () {
    var prod = $('#s_prod');
    var backgrounds = [
      'url(./images/vegas/04.jpg)', 
      'url(./images/vegas/03.jpg)', 
      'url(./images/vegas/02.jpg)', 
      'url(./images/vegas/01.jpg)'];
    var current = 0;
  
    function nextBackground() {
        prod.css('background-image', backgrounds[current = ++current % backgrounds.length]);
        prod.css('transition','1s');
        setTimeout(nextBackground, 5000);   
    }
    setTimeout(nextBackground, 5000);
    prod.css('background', backgrounds[0]);
  });

  $('#btn_plan').click(function(){
    $('#google_map').slideToggle(1000);
  });
  
  $('.preview').mouseenter(function() {
    number = this.id;
    $(".preview-img").hide();
    $('#img'+number).show("linear");
  });

  $('.preview').mouseleave(function() {
    $(".preview-img").hide();
  });

});
