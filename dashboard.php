<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
   
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   
 
    <link rel="stylesheet" href="st.css">
 
   
</head>
<body>
   
  <div class="navbar">
    <!-- MENU ICON -->
    <div id="mySidebar" class="sidebar" style="float:left;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="aboutus.php">About us</a>
    <a href="myprofile.php">My Profile</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="bmi.php">BMI Calculator</a>
    <a href="contact.php">Contact Us</a>
    <a href="faqs.php">FAQS</a>
  </div>
  <div id="main" style="float:left;">
   <button class="openbtn" onclick="openNav()">☰</button>
 </div>
 
    <div class="logo" style="float:left;">
      <!-- <img src="images/e1.png" width="250px" height="95px" > -->
      <img src="images/fitnaarilogo.png" width="350px" height="110px">
    </div>
 
    <div style="float:right; padding-top:30px; padding-right: 20px;">
      <!-- <a href="#faq" class="btn">FAQS</a> -->
    </div>
    </div>
  </div>
  <br><br><br><br><br><br><br>
    <script>
        AOS.init();
    </script>
<br><br><br>
    <br>
    <section class="hiw">
        <div style="width: 100%; margin: auto;"><h1 class="htitle" data-aos="fade-up">Select the Category </h1></div>
       
        <div class="bcont">
            <!-- <div class="card" data-aos="fade-down">
                <div class="block"><a href="10-15.html"><img height="90%" width="100%" src="images/logo1.png" alt=""> </a></div>
                <p class="val1">Age -> 10-15</p>
               
            </div> -->
            <div class="card" data-aos="fade-up">
                <div class="block"><a href="age.html"><img height="90%" width="90%" src="images/disease.png" alt=""></a></div>
                <p class="val1">Diseases</p>
               
            </div>
            <div class="card" data-aos="fade-down">
                <div class="block"><a href="test.html"><img style="margin: 18px 0 0 9px;" height="80%" width="90%" src="images/test.png" alt=""></a></div>
                <p class="val1">Tests</p>
               
            </div>
            <!-- <div class="card" data-aos="fade-down">
                <div class="block"><a href="25-30.html"><img height="90%" width="100%" src="images/logo2.png" alt=""></a></div>
                <p class="val1">Age -> 25+</p>
               
            </div> -->
           
        </div>
       
 
       
 
       
    </section>
    <script>
    function myFunction(x) {
      x.classList.toggle("change");
    }
   
    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
    }
   
    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
    }
   
     
    var acc = document.getElementsByClassName("accordion");
      var i;
   
      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
      }
    </script>
   
</body>
</html>
