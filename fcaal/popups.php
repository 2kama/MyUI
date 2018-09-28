<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popups</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
   
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="css/animate.css">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet"> 
    
    <script src="js/jquery.js" crossorigin="anonymous"></script>
</head>
<body>
    

    <div class="container">
        <div class="row">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                    Litigation popup
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="row">
                                <form action="" class="col-md-12">
                                    <div class="col-md-12">
                                        <label for="">Judgement sum</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Judgement</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn float-right">&emsp;Add&emsp;</button>
                                    </div>
                                </form>
                            </div>

                    </div>
                    
                    </div>
                </div>
                </div>








                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Bulk upload</button>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-body" style="padding:8%;">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 uploadBox text-center">
                                            <i class="fa fa-cloud-upload"></i>
                                            <p>Drag and Drop files here to upload <br>or </p>
                                            <button class="btn btn-primary">Browse</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">

                                    <div class="col-md-12 uploads">
                                        <div class="round text-center">100%</div>
                                        <span>
                                            <p>FileItem1.xlsz</p>
                                            <sup>54mb/54mb</sup>
                                        </span>
                                        <i class="fa fa-check text-primary float-right"></i>
                                    </div>

                                    <div class="col-md-12 uploads">
                                        <div class="round text-center">100%</div>
                                        <span>
                                            <p>FileItem1.xlsz</p>
                                            <sup>54mb/54mb</sup>
                                        </span>
                                        <i class="fa fa-check text-primary float-right"></i>
                                    </div>

                                    <div class="col-md-12 uploads">
                                        <div class="round text-center">100%</div>
                                        <span>
                                            <p>FileItem1.xlsz</p>
                                            <sup>54mb/54mb</sup>
                                        </span>
                                        <i class="fa fa-check text-primary float-right"></i>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
                </div>










        </div>
    </div>





<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/popper.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/wow.js"></script>
    <script src="js/main.js"></script>

    
    <script>
        new WOW().init();
    </script>
</body>
</html>