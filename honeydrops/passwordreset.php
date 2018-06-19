<?php include("header.php"); ?>








   <div class="container-fluid" style="background: url('img/backback.png') no-repeat center center / cover; min-height: 140vh;">
   	
		<div class="row">
			

				<div class="col-md-4 offset-md-4">

					<div class="credential">
						
						<span>PASSWORD RESET</span>

                        <p style="text-align: left;">
                        	Please type in your new password below
                        </p>

						<div class="row" style="margin-top: 30px;">
							
								<div class="col-md-12">
								  <form action="">
									<label for="">New Password</label>
									<input type="password" class="form-control">

									<label for="">Comfirm New Password</label>
									<input type="password" class="form-control">

									<button class="btn col-md-4 offset-md-4">RESET</button>
								  </form>
								</div>
								

							
						</div>

					</div>
					

					
					

				</div>


		</div>


		<div class="container">
			
			<div class="row">
				
				<div class="col-md-4 offset-md-4">
					
					<div class="success">
						<i class="fa fa-check-circle"></i>

						<h5>Successful</h5>

						<p>Your Password has successfully been changed. You can now login with the new password.</p>


						<a href=""><button class="btn">GO TO LOGIN</button></a>
					</div>

				</div>

			</div>

		</div>


   </div>

		





<script>
	//deletable script

	$(document).ready(function() {

		$(".credential button").click(function() {
			$(".credential").hide();
			$('.success').show();
		});

	});
</script>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/popper.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>
</html>