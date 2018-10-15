

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
		



		$('.stage').click(function() {
			 $(this).toggleClass("show");

		});


		$('.putout').click(function() {
			$('.menuTab').toggleClass("showed");
		});


		$('#file2').change(() => {
			$(this).next().after().html($(this).val().split('\\').slice(-1)[0]);
			$(this).next().after().css("color","#ccc");
			$(this).next().after().css("border","1px solid #ebebf2");
			$(this).next().after().css("width","70%");
			$(this).next().after().css("padding","7px 20px");
			$(this).next().after().css("float","left");
			$(this).next().after().css("border-left","none");
			$(this).next().after().css("background","#fff");
			$(this).next().after().css("margin-left","-5px");
			$(this).next().after().css("margin-top","-1px");
			$(this).next().after().css("border-radius","4px");
		});


		$('.first, .mainPage, .mishTab').click(() => {
				$('.poppingUp').removeClass("closedDown");
		});

		$('.notynoty').click(() => {
			$('.notyBox').toggleClass("closedDown");
			$('.msgBox').removeClass("closedDown");
			$('.menuBox').removeClass("closedDown");
			// $('.notyBox').toggleClass("opened");
		});

		$('.msgmsg').click(() => {
			$('.msgBox').toggleClass("closedDown");
			$('.notyBox').removeClass("closedDown");
			$('.menuBox').removeClass("closedDown");
			// $('.msgBox').toggleClass("opened");
		});

		$('.linklink').click(() => {
			$('.menuBox').toggleClass("closedDown");
			$('.msgBox').removeClass("closedDown");
			$('.notyBox').removeClass("closedDown");
			// $('.menuBox').toggleClass("opened");
		});



});