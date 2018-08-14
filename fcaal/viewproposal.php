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
                                        <i class="fa fa-percent"></i> Manage Proposals
                                    </div>

                                    
                                </div>

                            </div>



                 </div>





                 

                <div class="container mishTab">
                    <div class="row">
                        <div class="col-12">
                            <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" style="width:auto;" id="list-loan-list" data-toggle="list" href="#list-loan" role="tab" aria-controls="loan"> Details</a>
                            <a class="list-group-item list-group-item-action" style="width:auto;" id="list-collateral-list" data-toggle="list" href="#list-collateral" role="tab" aria-controls="collateral">Collateral</a>
                            <a class="list-group-item list-group-item-action" style="width:auto;" id="list-bank-list" data-toggle="list" href="#list-bank" role="tab" aria-controls="bank">Bank Statement</a>
                            
                            </div>
                            <button class="btn curve goback prop"><i class="fa fa-back"></i> GO BACK</button>
                            <button class="btn curve flowBtn2 prop" data-toggle="modal" data-target=".bd-example-modal-lg">Analyze Proposal</button>
                        </div>
                        <div class="col-12">
                            <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="list-loan" role="tabpanel" aria-labelledby="list-loan-list">
                                
                                <div class="row static">
                                     
                                     <div class="col-md-3">Obligor name:</div>
                                     <div class="col-md-5">ABU HALI PETROLEUM NIGERIA LTD</div>
                                     <div class="col-md-4"></div>

                                     <div class="col-md-3">DRA  name:</div>
                                     <div class="col-md-5">AYINLA</div>
                                     <div class="col-md-4"></div>

                                     <div class="col-md-3">Current balance:</div>
                                     <div class="col-md-5">23,408,220.71</div>
                                     <div class="col-md-4"></div>
                                
                                </div>


                                <div class="row">

                                <!--- inbox -->
                                    <div class="col-md-10 msgTab inbox">
                                        <div class="row">
                                            <div class="col-12 head">
                                                 <i class="fa fa-plus"></i> <i class="fa fa-minus" style="display:none;"></i>
                                                 <span>Obligor Proposal</span>
                                            </div>
                                            <div class="col-12 oblig">
                                                <div class="row static" style="margin: 0;">
                                                    <div class="col-md-12" style="text-align:right;">Jul 05,  2:35pm</div>

                                                    <div class="col-md-4">Proposed Amount:</div>
                                                    <div class="col-md-7">8,000,000 </div>

                                                    <div class="col-md-4">Proposed Payment Plan:</div>
                                                    <div class="col-md-7">Monthly </div>

                                                    <div class="col-md-4">Start Date:</div>
                                                    <div class="col-md-7">31/07/2018 </div>

                                                    <div class="col-md-4">End Date:</div>
                                                    <div class="col-md-7">31/01/2019 </div>

                                                    <div class="col-md-4">Instalment Payment</div>
                                                    <div class="col-md-7">1,333,333.3</div>

                                                    <hr>

                                                    <div class="col-md-4">Outstanding Balance</div>
                                                    <div class="col-md-7">---</div>

                                                    <form action="">
                                                        
                                                            <div class="col-md-4">Additional remark:</div>
                                                            <div class="col-md-12">
                                                                
                                                                <textarea name="" id="" cols="30" rows="10" style="height:100px;" class="form-control"></textarea>
                                                                <button type="button" class="btn flowDel">Counter proposal</button>
                                                                <button type="submit" class="btn success" >Approve Proposal</button>
                                                            </div>
                                                        
                                                    </form>
                                                    





                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        <!-- end of inbox -->




                                        <!--- outbox -->
                                    <div class="col-md-10 msgTab outbox">
                                        <div class="row">
                                            <div class="col-12 head">
                                                 <i class="fa fa-plus"></i> <i class="fa fa-minus" style="display:none;"></i>
                                                 <span>Counter Proposal</span>
                                            </div>
                                            <div class="col-12 oblig">
                                                <div class="row static" style="margin: 0;">
                                                    <div class="col-md-12" style="text-align:right;">Jul 05,  2:35pm</div>

                                                    <div class="col-md-4">Counter Amount:</div>
                                                    <div class="col-md-5"><input type="number" class="form-control"> </div>

                                                    <div class="col-md-4">Payment Plan:</div>
                                                    <div class="col-md-5">
                                                        <select name="" id="" class="form-control">
                                                            <option value=""></option>
                                                            <option value=""></option>
                                                        </select> 
                                                    </div>

                                                    <div class="col-md-4">Frequency</div>
                                                    <div class="col-md-5">
                                                        <select name="" id="" class="form-control">
                                                            <option value=""></option>
                                                            <option value=""></option>
                                                        </select> 
                                                    </div>

                                                    <div class="col-md-4">Start Date:</div>
                                                    <div class="col-md-5"><input type="date" class="form-control">  </div>

                                                    <div class="col-md-4">End Date:</div>
                                                    <div class="col-md-5"><input type="date" class="form-control">  </div>

                                                    <div class="col-md-4">Instalment amount</div>
                                                    <div class="col-md-5"><input type="date" class="form-control"> </div>

                                                    <div class="col-md-12 row">
                                                        <div class="col-md-10"><hr style="width: 100%;background: #4372B8;margin: 0;margin-top: 10px;"></div>
                                                        <div class="col-md-2"><a href="#" style="font-size: 12px;">+Add more</a></div>
                                                    </div>

                                                    <div class="col-md-4">Outstanding Balance</div>
                                                    <div class="col-md-5"></div>

                                                    <form action="">
                                                        
                                                            <div class="col-md-4">Additional remark:</div>
                                                            <div class="col-md-12">
                                                                
                                                                <textarea name="" id="" cols="30" rows="10" style="height:100px;" class="form-control"></textarea>
                                                                <button type="button" class="btn flowDel"> &emsp; Clear &emsp; </button>
                                                                <button type="submit" class="btn success"> &emsp; Send &emsp; </button>
                                                            </div>
                                                        
                                                    </form>
                                                    





                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        <!-- end of outbox -->











                                </div>

                            </div>


                            <div class="tab-pane fade" id="list-collateral" role="tabpanel" aria-labelledby="list-collateral-list">

                                <div class="row">
                                    <div class="col-md-12 superGreen">
                                    <div class="handHead">Collateral/Security Details</div>
                                    <div class="handBody">
                                        <p class="smallBody">Legal Mortgage over proeprty located at plot 1760 jimmy carter street asokoro, abuja c of o FCT/ABU/PL/323 valued at 975M FSV.</p>
                                        <p class="smallBody">LM over property located at plot 909 cadesr=tral zone AO3 Aguta close area 11 Garki Abuja covered with c of o No. FCT/ABU/CR-586 valued at N675M FSV.</p>
                                        
                                        
                                        <div class="row">
                                            <div class="col-md-3 water text-center">
                                                <div class="handHead">Open Market Value of Security</div>
                                                <div class="handBody">
                                                    <p class="bigBody">₦ 5,997,765,375.00</p>
                                                </div>
                                            </div>

                                            <div class="col-md-3 water text-center">
                                                <div class="handHead">Forced Sale Value of Security</div>
                                                <div class="handBody">
                                                    <p class="bigBody">₦ 3,685,000,000.00</p>
                                                </div>
                                            </div>

                                            <div class="col-md-3 water text-center">
                                                <div class="handHead">Current Status of Collateral</div>
                                                <div class="handBody">
                                                    <p class="bigBody">HELD</p>
                                                </div>
                                            </div>

                                            <div class="col-md-3 water text-center">
                                                <div class="handHead">Current Class</div>
                                                <div class="handBody">
                                                    <p class="bigBody">A</p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>





                                </div>


                                <div class="row">

                                        <label for="">Valuation report</label>
                                        <div class="col-md-12 text-center bg-white" style="padding:20px;border:1px solid #d2d2d2;">
                                            No data entry
                                        </div>

                                </div>

                                <div class="row comments">

                                    <div class="col-md-6">
                                        <form action="">
                                            <label for="">Comments</label>
                                            <p>Add your comment below if there's any.</p>

                                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                            <button class="btn" style="width:50%;">Submit</button>
                                        </form>
                                    </div>  

                                </div>
                                

                            </div>

                           

                            <div class="tab-pane fade" id="list-bank" role="tabpanel" aria-labelledby="list-bank-list">
                                <div class="row" style="padding: 20px;">
                                
                                        <div class="enough">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="bg-white">Actual Cash Inflow</td>
                                                        <td class="bg-secondary">₦1,227,205.86</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-white">Actual Cash Outflow</td>
                                                        <td class="bg-secondary">₦44,955,944.04</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-white">Unpaid Principal</td>
                                                        <td class="bg-secondary"> - ₦16,465,331.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-white">Interest</td>
                                                        <td class="bg-secondary"> - ₦69,465,331.50</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-white">Penal Charges</td>
                                                        <td class="bg-secondary">  - ₦126,039.11</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-primary">Total Balance as per Bank statement &emsp; &emsp; &emsp; &emsp;</td>
                                                        <td class="bg-secondary">  - ₦23,408,220.71</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                
                                </div>



                                <div class="row comments">

                                    <div class="col-md-6">
                                        <form action="">
                                            <label for="">Comments</label>
                                            <p>Add your comment below if there's any.</p>

                                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                            <button class="btn" style="width:50%;">Submit</button>
                                        </form>
                                    </div>  

                                    </div>
                            </div>

                            
                            </div>
                        </div>
                    </div>
                </div>




<script>
   $(document).ready(function() {
       $('.inbox .head').click(function() {
           $('.inbox').toggleClass("popOpen");
           $('.inbox .head i').toggle();
       });

       $('.outbox .head').click(function() {
           $('.outbox').toggleClass("popOpen");
           $('.outbox .head i').toggle();
       });
   });
</script>


<?php include('footer.php'); ?>





<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                     <div class="container">
                        <div class="row analyze">

                            <div class="col-md-12">
                                <div class="row sam1">
                                    <div class="col-md-5">Current Outstanding Balance</div>
                                    <div class="col-md-7"> ₦ 23,408,220.71</div>
                                    <div class="col-md-5">Obligor Proposal</div>
                                    <div class="col-md-7"> ₦ 7,765,375.00 </div>
                                </div>
                            </div>

                        </div>

                        <div class="row analyze">
                            <label for="" class="text-primary">Choose Analysis Option</label>
                            <div class="col-md-12">

                                <label class="containerss col-md-4"> Profitability
                                    <input type="radio" name="won">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="containerss  col-md-4"> 60% of current balance
                                    <input type="radio" name="won">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="containerss col-md-4"> Tresurery bills
                                    <input type="radio" name="won">
                                    <span class="checkmark"></span>
                                </label>

                            </div>
                        </div>

                        <form class="row analyze">
                            <div class="col-md-6">
                                <label for="">Litigation Cost</label>
                                <input type="number" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="">Commission Cost</label>
                                <input type="number" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="">Interest Cost</label>
                                <input type="number" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="">Purchased/Implied Cost</label>
                                <input type="number" class="form-control">
                            </div>

                            <div class="col-md-12 row">
                                <div class="col-md-10"><hr style="width: 100%;background: #4372B8;margin: 0;margin-top: 10px;"></div>
                                <div class="col-md-2"><a href="#" style="font-size: 12px;">Edit Values</a></div>
                             </div>

                             <div class="col-md-8">
                                <label for="">Total Cost</label>
                                <input type="number" class="form-control">
                             </div>

                             <div class="col-md-8">
                                <label for="">Mark-up</label>
                                <input type="number" class="form-control" placeholder="Default Multiplier - 15">
                             </div>

                             <div class="col-md-4">
                                 <label for="">Multiplier</label>
                                 <input type="number" class="form-control" value="15">
                             </div>

                             <div class="col-md-8">
                                <label for="">Real Cost</label>
                                <input type="number" class="form-control">
                             </div>

                             <div class="col-md-6">
                                 <label for=""></label>
                                 <input type="text" class="form-control">
                             </div>
                             <div class="col-md-3">
                                 <button class="btn" style="margin-top: 23px;">Compute Profitability</button>
                             </div>


                        </form>

                     </div>
                        


                </div>
            </div>
        </div>