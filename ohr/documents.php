<?php include("header.php"); ?>





<script src="js/turn.js"></script>

<script type="text/javascript"> 
var html5_audiotypes={ //define list of audio file extensions
"mp3": "audio/mpeg",
"ogg": "audio/ogg",
"wav": "audio/wav",
}

function createsoundbite(sound){
var html5audio=document.createElement('audio')
if (html5audio.canPlayType){ //check support for HTML5 audio
    for (var i=0; i<arguments.length; i++){
        var sourceel=document.createElement('source')
        sourceel.setAttribute('src', arguments[i])
        if (arguments[i].match(/\.(\w+)$/i))
            sourceel.setAttribute('type', html5_audiotypes[RegExp.$1])
        html5audio.appendChild(sourceel)
    }
    html5audio.load()
    html5audio.playclip=function(){
        html5audio.pause()
        html5audio.currentTime=0
        html5audio.play()
    }
    return html5audio
}
else{
    return {playclip:function(){throw new Error("Your browser doesn't support HTML5 audio unfortunately")}}
    }
}
//Initialize sound clips with 1 fallback file each:
var flip=createsoundbite("/wp-content/uploads/media/flip.ogg", "/wp-content/uploads/media/flip.mp3","/wp-content/uploads/media/flip.wav")
</script>

<script type="text/javascript">

$(document).ready(function(){

	$('#list').turn({

		acceleration: true,
		display:'double',
		when:{
			turning:function(){
				flip.playclip();
			}
		}
	});




$(window).bind('keydown', function(e){
		
		if (e.keyCode == 37){
			$('#list').turn('previous');
		}
		else if (e.keyCode==39){
			$('#list').turn('next');
		}

	});


});
</script>  









	
  <style>
  	nav.navbar {
  		 background: #e6e6e6;
  	}
  	body {
  		background: url('img/wood.png') no-repeat center center / cover;
  	}
  </style>




  <div class="container-fluid breadcrum" style="margin-top: 50px;">
   	  <div class="container" style="color: #fff;">
   	  	   <a href="" style="color: #fff;">Home</a> | <a href="" style="color: #fff;">Legal document</a> 
   	  </div>
        
   	</div>


<div class="container">
	<div class="row" style="padding: 50px;padding-top: 0px;">
		

			<div id="list" style="margin: 0 auto;">
				<div>
					<ol>
						<li><a href="">One funny document like this</a></li>
						<li><a href="">Another funny document</a></li>
						<li><a href="">Once again...it's funny</a></li>
					</ol>
					
					
					
				</div>
				<div>Page2</div>
				<div>Page3</div>
				<div>Page4</div>
				<div>Page5</div>
				<div>Page6</div>
				<div>Page7</div>
				<div>Page8</div>
				<div>Page9</div>
				<div>Page10</div>
				<div>Page11</div>
				<div>Page12</div>
				<div>Page13</div>
				<div>Page14</div>
				<div>Page15</div>
				<div>Page16</div>
				<div>Page17</div>
				<div>Page18</div>
				<div>Page19</div>
				<div>Page20</div>
			</div>

	</div>
</div>












<?php include("footer.php");