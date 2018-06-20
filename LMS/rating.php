<div class="startExam" style="height: auto;">
                
                   <div class="rating">
                       <div class="topper">Tell us what you think about the course</div>
                       <div class="winning">Rate</div>
                       <div class="ratingss">
                          <input type="number" value="0" hidden class="starB">
                           <i class="material-icons som1">star</i>
                           <i class="material-icons som2">star</i>
                           <i class="material-icons som3">star</i>
                           <i class="material-icons som4">star</i>
                           <i class="material-icons som5">star</i>
                       </div>
                       <div class="reviewBox">
                         <textarea name="" id="" cols="30" rows="10" placeholder="Review"></textarea>
                         <button class="btn">Submit</button>
                       </div>
                   </div>

              </div>











        <style>
          .rating {
     width: 50%;
     margin-left: 25%;
  }
  .topper {
     width: 100%;
     box-sizing: border-box;
     padding: 15px;
     font-weight: bold;
     border-bottom: 1px solid #4286f4;
     font-size: 17px;
     color: #4286f4;
  }
  .winning {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      text-align: center;
  }
  .ratingss {
     width: 100%;
     box-sizing: border-box;
     padding: 10px 20% 10px 20%;
     background: #4286f4;
  }
  .ratingss i {
      color: #fff;
      font-size: 27px;
      width: 18%;
      text-align: center;
      cursor: pointer;
  }
  .ratingss i:hover {
      color: #F4CC00;
  }
  .reviewBox {
     margin-top: 20px;
     box-sizing: border-box;
     padding: 0 10% 0 10%;
  }
  .reviewBox textarea {
      height: 100px;
      font-size: 14px;
  }
  .reviewBox button {
     float: right;
     background: #4286f4;
     color: #fff;
  }


  @media (max-width: 480px) {
      .rating {
       width: 100%;
       margin-left: 0%;
    }
  }

  
        </style>






  
<script>
    $(document).ready(function() {

          $('.som1').click(function() {
              $('.som1').css("color","#f4cc00");
              $('.som2, .som3, .som4, .som5').css("color","#fff");
              $('.starB').val("1");
          });

           $('.som2').click(function() {
              $('.som1, .som2').css("color","#f4cc00");
              $('.som3, .som4, .som5').css("color","#fff");
              $('.starB').val("2");
          });


           $('.som3').click(function() {
              $('.som1, .som2, .som3').css("color","#f4cc00");
              $('.som4, .som5').css("color","#fff");
              $('.starB').val("3");
          });




           $('.som4').click(function() {
              $('.som1, .som2, .som3, .som4').css("color","#f4cc00");
              $(' .som5').css("color","#fff");
              $('.starB').val("4");
          });


           $('.som5').click(function() {
              $('.som1, .som2, .som3, .som4, .som5').css("color","#f4cc00");
              $('.starB').val("5");
          });


    });
</script>