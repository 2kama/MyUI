<?php include('header.php'); ?>

<title>LMS | Course Room</title>

<style>
  .menuTab {
    display: none;
  }
  .col2 {
    display: none;
  }
</style>



<div class="wrapper" style="margin-top: 40px;">


  
  <div class="videoTab">

    <div class="timerr">
           00:00
       </div>

       <style>
          .timerr {
             padding: 10px;
             background: #333;
             color: red;
             border-radius: 7px;
             position: fixed;
             right: 50px;
             top: 150px;
             z-index: 130;
             font-size: 27px;

          }
       </style>


        <!-- video section -->
         <div class="col99 sanya">

          <div class="videoTopic">
              <div class="topicBtm"><b>FINANCE FUNDAMENTALS:</b> Financial Planning and Budgeting</div>
          </div>

         <!-- <div class="hightlight">
                 <div class="vTopic">Do you like this course?</div>

                 <div class="vLike">
                    <i class="material-icons">thumb_up</i> <span>32</span>
                    <i class="material-icons">thumb_down</i> <span>3</span>
                 </div>
                 
              </div> -->


  <style>
    .hightlight {
      background: #0091d9;
      color: #fff;
      height: 50px;
      padding-top: 15px;
    }
    .vTopic {
      font-size: 17px;
    }
    .vLike span{
         font-size: 17px;
    }
    .vLike i {
      margin-left: 50px;
       font-size: 17px;
    }
  </style>



              
         <video src="videos/test.mp4" controls></video>

              

      
      <div class="addComment" style="float: left;width: auto;"><span style="color:#222;">View Video transscript</span><i class="material-icons" style="color:#222;">content_copy</i></div>
      <div class="addComment" style="float: left;width: auto;"><span style="color: #E11DD2;">Contribute to this course</span><i class="material-icons pink">comments</i> &emsp;  &emsp; </div>

        
      <button class="btnPink btnHerd"><span>Mark as complete</span><i class="material-icons">check</i></button>
      
      

         </div>

        <!-- end of video section -->




        <!-- text section -->
         <div class="col99">

          <div class="videoTopic">
              <div class="topicTop">FINANCE FUNDAMENTALS:</div>
              <div class="topicBtm">Financial Planning and Budgeting</div>
          </div>



          <div class="hightlight">
                 <div class="vTopic">Do you like this course?</div>

                 <div class="vLike">
                    <i class="material-icons">thumb_up</i> <span>32</span>
                    <i class="material-icons">thumb_down</i> <span>3</span>
                 </div>
                 
              </div>

              
              <div class="viewArea">
                 <img src="img/slide.png" alt="">
              </div>



      
      
      <div class="addComment" style="float: left;width: auto;"><span style="color: #E11DD2;">Contribute to this course</span><i class="material-icons pink">comments</i> &emsp;  &emsp; </div>

        
      <button class="btnPink btnHerd"><span>Mark as complete</span><i class="material-icons">check</i></button>
      
      

         </div>

        <!-- end of text section -->


        <style>
  
  .startExam button {
    margin-top: 30px;
  }
  .nid {
    width: 100%;
    text-align: center;
  }
  .nid i {
     width: 100%;
     text-align: center;
  }
  .nid span {
    width: 100%;
    text-align: center;
    margin-top: 10px;
  }
  .startExam p {
    margin-top: 27px;
    float: left;

  }
  .startExam {
    z-index: 100;
    background: #fff;
    width: 100%;
    margin-top: 20px;
    box-sizing: border-box;
    padding: 4%;
    font-size: 14px;
  }
  .startExam h2{
    width: 100%;
    text-align: center;
    color: #0091d9;
    margin-bottom: 30px;
  }


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



        <!-- text section -->
         <div class="col99 show">

          <div class="videoTopic">
              <div class="topicTop">FINANCE FUNDAMENTALS:</div>
              <div class="topicBtm">Financial Planning and Budgeting</div>
          </div>



          <div class="hightlight">
                 <div class="vTopic">Do you like this course?</div>

                 <div class="vLike">
                    <i class="material-icons">thumb_up</i> <span>32</span>
                    <i class="material-icons">thumb_down</i> <span>3</span>
                 </div>
                 
              </div>

              
              <div class="viewArea">


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

                <div class="startExam" style="display: none;">
    <h2>Exam Title goes here</h2>

    <div class="col33">
      <div class="nid" style="color:#0091d9;">
        <i class="material-icons">alarm</i> Duration
      </div>
      <div class="nid">
        <span>00:45 mins</span>
      </div>
      
    </div>


    <div class="col33">
      <div class="nid" style="color: #00d200;">
        <i class="material-icons">check</i> Pass Grade
      </div>
      <div class="nid">
        <span>30%</span>
      </div>
    </div>


    <div class="col33">
      <div class="nid" style="color: #ab192d;">
        <i class="material-icons">warning</i> Due date
      </div>
      <div class="nid">
        <span>April 4, 2018</span>
      </div>
    </div>


    <p>
      <b>INTRODUCTIONS:</b> <BR><BR>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
    </p>


    <button class="btn btnLarge btnBlue">Start</button>


  </div>




                 
                  <div class="quizArea">
                      
                      <div class="barb">
                         <span>Course Quiz</span>
                         <strong>?</strong>
                         <p>Take this short quiz to check what you have learned!</p>

                         <center><button class="btn btnMedium btnBlue">Start Quiz</button></center>   
                      </div>

                      
                      <div class="sest quesSelect">
                         <div class="nani">
                            Course Quiz
                         </div>

                         <sup>Question 1 of 4</sup>
                         <span>What is [Our Company]’s brand promise?</span>

                         <label for=""><input type="radio" name="task1" id=""> Option 1</label>
                         <label for=""><input type="radio" name="task1" id=""> Option 2</label>
                         <label for=""><input type="radio" name="task1" id=""> Option 3</label>
                         <label for=""><input type="radio" name="task1" id=""> Option 4</label>

                         <textarea name="" id="" cols="30" rows="10" placeholder="Type your answer here..."></textarea>

                         <div class="correcty">Innovate and Experiment</div>
                         <div class="wrong">Mentor and Sant</div>
                         <div class="pestImg"><i class="material-icons" style="color: green;">check</i> <i class="material-icons" style="color: #f53131;">close</i> This is correct or Incorrect</div>

                         <button class="btnBlue btnMedium">Submit</button>



                         <div class="resultP">
                             <div class="clamp">
                                <div class="leftC">You scored:</div>
                                <div class="rightC">40</div>
                             </div>
                             <div class="clamp">
                                <div class="leftC">Max. score:</div>
                                <div class="rightC">40</div>
                             </div>
                             <div class="clamp">
                                <div class="leftC">Correct Questions:</div>
                                <div class="rightC">2</div>
                             </div>
                             <div class="clamp">
                                <div class="leftC">Total Questions:</div>
                                <div class="rightC">2</div>
                             </div>
                             <div class="clamp">
                                <div class="leftC">Accuracy:</div>
                                <div class="rightC">100%</div>
                             </div>
                             <div class="clamp">
                                <div class="leftC">Attempt(s):</div>
                                <div class="rightC">1</div>
                             </div>
                         </div>

                         <div class="praise">
                            Congratulations, you passed the quiz!
                         </div>


                      </div>
                      <div class="botm">
                          <button class="btn btnMedium btnBlack">Next Question</button>
                      </div>


                  </div>

              </div>

<style>
  .praise {
     float: left;
     width: 100%;
     text-align: center;
     font-size: 16px;
     font-weight: bold;
     color: #000;
     margin-top: 10px;
     margin-bottom: 10px;
  }
  .resultP {
     float: left;
     width: 80%;
     margin-left: 10%;

  }
  .clamp  {
     float: left;
     width: 100%;
     border-bottom: 1px solid #ccc;
     padding-top: 7px;
     padding-bottom: 7px;
     font-size: 13px;
  }
  .leftC, .rightC {
      float: left;
      width: 50%;
      font-weight: bold;

  }
  .leftC {
     padding-left: 20px;
     color: #0091d9;
  }
  .rightC {
     padding-left: 20px;
  }
    .pestImg  {
       width: 100%;
       float: left;
       font-size: 15px;
       color: #444;
    }
    .pestImg i {
      float: left;
      margin-right: 10px;
      font-size: 16px;
      font-weight: bold;
    }
   .sest {
    background: #fff;
    padding: 20px;
    float: left;
    background: #eee;
    width: 100%;
   }
   .botm {
      float: left;
      width: 100%;
      background: #0091d9;
      padding: 15px;
      height: 60px;
   }
   .botm button {
     float: right;
   }
   .nani {
    float: left;
    padding: 5px;
    border-bottom: 1px solid #0091d9;
    font-size: 16px;
    width: 100%;
    font-weight: bold;
    color: #0091d9;
   }
   .correcty, .wrong  {
      font-size: 14px;
      color: #0091d9;
      width: 100%;
      float: left;
      margin-top: 5px;
      margin-bottom: 5px;
   }
   .wrong {
    color: #444;
   }
   .sest sup {
     float: left;
     width: 100%;
     color: #ccc;
     font-size: 11px;
     margin-top: 10px;
     margin-bottom: 10px;
     text-align: left;
   }
   .sest span {
    margin-bottom: 20px;
    font-size: 13px;
   }
   .sest button {
    margin-top: 50px;
   }
   .sest textarea {
    float: left;
    width: 100%;
    height: 70px;
    margin-top: 10px;
    border: 1px solid #ddd;
    font-size: 13px;

   }
   .sest label {
    font-size: 12px;
   }

  .quizArea {
     float: left;
     width: 100%;
  }
  .barb {
    float: left;
    width: 100%;
    background: #424242;
    padding-top: 70px;
    padding-bottom: 70px;
    display: none;
  }
  .barb span {
    width: 100%;
    text-align: center;
    color: #fff;
    float: left;
    font-size: 32px;
    font-weight: bold;
  }
  .barb strong {
     width: 100%;
     float: left;
     color: #354c98;
     font-size: 52px;
     margin-top: 50px;
     text-align: center;
     font-weight: bolder;
  }
  .barb p {
    width: 100%;
    float: left;
    color: #fff;
    font-size: 17px;
    margin-top: 30px;
    font-weight: bold;
    text-align: center;
  }
  .barb button {
     float: none;
     margin-top: 20px;

  }
</style>      
      
      <div class="addComment" style="float: left;width: auto;"><span style="color: #E11DD2;">Contribute to this course</span><i class="material-icons pink">comments</i> &emsp;  &emsp; </div>

        
      <button class="btnPink btnHerd"><span>Mark as complete</span><i class="material-icons">check</i></button>
      
      

         </div>

        <!-- end of text section -->


      <style>
        
 .courseMenu {
   width: 21%;
  top: 50px;
  padding-bottom: 15px;
  padding-top: 50px;
  float: left;
  position: fixed;
  z-index: 9;
  height: 100vh;
  background: #444;
  overflow-y: auto;
  margin-left: 0px;
  transition: all 0.5s ease-out;
     -webkit-transition: all 0.5s ease-out;
}
.courseMenu.pop {

  transition: all 0.5s ease-out;
     -webkit-transition: all 0.5s ease-out;
     margin-left: 0px;
}
.courseMod {
   width: 100%;
  float: left;
  height: 60px;
  overflow-y: hidden;
  margin-bottom: 5px;
  transition: all 0.5s ease-out;
     -webkit-transition: all 0.5s ease-out;
     background: #333;
}
.courseMod.drop {
    height: auto;
    transition: all 0.5s ease-out;
     -webkit-transition: all 0.5s ease-out;
}
.hitman {
   width: 100%;
   float: left;
   height: 60px;
   padding: 20px;
   cursor: pointer;
   color: #ddd;
   background: #333;
   font-size: 14px;
}
.courseMod.drop .hitman {
  border-left: 2px solid #4286f4;
}
.courseMod.drop .hitman .cercu {
    background: #4285f4;
    border: none;
}
.Lessona {
   width: 100%;
     float: left;
}
.nextLesson {
   width: 100%;
   padding: 20px 25px 20px 30px;
   color: #fff;
     float: left;
}

.nextLesson span {
   font-size: 14px;
   font-weight: normal;
   margin-right: 10px;
     float: left;
}
.nextLesson i {
   font-size: 14px;
   margin-top: 3px;
   margin-right: 10px;
     float: left;
}
.nextLesson b {
   font-size: 14px;
     float: left;
}


 .lessonTab {
     width: 100%;
     padding: 13px 10px 13px 20px;
     font-size: 12px; 
     cursor: pointer;
     float: left;
     border-bottom: 0.5px solid #444;

  }
  .<div class="cercu"></div> Module{
     width: 16%;
     text-align: center;
     color: #ccc;
     background: #444;
     border-radius: 5px;
     -webkit-border-radius: 5px;
     padding: 4px;
     font-weight: bold;
     float: left;
  }
  .lessonTab.active .<div class="cercu"></div> Module{
     background: #4286f4;
     color: #fff;
     float: left;
  }
  .module {
     width: 16%;
     text-align: center;
     color: #ddd;
     background: #444;
     border-radius: 5px;
     -webkit-border-radius: 5px;
     padding: 4px;
     font-weight: bold;
     float: left;
  }
  .lessonTab.active .module {
     background: #4286f4;
     color: #fff;
     float: left;
  }
  .moduleTp {
     width: 84%;
     padding: 4px 10px;
     float: left;
  }
  .moduleT {
     font-weight: bold;
     color: #666;
     float: left;
  }
  .lessonTab.active .moduleT {
     color: #4286f4;
  }
  .lessonTab.active .moduleT i {
     color: #4286f4;
  }
  .moduleT i{
    color: #bbb;
    text-align: right;
    float: left;
    font-size: 12px;
    width: 100%;
  }
  .closer {
    float: left;
    color: #444;
    padding-bottom: 30px;
    color: 
    red;
  }
  .close {
     margin-left: 20px;
     font-weight: bold;
     cursor: pointer;
  }
  .cercu {
      float: left;
      width: 20px;
      height: 20px;
      border: 4px solid #444;
      border-radius: 50%;
      margin-right: 10px;
      margin-top: -3px;
  }



  @media(max-width: 1000px) {

      .courseMenu {
          width: 300px;
          margin-left: -300px;
  transition: all 0.5s ease-out;
     -webkit-transition: all 0.5s ease-out;
      }

    .col99.sanya {
     width: 100%;
     float: left;
     
  }
  .courseMenu.pop {
      margin-left: 0px;

  transition: all 0.5s ease-out;
     -webkit-transition: all 0.5s ease-out;
  }




  }

      </style>



      <script>
          
          $(document).ready(function() {

              $('.hitman').click(function() {

                  $(this).parent("div").toggleClass("drop");

              });


              $('.naga').click(function() {
                  
                  $('.courseMenu').toggleClass("pop");

              });



          });
  

      </script>


         <div class="courseMenu">

          <div class="closer"> X </div>



            <div class="courseMod drop">


                <div class="hitman">
                   <div class="cercu"></div> Finance Fundamentals
                </div>
               
               <!-- lesson tab -->
                <div class="lessonTab active">
                   <div class="module">1.1</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.2</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->



                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.3</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.4</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.5</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.6</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.7</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->

                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.8</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->

            </div>



            <div class="courseMod">


                <div class="hitman">
                   <div class="cercu"></div> Module2
                </div>
               
               <!-- lesson tab -->
                <div class="lessonTab active">
                   <div class="module">1.1</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.2</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->



                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.3</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.4</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.5</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.6</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.7</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->

                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.8</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->

            </div>



            <div class="courseMod">


                <div class="hitman">
                   <div class="cercu"></div> Module3
                </div>
               
               <!-- lesson tab -->
                <div class="lessonTab active">
                   <div class="module">1.1</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.2</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->



                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.3</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.4</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.5</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.6</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.7</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->

                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.8</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->

            </div>


            <div class="courseMod">


                <div class="hitman">
                   <div class="cercu"></div> Module4
                </div>
               
               <!-- lesson tab -->
                <div class="lessonTab active">
                   <div class="module">1.1</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.2</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->



                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.3</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.4</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.5</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.6</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.7</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->

                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.8</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->

            </div>


            <div class="courseMod">


                <div class="hitman">
                   <div class="cercu"></div> Module5
                </div>
               
               <!-- lesson tab -->
                <div class="lessonTab active">
                   <div class="module">1.1</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.2</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->



                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.3</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.4</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.5</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.6</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.7</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->

                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.8</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->

            </div>




            <div class="courseMod">


                <div class="hitman">
                   <div class="cercu"></div> Module6
                </div>
               
               <!-- lesson tab -->
                <div class="lessonTab active">
                   <div class="module">1.1</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.2</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->



                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.3</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.4</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.5</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.6</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>TEXT</i></div></div>
                </div>
                <!-- end of lesson tab -->


                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.7</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->

                <!-- lesson tab -->
                <div class="lessonTab">
                   <div class="module">1.8</div>
                   <div class="moduleTp"><div class="moduleT">FINANCES AND THE LIFE COURSE &emsp; <i>VIDEO (02:30)</i></div></div>
                </div>
                <!-- end of lesson tab -->

            </div>


         </div>

     
  </div>

  <div class="content">

    <style>
      .shaggy {
          margin-left: 18%;
      }


      @media (max-width: 999px) {
         .shaggy {
            width: 120%;
            margin-left: -18%;
            left: 0;
         }
      }

      @media (max-width: 500px) {
         .shaggy {
           width: 100%;
           margin-left: 0%;

         }
      }
    </style>
    
    <div class="col9 shaggy">
          

          <div class="case">
              <div class="long">
                <div class="line borderBottomBlue">Course Forum</div>
              </div>
              <div class="caseBody">
                <div class="comment">
                  <div class="ini">JO</div><div class="offline"></div>
                  <div class="commenter">Joy Okere</div>  <span>made a comment</span>
                  <i class="material-icons">thumb_down</i><i class="material-icons blue">thumb_up</i>
                  <div class="commentTopic">AN AFFECTIVE DILEMMA</div>
                  <div class="commentBody">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Morbi leo urna molestie at elementum.</div>
                  <div class="addComment">  <span class="blue">reply comment</span><i class="material-icons blue">comments</i>
                  </div>
                </div>
                <div class="comment">
                  <div class="ini" style="background: orange">SO</div><div class="online"></div>
                  <div class="commenter">me</div> <span>made a comment</span>
                  <i class="material-icons">thumb_down</i><i class="material-icons blue">thumb_up</i>
                  <div class="commentBody">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Morbi leo urna molestie at elementum. onsectetur adipiscing elit, sed do eiusmod tempor incid onsectetur adipiscing elit, sed do eiusmod tempor incid</div>
                  <div class="addComment">  <span class="blue">reply comment</span><i class="material-icons blue">comments</i>
                  </div>
                </div>
                <form style="border:none;">
                  <textarea name="" id="" cols="30" rows="10" placeholder="Leave a comment..."></textarea>  
                  <a class="btnBlue"><i class="material-icons">comment</i>Post comment</a>
                </form>
              </div>
          </div>      

    </div>


  <script src="js/video.js"></script>



<?php include('footer.php'); ?>