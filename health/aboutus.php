<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>About Us</title>
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <style>
      <style>
  .navbar{
  width: 100%;
  height: 100px;
  background-color: #fff;
  position: fixed;
  top:0;
  right: 0;
  left: 0;
  z-index: 1;
  border-bottom: #162252;
}

/* The sidebar menu */
.sidebar {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 5; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #faebeb; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #162252;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #6666FF;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
  font-size: 30px;
  cursor: pointer;
  background-color: #faebeb;
  color:#162252;
  padding: 10px 20px;
  border-radius: 100%;
  border-color:  #AAAAFF;
}
.btn {
  background: #FF416C;
  background-image: -webkit-linear-gradient(top,#FF4B2B, #FF416C);
  background-image: -moz-linear-gradient(top, #FF4B2B, #FF416C);
  background-image: -ms-linear-gradient(top, #FF4B2B, #FF416C);
  background-image: -o-linear-gradient(top, #FF4B2B, #FF416C);
  background-image: linear-gradient(to bottom, #FF4B2B, #FF416C);
  -webkit-border-radius: 10;
  -moz-border-radius: 10;
  border-radius: 10px;
  font-family: Arial;
  color: #ffffff;
  font-size: 30px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #8b0000;
  background-image: -webkit-linear-gradient(top, #8b0000, #ffffff);
  background-image: -moz-linear-gradient(top, #8b0000, #fff);
  background-image: -ms-linear-gradient(top, #8b0000, #fff);
  background-image: -o-linear-gradient(top, #8b0000, #fff);
  background-image: linear-gradient(to bottom, #8b0000, #fff);
  text-decoration: none;
}

.btn:link, .btn:visited, .btn:active {
  color: #fff;
  background-color: transparent;
  text-decoration: none;
}



.openbtn:hover {
  background-color: #FF416C;
}

#main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

.logo{
  width: 50px;
  height: 50px;
  
}

.links{
  float:left;
  padding:35px 0 0px 500px;
}

.hlink{
  font-weight: bolder;
  font-size: 22px;
  font-family: 'IBM Plex Sans', sans-serif;
}

.hlink:link, .hlink:visited, .hlink:active {
  color: #284c63;
  background-color: transparent;
  text-decoration: none;
}
    </style>
    
</head>
<!-- body -->

<body class="main-layout">
    <div class="navbar">
        <!-- MENU ICON -->
        <div id="mySidebar" class="sidebar" style="float:left;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/heath/aboutus.php">About us</a>
        <a href="myprofile.php">My Profile</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="bmi.php">BMI Calculator</a>
        <a href="contact.php">Contact Us</a>
        <a href="faqs.php">FAQS</a>
      </div>
      <div id="main" style="float:left;">
       <button class="openbtn" onclick="openNav()">☰</button>
     </div>
    
        <div class="logo">
          <!-- <img src="images/e1.png" width="250px" height="95px" > -->
          <!-- <img src="images/fitnaarilogo.png" width="350px" height="110px"> -->
        </div>
    
        <div style="float:right; padding-top:30px; padding-right: 20px;">
          <a href="#faq" class="btn">About us</a>
        </div>
        </div>
      </div>
    
        <!-- header inner -->
        <!-- <div class="header">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9" >
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu" >
                                    <ul class="menu-area-main" >
                                        <li class="active"> <a href="index.html">Home</a> </li>
                                        <li class="active"> <a href="aboutus.html">About us</a> </li>
                                        <li class="active"> <a href="meet.html"> Meet me</a> </li>
                                        <li class="active"> <a href="whatwedo.html"> What we do</a> </li>
                                        <li class="active"> <a href="contact.html">Contact us</a> </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- end header inner -->
 
    <!-- end header -->
    <section class="slider_section">
     
        <div class="carousel-item active">
                    <img class="second-slide" src="images/pic.jpeg" alt="Second slide" style="width: 1540px; height: 550px">
                     
        </div>

    </section>
    <br>
    <div class="about-bg">
  <div class="container">
    <div class="row">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="abouttitle">
         <h2>About Us</h2>
       </div>
       </div>
    </div>
  </div>
</div>

    <div class="about">
  <div class="container">
    
    <div class="row">
       
          <p style="margin-top: -80px;">Women have unique health issues. And some of the health issues that affect both men and women can affect women differently.</p> <br>
          <p style="margin-top: -80px;">Unique issues include pregnancy, menopause, and conditions of the female organs. Women can have a healthy pregnancy by getting early and regular prenatal care. They should also get recommended breast cancer, cervical cancer, and bone density screenings.</p>
            <br>
            Women and men also have many of the same health problems. But these problems can affect women differently. For example,:
            
            Women are more likely to die following a heart attack than men,
            Women are more likely to show signs of depression and anxiety than men,
            The effects of sexually transmitted diseases can be more serious in women,
            Osteoarthritis affects more women than men,
            Women are more likely to have urinary tract problems.
            <br>
            We provide an accurate and comprehensive data about Women wellness.
            Spread awareness about different diseases, their cures, precautions, and exercises to avoid them.
            The users are able to check if they suffer from any disease based on the symptoms they are experiencing.
            The platform tell the users about different cures, exercises or precautions for different diseases.
            
          </p>
         
        </div>
      </div>
     
    </div><br><br>
  

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

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    
    <script src="js/bootstrap.bundle.min.js"></script>
    
</body>

</html>