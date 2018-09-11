<?php include("header1.php"); ?>



	<!-- Modal -->
	<div class="modal fade" id="nameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" style="padding-left: 50px;padding-right: 50px;">
	        	<div class="col-md-12 text-center">
	        		Change your name
	        	</div>

	        	<form action="">
	        		<label for="">First name</label>
	                <input type="text" class="form-control" placeholder="" value="Jhud">

	                <label for="">Last name</label>
	                <input type="text" class="form-control" placeholder="" value="Ejike">

	                <button class="btn btn-block col-md-3 offset-md-9 mybutton">SAVE</button>
	        	</form>
	      </div>
	    </div>
	  </div>
	</div>




	<!-- Modal -->
	<div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" style="padding-left: 50px;padding-right: 50px;">
	        	<div class="col-md-12 text-center">
	        		Change password
	        	</div>

	        	<form action="">
	        		<label for="">Old Password</label>
	                <input type="password" class="form-control" placeholder="*****">

	                <label for="">New Password</label>
	                <input type="password" class="form-control" placeholder="*****">

	                <label for="">Confirm Password</label>
	                <input type="password" class="form-control" placeholder="*****">

	                <button class="btn btn-block col-md-3 offset-md-9 mybutton">SAVE</button>
	        	</form>
	      </div>
	    </div>
	  </div>
	</div>





	<div class="container-fluid special-container" style="padding-top: 100px;padding-bottom: 20px;">
	
		<div class="row">


			<div class="col-md-10 offset-md-1">
				<h5 class="stat_H">Account Information</h5>
			</div>

			<div class="col-md-10 offset-md-1 midWear">
				

				<div class="row cal">
					<h6 class="stat_H col-12">Profile</h6>

					<div class="col-2 size-10">Photo:</div>
					<div class="col-10 size-10">
						<span class="avatar">JE</span>
						<p class="hint"><a href="javascript:;" data-toggle="modal" data-target="#nameModal">Change</a></p>
					</div>

					<div class="col-2 size-10">Name:</div>
					<div class="col-10 size-10">Jhud Ejike</div>

					<div class="col-2 size-10">Email:</div>
					<div class="col-10 size-10">Jokafor@sbsc.com</div>

					<div class="col-2 size-10">Password:</div>
					<div class="col-10 size-10">
						<p class="hint"><a href="javascript:;" style="margin-left: 0px;" data-toggle="modal" data-target="#passwordModal">Change password</a></p>
					</div>


				</div>
			</div>


		</div>

	</div>






<style>
	.midWear {
		 margin-top: 30px;
	}
	.stat_H.col-12 {
		 font-size: 15px;
		 margin-bottom: 20px;
	}
	span.avatar {
		float: left;
		margin-top: -5px;
	}
	p.hint a{
		margin-left: 20px;
	}
</style>
<?php include("footer.php"); ?>