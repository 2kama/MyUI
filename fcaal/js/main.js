

$(document).ready(function () {


	$('.drops .purse').append(' <i class="fa fa-plus open"></i><i class="fa fa-minus end"></i>');


    
   	 $('.drops').click(function() {
   	 	 $('.end').hide();
   	 	 $('.open').show();
   	 	 $('.dropped').animate({"height":"0px"}, 300, "linear");

   	 	 $('.end', this).show();
   	 	 $('.open', this).hide();


   	 	 var el = $('.dropped', this),
		    curHeight = el.height(),
		    autoHeight = el.css('height', 'auto').height();
		el.height(curHeight).animate({height: autoHeight}, 300);
   	 });



});