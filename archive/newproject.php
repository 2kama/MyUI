<?php include("header1.php"); ?>



	<div class="container-fluid special-container" style="padding-top: 100px;padding-bottom: 20px;">
	
		<div class="row">


	
			<div class="col-md-6 offset-md-3 midWear">
				<h6>Create a new project</h6>
				<div class="progress">
					<div class="load"></div>
				</div>

				<p class="hint sen">1 of 2</p>


				<form action="">
                     
                     <div class="sam1">
                     	<label for="">Product name</label>
	                     <input type="text" class="form-control" placeholder="Enter product name">

	                     <label for="">Product type</label>
	                     <input type="text" class="form-control" placeholder="">

	                     <label for="">Technology</label>
	                     <input type="text" class="form-control" placeholder="">

	                     <label for="">Project manager</label>
	                     <input type="text" class="form-control" placeholder="">


	                     <button type="button" class="btn btn-block col-md-4 offset-md-8 mybutton">NEXT</button>
                     </div>


                     <div class="sam2">
                     	<label for="">Date created</label>
	                     <input type="date" class="form-control">

	                     <label for="">Keywords</label>
	                     <input type="text" class="form-control" placeholder="">

	                     <label for="">Description</label>
	                     <textarea class="form-control" name="" id="" cols="30" rows="10" style="height: 120px;"></textarea>


	                     <button type="submit" class="btn btn-block col-md-4 offset-md-8 mybutton">CREATE PROJECT</button>
                     </div>       
                     

                 </form>
			</div>


		</div>

	</div>





<style>
	p.hint {
		color: #f07b41;
		margin-top: 10px;
		font-size: 10px;
	}
</style>



<?php include("footer.php"); ?>