<?php include('header.php'); ?>
   <style>
   	  body {
   	  	 background: #f9f9f9;
   	  }
   </style>


				<div class="container first">
					
					<div class="row">
						
						<div class="col-md-12 calendar">Monday, Apr 28, 2018</div>

						<div class="col-md-12 pageHead">
							<div class="topic">
								<i class="material-icons">branding_watermark</i> Manage Projects
							</div>
						</div>

					</div>




					<div class="row">
						<div class="col-md-12 mainPage">New Project</div>
						<hr>
						
						<div class="col-md-6 offset-md-3">
							
							<form action="">
							
								<label for="">Project name:</label>
								<input type="text" class="form-control">

								<label for="">Project description:</label>
								<textarea name="" id="" cols="30" rows="10" style="height: 200px;" class="form-control"></textarea>

								<div class="row">
									<div class="col-md-6">
										<label for="">Bank Cut-off date</label>
										<div class="share">
											<input type="date" class="form-control"> <i class="material-icons">event</i>
										</div>
										
									</div>

									<div class="col-md-6">
										<label for="">Date of Obligors Notification:</label>
										<div class="share">
											<input type="date" class="form-control"> <i class="material-icons">event</i>
										</div>
										
									</div>

									<div class="col-md-6">
										<label for="">Date of Loan Purchase</label>
										<div class="share">
											<input type="date" class="form-control"> <i class="material-icons">event</i>
										</div>
										
									</div>
								</div>



								<div class="row">
									<button class="btn col-md-3 offset-md-9">Add Project</button>
								</div>

							</form>


							<div class="col-md-12 taky text-center">
								 <h4 class="col-md-12">Project name ABC has been successfully created</h4>
								 <button class="btn flowInfo">Add Obligor</button>
							</div>

						</div>
						
					</div>









				</div>



<?php include('footer.php'); ?>