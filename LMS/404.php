<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/something">
  <script src="js/jquery.js"></script>
</head>

<body style="min-height: 100vh;">




	 <div class="fourohfour">
	 	 <img src="img/404.png" alt="">

	 	 <div class="bigNum">Page Not Found!</div>
	 	 <div class="smallNum">Sorry the page you were looking for doesn't exist.</div>
	 	 <button class="btn">GO BACK</button>
	 </div>





<footer>
  <div class="foot">&copy;2017 - LEARNING MANAGEMENT SYSTEM</div>
  <div class="power">
  
  </div>
</footer>




<script src="js/main.js"></script>


<style>
	.fourohfour button {
		padding: 15px;
		width: 150px;
		color: #ab192d;
		background: transparent;
		border: 2px solid #ab192d;
		margin-left: 46%;

	}
	.fourohfour {
		width: 100%;
		position: fixed;
		height: 100vh;
		background: #f2f2f2;
		float: left;
		z-index: 10;
	}
	.fourohfour img {
		 widows: 30%;
		 margin-left: 28%;
		 margin-top: 80px;
		 float: left;
	}
	.bigNum {
		 width: 100%;
		 font-weight: bold;
		 font-size: 30px;
		 text-align: center;
		 float: left;
		 margin-top: -100px;
		 box-sizing: border-box;
		 padding-left: 5%;
	}
	.smallNum {
		width: 100%;
		 font-weight: bold;
		 font-size: 20px;
		 text-align: center;
		 float: left;
		 margin-top: -60px;
		 box-sizing: border-box;
		 padding-left: 5%;
	}



	@media (max-width: 600px) {
		.fourohfour img {
			width: 59%;
			margin-left: 20%;
		}
		.bigNum {
			 margin-top: -30px;
		}
		.smallNum {
			 margin-top: 0px;
		}
		.fourohfour button {
			margin-top: 50px;
			margin-left: 40%;
		}
	}


	@media (max-width: 400px) {
		.fourohfour button {
			 margin-left: 30%;
		}
	}
</style>

</body>

</html>