<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet"> 
    
    <script src="js/jquery.js" crossorigin="anonymous"></script>



    <title>Legal Concierge</title>
  </head>
  <body>


    


    <nav class="navbar fixed-top navbar-expand-lg navbar-light mishnav">
      <div class="container">
        <a class="navbar-brand" href="#">
            LEGAL CONCEIRGE
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          
          <form class="form-inline mr-auto my-2 my-lg-0">
            
          </form>


          <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item mynav active">
              <a class="nav-link" href="resources">Legal Documents</a>
            </li>
            <li class="nav-item mynav active">
              <a class="nav-link" href="#">How it works</a>
            </li>
            <li class="nav-item mynav active">
              <a class="nav-link" href="JavaScript:;" data-toggle="modal" data-target="#loginModal"> Login</a>
            </li>
            <li class="nav-item mynav">
               <button type="button" data-toggle="modal" data-target="#signupModal" class="btn btn-warning">REGISTER</button>
            </li>

            <li class="nav-item mynav dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Hi Jhud
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="Javascript:;">JYUD IYKE</a>
                  <a class="dropdown-item" href="settings">profile settings</a>
                  <a class="dropdown-item" href="Javascript:;" data-toggle="modal" data-target="#deleteModal">delete account</a>
                  <a class="dropdown-item" href="Javascript:;">logout</a>
                </div>
            </li>
          </ul>
        </div>
      
        </div>
      </nav>




<div class="modal fade col-md-6 offset-md-3" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete luxury lawyer’s account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         account icluding all your publicatons and statistics will be gone. they cannot be retrived. please 
click the cancel button to discard
      </div>
      <div class="modal-footer">
        <button type="button" class="btn closeDia" data-dismiss="modal">Cancel</button>
        <button type="button" data-toggle="modal" data-target="#deletedModal" data-dismiss="modal" class="btn actionDia">Delete</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade col-md-6 offset-md-3" id="deletedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        You have successfully deleted luxury lawyer

        <i class="fa fa-trash text-center" style="font-size: 50px;width: 100%; margin-top: 40px;margin-bottom: 30px; color:#63438e;"></i>
      </div>
      
    </div>
  </div>
</div>