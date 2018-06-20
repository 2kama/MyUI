<?php include('header.php'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<title>LMS | My Profile</title>



 <style>
          
        .pageTab:nth-child(2) {
           border: 2px solid #666;
        }
        .pageTab:nth-child(2) .tabing {
            background: #961c1d;
        }

        @media(max-width: 500px) {
            .pageTab:nth-child(2) {
               border: 0px solid transparent;
            }
            .pageTab:nth-child(2) .tabing {
                background: transparent;
            }
        }
  
  .col2 {
    display: none;
  }
</style>


<div class="wrapper">

  <div class="breadcrum">
    <div class="col8"></div>

    <div class="col4">
      <div class="headcrum">Customer Service Representative</div>
      <div class="bodycrum"><i class="material-icons">room</i>  <i>Marina, Lagos</i>
      </div>
      <div class="bodycrum"><i style="font-size: 12px;margin-top: 3px;">Staff ID: </i>  <b>001558</b>
      </div>
    </div>

  </div>


  <div class="searchArea">
    <div class="searchbox">
      <input type="text" placeholder="Search Courses" /> <i class="material-icons">search</i>
    </div>
  </div>
  




  <div class="content">
    
    <div class="col12" style="border:none;">
        
        <div class="long">
          <div class="line" style="border-bottom: 3px solid #ED347D;">My Examinations</div>

        </div>




        <div class="profile">
          
            <div class="row">
              

                <div class="col-md-12">
                    <div class="col-md-3 offset-md-9" style="">
                        <select name="" id="" class="form-control">
                          <option value="">All</option>
                          <option value="">Attempted</option>
                          <option value="">Unattempted</option>
                        </select>
                    </div>
                </div>




                <div class="col-md-12">

                  <div class="row">
                    
                        
                        <div class="col-md-6 examBlock">
                          <div class="col-md-12"><h6>Examination Title</h6></div>
                          <div class="row">
                              <div class="col-5">
                                 <div class="col-md-12"><b>End date:</b> Apr 29, 2018</div>
                                 <div class="col-md-12"><b>Max. attempt:</b> 3</div>

                                 <div class="col-md-12"><button class="btn btn1 plus">Launch</button></div>
                              </div>

                              <div class="col-7">
                                  <p>
                                    <b>Description:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna wirl aliqua. Up exlaborum incididunt.
                                  </p>
                              </div>
                          </div>
                      </div>





                      <div class="col-md-6 examBlock">
                          <div class="col-md-12"><h6>Examination Title</h6></div>
                          <div class="row">
                              <div class="col-5">
                                 <div class="col-md-12"><b>End date:</b> Apr 29, 2018</div>
                                 <div class="col-md-12"><b>Max. attempt:</b> 3</div>

                                 <div class="col-md-12"><button class="btn btn1 unplus">Done <i class="material-icons">checkmark</i></button></div>
                              </div>

                              <div class="col-7">
                                  <p>
                                    <b>Description:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna wirl aliqua. Up exlaborum incididunt.
                                  </p>
                              </div>
                          </div>
                      </div>



                      <div class="col-md-6 examBlock">
                          <div class="col-md-12"><h6>Examination Title</h6></div>
                          <div class="row">
                              <div class="col-5">
                                 <div class="col-md-12"><b>End date:</b> Apr 29, 2018</div>
                                 <div class="col-md-12"><b>Max. attempt:</b> 3</div>

                                 <div class="col-md-12"><button class="btn btn1 plus">Launch</button></div>
                              </div>

                              <div class="col-7">
                                  <p>
                                    <b>Description:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna wirl aliqua. Up exlaborum incididunt.
                                  </p>
                              </div>
                          </div>
                      </div>





                      <div class="col-md-6 examBlock">
                          <div class="col-md-12"><h6>Examination Title</h6></div>
                          <div class="row">
                              <div class="col-5">
                                 <div class="col-md-12"><b>End date:</b> Apr 29, 2018</div>
                                 <div class="col-md-12"><b>Max. attempt:</b> 3</div>

                                 <div class="col-md-12"><button class="btn btn1 unplus">Done <i class="material-icons">checkmark</i></button></div>
                              </div>

                              <div class="col-7">
                                  <p>
                                    <b>Description:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna wirl aliqua. Up exlaborum incididunt.
                                  </p>
                              </div>
                          </div>
                      </div>


                  </div>
                  
                      

                </div>




            </div>
            

        </div>



    </div>

  </div>








<style>
   .examBlock {
      font-size: 11px;
      padding: 30px;
   }
   .examBlock button {
      margin-top: 30px;
   }
   .plus {
      border: 1px solid #ED347D;
      color: #ED347D;
      background: #fff;
   }
   .unplus {
      border: 1px solid #ED347D;
      background: #ED347D;
      color: #fff;
   }
   .unplus i {
      color: #fff;
   }
   .examBlock h6 {
     color: #354C98
   }


   @media(max-width: 767px) {
      .examBlock {
         padding: 10px;
         margin-bottom: 20px;
      }
   }
</style>



<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


<?php include('footer.php'); ?>