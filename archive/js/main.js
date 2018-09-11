
$(document).ready(function() {





 $('.searchArea').click(function() {
 	$('.searchArea input').show().focus();
 });



 $('.sam1 button').click(function() {
 	$('.sam1').hide();
 	$('.sam2').show();
 	$('.sen').html("2 or 2");
 	$('.load').animate({"width":"100%"}, 300, "linear");
 });







});