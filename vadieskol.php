<!DOCTYPE html>
<html lang="en">
<head>

  <title>Vadieskol Fellowship – Reach . Raise . Release</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

            body {
                font: 400 15px/1.8 Lato, sans-serif;
                color: #777;
            }
            h3, h4 {
                margin: 10px 0 30px 0;
                letter-spacing: 10px;      
                font-size: 20px;
                color: #111;
            }
            .container {
                padding: 80px 120px;
            }
            .person {
                border: 10px solid transparent;
                margin-bottom: 25px;
                width: 80%;
                height: 80%;
                opacity: 0.7;
            }
            .person:hover {
                border-color: #f1f1f1;
            }
            .carousel-inner img {
               /* -webkit-filter: grayscale(90%);*/
               /* filter: grayscale(90%);  make all photos black and white  */
                width: 100%; /* Set width to 100% */
                margin: auto;
                max-height: 630px
            }
            .carousel-caption h3 {
                color: #fff !important;
            }
            @media (max-width: 600px) {
              .carousel-caption {
                display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
              }
            }
            .bg-1 {
                background: #2d2d30;
                color: #bdbdbd;
            }
            .bg-1 h3 {color: #fff;}
            .bg-1 p {font-style: italic;}
            .list-group-item:first-child {
                border-top-right-radius: 0;
                border-top-left-radius: 0;
            }
            .list-group-item:last-child {
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            .thumbnail {
                padding: 0 0 15px 0;
                border: none;
                border-radius: 0;
            }
            .thumbnail p {
                margin-top: 15px;
                color: #555;
            }
            .btn {
                padding: 10px 20px;
                background-color: #333;
                color: #f1f1f1;
                border-radius: 0;
                transition: .2s;
            }
            .btn:hover, .btn:focus {
                border: 1px solid #333;
                background-color: #fff;
                color: #000;
            }
            .modal-header, h4, .close {
                background-color: #333;
                color: #fff !important;
                text-align: center;
                font-size: 30px;
            }
            .modal-header, .modal-body {
                padding: 40px 50px;
            }
            .nav-tabs li a {
                color: #777;
            }
            #googleMap {
                width: 100%;
                height: 400px;
               /* -webkit-filter: grayscale(100%);
                filter: grayscale(100%);*/
            }  
            .navbar {
                font-family: Helvetica, Arial, sans-serif ;
               font-weight: 1200 !important;
                margin-bottom: 0;
                background-color: #0d0d0d;
                border: 0;
                font-size: 11px !important;
                letter-spacing: 4px;
                opacity: 0.9;
            }
            .navbar-brand{
               color:  #f2f2f2!important;
               font-size: 21px !important;
            }
            .navbar li a, .navbar .navbar-brand { 
                color:  #f2f2f2!important;
                
            }
            .navbar-nav li a:hover {
                color: #fff !important;
            }
            .navbar-nav li.active a {
                color: #fff !important;
                background-color: #29292c !important;
            }
            .navbar-default .navbar-toggle {
                border-color: transparent;
            }
            .open .dropdown-toggle {
                color: #fff;
                background-color: #555 !important;
            }
            .dropdown-menu li a {
                color: #000 !important;
            }
            .dropdown-menu li a:hover {
                background-color: #505050 !important;
            }
            .main{
              background-color: #29292c !important;
            }

            footer {
                background-color: #2d2d30;
                color: #f5f5f5;
                padding: 32px;
            }
            footer a {
                color: #f5f5f5;
            }
            footer a:hover {
                color: #777;
                text-decoration: none;
            }  
            .form-control {
                border-radius: 0;
            }
            .sside {
              padding-top: 50px;
              margin-top: 100px;
            }
            textarea {
                resize: none;
            }
            hr { 
              display: block;
              margin-top: 0.5em;
              margin-bottom: 0.5em;
              margin-left: auto;
              margin-right: auto;
              border-style: inset;
              border-width: 1px;
          } 
          * {
            box-sizing: border-box;
          }

          .row > .column {
            padding: 0 8px;
          }

          .row:after {
            content: "";
            display: table;
            clear: both;
          }

          .column {
            float: left;
            width: 25%;
          }

          /* The Modal (background) */
          .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
          }

          /* Modal Content */
          .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 90%;
            max-width: 1200px;
          }

          /* The Close Button */
          .close {
            color: white;
            position: absolute;
            top: 40px;
            right: 35px;
            font-size: 55px;
            font-weight: bold;
          }

          .close:hover,
          .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
          }

          .mySlides {
            display: none;
          }

          .cursor {
            cursor: pointer;
          }

          /* Next & previous buttons */
          .prev,
          .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
          }

          /* Position the "next button" to the right */
          .next {
            right: 0;
            border-radius: 3px 0 0 3px;
          }

          /* On hover, add a black background color with a little bit see-through */
          .prev:hover,
          .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
          }

          /* Number text (1/3 etc) */
          .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }

          img {
            margin-bottom: -4px;
          }

          .caption-container {
            text-align: center;
            background-color: black;
            padding: 2px 16px;
            color: white;
          }

          .demo {
            opacity: 0.6;
          }

          .active,
          .demo:hover {
            opacity: 1;
          }

          img.hover-shadow {
            transition: 0.3s;
          }

          .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          }
          .image{
            padding-left: 10px;
            padding-right: 10px;

          }

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><b>WORLD SHINE USA --<i>Vadieshkol Fellowship</i></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#activities">ACTIVITIES</a></li>
        <li><a href="#discipleship">DISCIPLESHIP</a></li>
        <li><a href="index.php">BACK</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
     
       <div class="item active">
        <img src="img/slider_vadie/1.jpg" width="1200" height="700">      
      </div>
      <div class="item">
        <img src="img/slider_vadie/2.png" width="1200" height="700">      
      </div>
      <div class="item">
        <img src="img/slider_vadie/3.png" width="1200" height="700">      
      </div>
    
       <div class="item">
        <img src="img/slider_vadie/4.png"  width="1200" height="700">     
      </div>
      <div class="item">
        <img src="img/slider_vadie/5.png" width="1200" height="700">   
      </div>

      <div class="item">
        <img src="img/slider_vadie/6.jpg" width="1200" height="700">   
      </div>
    
      <div class="item">
        <img src="img/slider_vadie/7.png"  width="1200" height="700">   
      </div>
       <div class="item">
        <img src="img/slider_vadie/8.png"  width="1200" height="700">   
      </div>
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div >
      <img src="img/slider_vadie/vadie.png">
    </div>
<footer class="text-center">
<div  class="container text-center id="main"  >
   <header class="entry-header">
    <h1 class="entry-title text-center"><strong>Bearing fruit to enlarge God’s Kingdom</strong></h1>
    <p class="text-center"><b>REACH . RAISE . RELEASE</b></p>
    <hr>
  </header>
  
 <p style="text-align: justify;">Vadieshkol is at the core of the youth ministry of World Shine Ministries. It is picked from a Greek word to mean “Valley of Eshkol” for Vadie Eshkol which is found in Deuteronomy 1:19-24 where Moses sent out 12 Spies to spy out the land of Canaan to see if it was good for them to posses it. As it turned out, two of them brought back a positive report about the goodness of the land, taking with them some fruit and reported that the land was good. However, others said the land was inhabited by giants and feared. But Joshua and Caleb differed from everyone else and said that the Israelites could take it on.</p>
 <p style="text-align: justify;"> We also believe that our youth  fellowship  Vadieshkol is an avenue that God has given us to bear the Lord’s fruit amongst the youth as we reach, raise and release them to lead Uganda and influence nations for Christ. This is where discipleship takes place. It’s under the objective of “Raise”  of World Shine Ministries. If we can impact young people now, tomorrow they will be leaders and will be equipped to serve in a godly way. Uganda will be transformed by these ambassadors. </p>
 <p style="text-align: justify;">Vadieshkol fellowship usually happens every last Saturday of the month. It started in 2012 with about 8 youth at Rev. Dr Medad Birungi’s home in Namugongo as of today it has over 100 youth who meet at Bethel Youth Hub in Wandegeya – “Kubiri” at Makerere area. </p>
 
</div>
</footer>
<div id="activities" class="container-fluid text-left">
  <div class="container">
  <div class="row">
    <div class="col-sm-7">
      <header>
        <h1><b>Activities</b></h1>
      </header>
      <hr>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
     
       <div class="item active">
        <img src="img/slider_vadie/act/1.jpg" width="1200" height="700"> 
        <div class="carousel-caption">
          <h1><span><b>Outings</b></span></h1>
          <p><b>Connecting and bonding with each other</b></p>
        </div>        
      </div>
      <div class="item">
        <img src="img/slider_vadie/act/2.jpg" width="1200" height="700">  
        <div class="carousel-caption">
          <h1><b><span>Community Outreaches</span></b></h1>
          <p><b>Spreading love and impacting communities with the gospel</b></p>
        </div>      
      </div>
      <div class="item">
        <img src="img/slider_vadie/act/3.jpg" width="1200" height="700">
        <div class="carousel-caption">
          <h1><b><span>Home Visits</span></b></h1>
          <p><b>Bringing healing and restoration to families</b></p>
        </div>        
      </div>
    
       <div class="item">
        <img src="img/slider_vadie/act/4.jpg"  width="1200" height="700">
        <div class="carousel-caption">
          <h1><b><span>School Outreaches</span></b></h1>
          <p><b>Transforming the next generation</b></p>
        </div>       
      </div>
      <div class="item">
        <img src="img/slider_vadie/act/5.jpg" width="1200" height="700">   
        <div class="carousel-caption">
          <h1><b><span>Worship Experiences</span></b></h1>
          <p><b>Magnifying, experiencing and celebrating christ through christ</b></p>
        </div>  
      </div>

      <div class="item">
        <img src="img/slider_vadie/act/6.jpg" width="1200" height="700">   
        <div class="carousel-caption">
          <h1><b><span>Missions</span></b></h1>
          <p><b>Till the whole world hears</b></p>
        </div>  
      </div>
    
      <div class="item">
        <img src="img/slider_vadie/act/7.png"  width="1200" height="700">   
        <div class="carousel-caption">
          <h1><b><span>Vadieshkol Fellowship</span></b></h1>
          <p><b>Bearing fruit to enlarge God's kingdom</b></p>
        </div>  
      </div>
       <div class="item">
        <img src="img/slider_vadie/act/8.jpg"  width="1200" height="700"> 
        <div class="carousel-caption">
          <h1><b><span>Sports</span></b></h1>
          <p><b>Using our talents to make christ known</b></p>
        </div>    
      </div>
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
    </div>
    <div class="col-sm-5">
      <header >
        <h1>Upcoming Events</h1>
      </header>
      <hr>
      <ol>&nbsp;&nbsp;
        <li>Vadieshkol Fellowship<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#">
          <span class="glyphicon glyphicon-calendar"> </span>
        </a><span>November 24, 2018</span> &nbsp;&nbsp;&nbsp;&nbsp;
        
          <a href="https://www.google.com/maps/place/0°20&#039;22.5%22N+32°34&#039;13.5%22E/@0.3395834,32.5682303,17z/data=!3m1!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d0.3395777!4d32.5704192" rel="noopener" target="_blank">
            <span class="glyphicon glyphicon-map-marker"></span>
                      
                                  </a>
                                   <span>Bethel Youth Hub</span>
        </li>

      </ol>
      
    </div>
  </div>
</div>
</div>
<footer class="text-center" id="discipleship">
<div  class="container text-center id="main"  >
   <header class="entry-header">
    <h1 class="entry-title text-center"><strong>Discipleship</strong></h1>
    <p class="text-center"><b>REACH . RAISE . RELEASE</b></p>
    <hr>
  </header>
  
 <p style="text-align: justify;">Vadieshkol is under the “Raise” part of World Shine Ministries objectives and we do that through discipleship in terms of imparting life and truth to these young people. Imparting life through modeling a Christ centered life and gospel truth through teaching (1 Thessalonians 1:8)</p>
<p style="text-align:justify;">We also hope that whatever will have transformed these young people will be reproduced as we achieve multiplication of disciples, which is a brilliant strategy and a command given to us by Christ. </p>
<p style="text-align: justify;">We do this through a number of ways:</p>
<ul style="text-align: justify;">
  <li>Have weekly and monthly fellowships where we intentionally pick out the FAT (Faithful, Available and Teachable) ones.</li>
  <li>Do life with them (hang out intentionally)</li>
  <li>Train them through retreats in addition to teaching biblical truth.</li>
  <li>Encourage them to join small accountability groups known as brotherhoods and sisterhoods where they can open up and walk together.</li>
  <li>Involve them in ministry on missions and outreaches.</li>
  <li>Later on we encourage them to find Timothys (other young people they too can disciple)</li>
</ul><br>
<img src="img/slider_vadie/act/Discipleship-pic.png">
</div>
</footer>
<div id="" class="container-fluid text-left">
  <div class="container" >
 <p style="text-align: center;">For more of what we do do, find us at…</p><br>
 <p style="text-align: center;">
 <img src="img/slider_vadie/act/BYH-logoweb.png"></p>
 </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>WORLD SHINE USA 2018©</p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
<script type="text/javascript">
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>

</body>
</html>
