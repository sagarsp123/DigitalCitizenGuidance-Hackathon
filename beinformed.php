<html>
<head>
	<title>Flooding</title>
        
        <style>
            
            
            .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 22px 38px;
  text-decoration: none;
  font-size: 25px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:teal;
  color: white;
}
a.ex2:hover, a.ex2:active {font-size: 200%;}
.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}




.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}

            
        </style>
</head>
<body>
    
<!--Header-->
<header>
<h1>DIGITAL CITIZEN GUIDANCE</h1>
<style>
h1{text-align:center;
font-size:40px;
   }
</style>


<div class="topnav">
  <a class="active" class="ex2" href="#home">Home</a>
  <a class="ex2" href="#contact">Contact</a>
  <a class="ex2" href="#about">About</a>
  
</div>



<?php
$servername = "localhost";
$username = "Sagar";
$password = "";
$dbname="hackathon";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>








<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <!-- Rights-->
                <p class="rights"><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h4>Contacts:</h4>
        <style>
        h4{font-size:24px;}
        </style>  
              <dl class="contact-list">
                              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
        <style>
        dt{font-size:24px;}
        </style>
                <dd><a href="mailto:#">prabhusagar1305@gmail.com</a></dd><br>
        <dd><a href="mailto:#">himanshumaru76@gmail.com</a></dd><br>
        <dd><a href="mailto:#">aditibattulwar@gmail.com</a></dd><br>
        <dd><a href="mailto:#">khuludasim04@gmail.com</a></dd><br>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#">+91 9892417997</a> <span>or</span> <a href="tel:#">+91 7758006503</a> <span>or</span> <a href="tel:#">+91 8097010641</a> <span>or</span> <a href="tel:#">+91 9930513074</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links:</h5>
        <style>
        h5{font-size:24px;}
        </style>
              <ul class="nav-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
            </div>
      
          </div>
        </div>
        <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div>
      </footer>
  

</body>
</html>