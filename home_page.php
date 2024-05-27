
<?php

session_start();
if(isset($_SESSION['loggedin'])!=true){
    header("location:login.php");
    exit;
}
// else{
  // php end
 //     <p style="background-color:blue"><a href="logout.php">logout</a></p> -->
//     <?php
// }
?>
<!DOCTYPE html>
<html>
<head>
  <title>ANULAX</title>
  <link rel="icon" type="image/x-icon" href="images/icon2.jpg">
  <link rel="stylesheet" type="text/css" href="inddex.css">
</head>
<body>
<!-- <p style="float:left;  color:orangered; font-size: 35px;"><b>AnUlaX</b></p>
   -->
    <header>
        <nav>
          <ul>
            <li><a href="#web"><b>Home</b></a></li>
            <li><a href="#introduction"><b>Introduction</b></a></li>
            <li><a href="#HTML"><b>Services</b></a></li>
            <li><a href="#summary"><b>Summary</b></a></li>
            <li><a href="#about"><b>About us</b></a></li>
            <li><a href="noteandquestion/htmlnote.html" target="_blank"><b>HTML</b></a></li>
            <li><a href="noteandquestion/cssnote.html" target="_blank"><b>CSS</b></a></li>
            <li><a href="noteandquestion/sqlnote.html" target="_blank"><b>SQLPHP</b></a></li>
            <li><a href="noteandquestion/javanote.html" target="_blank"><b>JAVASCRIPT</b></a></li>
            <li><a href="noteandquestion/question.html" target="_blank"><b>QUESTION</b></a></li>
            <li><a href="login.php" onclick="logout()"><b>Logout</b></a></li>
          </ul>
        </nav>
      </header>
      
    <section class="help_section1 layout_padding1">
          <div class="container1">
          <div class="row1">
            <div class="col-md-61">
              <div class="detail-box1">
                <div class="heading_container1">
                  <h1 id="web">
                    Web technology refers to the various tools, programming languages, protocols, and frameworks that enable the development and functioning of websites and web applications. It encompasses a wide range of technologies that work together to deliver interactive and dynamic web experiences. <br>
                  </h1>
                </div>
                <p>
                 <!-- something -->
                </p>
              </div>
            </div>
            <div class="col-md-61">
              <div class="img-box1">
                <img src="images/about-img.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
 </section>
 

 <section class="about_section2 layout_padding2">
        <div class="container2">
          <div class="row2">
            <div class="col-md-62">
              <div class="detail-box2">
                <div class="heading_container2">
                  <h2 id="introduction">
                    Introduction
                  </h2>
                </div>
                <p class="lax">
                 Here,we make a summary of HTML, SQLPHP, CSS and javascript.We have also old question of Pokhara University and their solution.
                </p>
              </div>
            </div>
            <div class="col-md-62">
              <div class="img-box2">
                <img src="images/slider-img2.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="help_section3 layout_padding3">
        <div class="container3">
          <div class="row3">
            <div class="col-md-63">
              <div class="detail-box3">
                <div class="heading_container3">
                  <h2 id="HTML">
                   <li>SQLPHP  HTML CSS JAVASCRIPT</li><br> <br>
                   <li>Summary</li>
                   <br><br>
                   <li>Question And Solution</li>
                  </h2>
                </div>
                <!-- <p></p> -->
              </div>
            </div>
            <div class="col-md-63">
              <div class="img-box3">
                <img src="images/help-img.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

            
  <section class="wedo_section4 layout_padding4">
    <div class="container4">
      <div class="heading_container4">
        <h2 id="summary">
          summary
        </h2>
       
        <p>
          click to open summary file.
        </p>
      </div>
      <div class="row4">
        <div class="col-md-6 col-lg-34">
          <div class="box pr-0 pr-lg-54">
            <div class="img-box4">
              <img src="images/wedo-img2.png"  class="img4" alt="">
            </div>
            <div class="detail-box4">
              <h5>
                SQLPHP
              </h5>
              <br><br>
              <p>
                SQL AND PHP 
              </p>
              <a href="summary/sql.html" target="_blank">
                click
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-34">
          <div class="box pr-0 pr-lg-54">
            <div class="img-box4">
              <img src="images/wedo-img3.png" class="img4" alt="">
            </div>
            <div class="detail-box4">
              <h5>
                HTML
              </h5>
              <br><br>
              <p>
                HTML
              </p>
              <a href="summary/HTML.html" target="_blank">
                click
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-34">
          <div class="box pr-0 pr-lg-54">
            <div class="img-box4">
              <img src="images/wedo-img4.png" class="img4" alt="">
            </div>
            <div class="detail-box4">
              <h5>
               CSS
              </h5>
              <br><br>
              <p>
                CSS
              </p>
              <a href="summary/CSS.html" target="_blank">
               click
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-34">
          <div class="box pr-0 pr-lg-54">
            <div class="img-box4">
              <img src="images/wedo-img1.png" class="img4" alt="">
            </div>
            <div class="detail-box4">
              <h5>
              javascript
              </h5>
              <br><br>
              <p>
                javascript
              </p>
              <a href="summary/java.html" target="_blank">
                click
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="client_section5">
    <div class="container5">
     <div class="heading_container5">
       <h2 id="about">
         ABOUT US
       </h2>
   </div>
 <div class="web5">
   <div class="code5">
     <div class="item5">
       <div class="box5">
         <div class="client_id5">
           <div class="img-box5">
             <img src="images/client-img1.jpg" alt="">
          </div>
           <div class="client_detail5">
            <h5>
            <a href="port/index.html" target="_blank">Laxman Khatri</a>
            </h5>
            <br><br>
             <h6>
             <a href="images/u and i.mp4" target="_blank"> Coder</a>
             </h6>
           </div>
         </div>
          <div class="client_text5">
          <li>
           Roll number=23.
          </li>
           <li>
            BESE 2nd Semestar
           </li>
       </div>
     </div>
   </div>
   <div class="item5">
     <div class="box5">
       <div class="client_id5">
         <div class="img-box5">
           <img src="images/client-img2.jpg" alt="">
         </div>
         <div class="client_detail5">
           <h5>
           <a href="port2/index.html" target="_blank">Anugya Kuinkel</a>
           </h5>
           <br><br>
           <h6>
            <a href="images/a my best.mp4" target="_blank">Design</a>
           </h6>
         </div>
       </div>
       <div class="client_text5">
        <li>
          Roll number=50.
        </li>
          <li>
           BESE 2nd Semestar
          </li>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</section>





  <script>
    function logout() {
      // Perform logout logic, such as clearing session or local storage
      alert("Logged out successfully!");
      // Redirect to the login page or perform any other necessary actions
    }
  </script>
  <footer>
    <p>&copycopyright 2023 LAXMAN AND ANUGYA</p>
  </footer>
</body>
</html>
