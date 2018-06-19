<?php include("header.php"); ?>





<div class="container-fluid" style="padding-top: 80px;background: #f5f5f5;min-height: 100vh;">
	
<div class="container">
	<div class="row">
		
		<div class="col-md-3 proCap">

			<div class="row">
				<div class="col-md-6">
					<img src="img/profile.png" class="mx-auto d-block profilePic" />
				</div>
				<div class="col-md-6" style="padding: 7px;padding-top: 15px;">
					<span>Jhud Ejike</span>
					<p><a href="#">change membership</a></p>
				</div>

				<button class="btn">ADD A SERVICE</button>
			</div>
			
		</div>

		<div class="col-md-9 proTap">
			
				
				<h5 style="margin-top: 20px;font-weight: normal;">PROFILE SETTINGS</h5>

				<div class="col-md-12">
					
					<form>
						<div class="col-md-12">
							<div class="col-md-6">
								  <div class="form-group">
								    <label for="">First Name</label>
								    <input type="text" class="form-control" placeholder="" disabled value="Jhud">
								  </div>

								  <div class="form-group">
								    <label for="">Last Name</label>
								    <input type="text" class="form-control" placeholder="" >
								  </div>
							</div>
							<div class="col-md-6">
								
							</div>
						</div>


						<div class="col-md-12">
							<div class="col-md-6">
								 <div class="form-group">
								    <label for="">Email Address</label>
								    <input type="email" class="form-control" placeholder="" disabled value="youremail@email.com">
								  </div>

								  <div class="form-group">
								    <label for="">Old password</label>
								    <input type="password" class="form-control" placeholder="" >
								  </div>

								  <div class="form-group">
								    <label for="">New password</label>
								    <input type="password" class="form-control" placeholder="" >
								  </div>
							</div>
							<div class="col-md-6"></div>
						</div>
					  
					  	<div class="col-md-4 offset-md-4">
					  		<button type="submit" class="btn" style="background: #6cd852;color: #fff;">SAVE SETTINGS</button>
					  	</div>
					  
					</form>

				</div>


		</div>

	</div>
</div>
</div>



<?php include("footer.php"); ?>