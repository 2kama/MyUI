<?php include("header.php"); ?>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body text-center">
        
      
      <i class="material-icons" style="font-size: 60px;color:red;margin-top:40px;width:100%;margin-bottom:30px;">close</i>
      <h5 class="col-md-12">DELETE ORDER</h5>
      <p class="col-md-12" style="font-size:14px;margin-bottom: 30px;">Deleting this order would also delete order history , are you sure you would like to continue</p>
      
      
        <button type="button" class="btn" data-dismiss="modal" style="background:transparent;color:#4a4a4a;font-size:14px;">Close</button>
        <button type="button" class="btn" style="background:#707bea;color:#fff;font-size:14px;">Save changes</button>
      </div>
      
    </div>
  </div>
</div>

 <style>
  	nav.navbar {
  		 background: #e6e6e6;
  	}
  	body {
  		background: #fff;
  	}
  </style>




<div class="container-fluid" style="margin-top: 50px;padding:0;">


      <div class="row dental">

        <div class="col-12" style="background:#f5f5f5;">
            <div class="list-group container" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="fa fa-user"></i> Profile</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="material-icons">work</i>Orders</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><i class="material-icons">notifications</i>Notification</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="fa fa-sign-out"></i>Logout</a>
            </div>
        </div>

        <div class="col-12">
            <div class="tab-content container" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

                <h5>Profile</h5>

                <form action="" class="row">
                    <div class="col-md-5">
                         <label for="">Full name</label>
                         <input type="text" class="form-control">

                         <label for="">Email</label>
                         <input type="email" class="form-control">

                         <label for="">Old Password</label>
                         <input type="password" class="form-control">

                         <label for="">New Password</label>
                         <input type="password" class="form-control">

                         <label for="">Comfirm Password</label>
                         <input type="password" class="form-control">

                        <div class="row">
                             <button class="btn col-md-2 offset-md-10" style="background:#707bea;color:#fff;" >SAVE</button>
                        </div>
                         

                         
                    </div>
                    
                </form>

            </div>


            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

                 <h5>Orders</h5>

                 <div class="enough">
                     <table class="table table-striped" style="font-size:14px;">
                         <thead>
                             <tr>
                                 <th style="font-weight:normal;">ITEM</th>
                                 <th style="font-weight:normal;">DATE</th>
                                 <th style="font-weight:normal;">STATUS</th>
                                 <th style="font-weight:normal;">TOTAL (N)</th>
                                 <th style="font-weight:normal;">ACTION</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>Letter of comfirmation</td>
                                 <td>25 Oct 2018</td>
                                 <td>Purchased</td>
                                 <td>20,000.00</td>
                                 <td data-toggle="modal" data-target="#exampleModalLong" style="color:red;"><i class="material-icons">delete</i> Delete</td>
                             </tr>

                              <tr>
                                 <td>Letter of comfirmation</td>
                                 <td>25 Oct 2018</td>
                                 <td>Purchased</td>
                                 <td>20,000.00</td>
                                 <td style="color:red;"><i class="material-icons">delete</i> Delete</td>
                             </tr>

                              <tr>
                                 <td>Letter of comfirmation</td>
                                 <td>25 Oct 2018</td>
                                 <td>Purchased</td>
                                 <td>20,000.00</td>
                                 <td style="color:red;"><i class="material-icons">delete</i> Delete</td>
                             </tr>

                              <tr>
                                 <td>Letter of comfirmation</td>
                                 <td>25 Oct 2018</td>
                                 <td>Purchased</td>
                                 <td>20,000.00</td>
                                 <td style="color:red;"><i class="material-icons">delete</i> Delete</td>
                             </tr>

                              <tr>
                                 <td>Letter of comfirmation</td>
                                 <td>25 Oct 2018</td>
                                 <td>Purchased</td>
                                 <td>20,000.00</td>
                                 <td style="color:red;"><i class="material-icons">delete</i> Delete</td>
                             </tr>

                              <tr>
                                 <td>Letter of comfirmation</td>
                                 <td>25 Oct 2018</td>
                                 <td>Purchased</td>
                                 <td>20,000.00</td>
                                 <td style="color:red;"><i class="material-icons">delete</i> Delete</td>
                             </tr>

                              <tr>
                                 <td>Letter of comfirmation</td>
                                 <td>25 Oct 2018</td>
                                 <td>Purchased</td>
                                 <td>20,000.00</td>
                                 <td style="color:red;"><i class="material-icons">delete</i> Delete</td>
                             </tr>

                              <tr>
                                 <td>Letter of comfirmation</td>
                                 <td>25 Oct 2018</td>
                                 <td>Purchased</td>
                                 <td>20,000.00</td>
                                 <td style="color:red;"><i class="material-icons">delete</i> Delete</td>
                             </tr>
                         </tbody>
                     </table>
                 </div>

            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
            </div>
        </div>

    </div>


</div>









<?php include("footer.php"); ?>