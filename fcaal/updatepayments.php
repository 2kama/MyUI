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
                                        <i class="fa fa-credit-card"></i> Recoveries
                                    </div>

                                    
                                    
                                </div>

                            </div>



                 </div>





                 

                <div class="container mishTab">
                    

                        <div class="col-12">
                            
                                
                                <div class="row static">


                                    <div class="col-md-6">

                                        <form action="">

                                             <div class="row">
                                                 <div class="col-md-12">
                                                     <label for="">Select Obligor</label>
                                                     <select name="" id="" class="form-control">
                                                         <option value="">Please select an Obligor</option>
                                                     </select>
                                                 </div>

                                                 <div class="col-md-7">
                                                     <label for="">Amount Paid</label>
                                                     <input type="number" class="form-control" placeholder="Enter Amount">
                                                 </div>

                                                 <div class="col-md-5">
                                                     <label for="">Payment Date</label>
                                                     <input type="date" class="form-control">
                                                 </div>

                                                 <div class="col-md-12">
                                                     <label for="">Trasaction Details <sub>(Kindly enter the description in your bank transaction alert)</sub></label>
                                                     <input type="text" class="form-control" placeholder="enter description">
                                                 </div>

                                                 <div class="col-md-12">
                                                     <label for="">Trasaction Remark </label>
                                                     <input type="text" class="form-control" placeholder="enter remark">
                                                 </div>

                                                 <div class="col-md-12">
                                                     <label for="">Upload proof of payment</label>
                                                    <label class="custom-file">
                                                    <span class="custom-file-control"></span>
                                                        <input type="file" id="file2" class="custom-file-input" onchange="$(this).prev().after().html($(this).val().split('\\').slice(-1)[0])">
                                                    
                                                    </label>
                                                 </div>

                                                
                                             </div>

                                             <div class="row">
                                                <button class="btn col-md-3 offset-md-9">Update</button>
                                            </div>

                                        </form>

                                    </div>

                                   

                                </div>

                          

                    </div>
                </div>


<style>

   
</style>

<script>
   $(document).ready(function() {
       
   });
</script>


<?php include('footer.php'); ?>

