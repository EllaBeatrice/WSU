<!DOCTYPE html>
<html lang="en">
<head>

  <title>World Shine USA – Reach . Raise . Release</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/fluid-gallery.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
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
          .gall{
            padding-bottom: 30px;
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
      <a class="navbar-brand" href="#myPage"><b>WORLD SHINE USA</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#About">ABOUT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle dropdown-toggle-split"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#africa">AFRICA
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header"><b>UGANDA</b></li>
                <li><a class="dropdown-item" href="#Education">-Education</a></li>
                <li><a class="dropdown-item" href="emerging_leaders.php">-Emerging Leaders</a></li>
                <li><a class="dropdown-item" href="#DWB">-Divine Worship Band</a></li>
                <li><a class="dropdown-item" href="vadieskol.php">-Vadieskhol Fellowship</a></li>
                <li><a class="dropdown-item" href="annual_convention.php">-Convention</a></li>
          </ul>
        </li>
        <li><a href="#America">AMERICA</a></li>
         <li><a href="#Accomplishments">ACCOMPLISHMENTS</a></li>
           <li><a href="#Donate">DONATE</a></li>

        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
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
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/nw/1.JPEG" alt="" width="1200" height="700" >
         
      </div>
      <div class="item">
        <img src="img/nw/2.JPEG" alt="" width="1200" height="700" >
         
      </div>
      <div class="item">
        <img src="img/nw/3.JPEG" alt="" width="1200" height="700">
           
      </div>

      <div class="item">
        <img src="img/nw/5.JPG" alt="" width="1200" height="700">
            
      </div>
    
      <div class="item">
        <img src="img/nw/8.JPG" alt="" width="1200" height="700">
           
      </div>
       <!-- <div class="item">
        <img src="img/nw/5.JPG" alt="" width="1200" height="700">
         
      </div> -->
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
 <!-- Container (Pre-About Section) -->
<footer class="text-center">
<div  class="container text-center id="main"  >
  <h1><b>Welcome to World Shine Ministries</b></h1>
  <p><b>REACH . RAISE . RELEASE</b></p>
  <p>World Shine USA is committed to raising godly followers of Jesus Christ to influence their world.  We do that directly through discipleship and indirectly through indigenous ministries committed to the same.  Adding our skill sets to other ministries, we help them achieve their goals of furthering the Kingdom.</p>
  <br>
  <div class="row" id="Partners" >
    <header class="entry-header">
    <h1 class="entry-title text-left">Partners</h1>
  </header>
   <div class="entry-content">
    <p style="text-align: left;">World Shine USA is attempting to coordinate and collaborate with existing supporting church/ministry communities of World Shine Ministries Uganda in the United States and The United Kingdom.</p>
    <ul style="text-align: left;">
      <li>Servants of Christ Community, Memphis, TN <a href="https://socmemphis.wordpress.com/"> (Servants of Christ Community)</a></li>
      <li>The World Shine Foundation, Glasgow, Scotland <a href="">  (The World Shine Foundation)</a></li>
      <li>Breakout Ministries, Lancaster, PA <a href="http://breakoutministry.org/">  (Breakout Ministries)</a></li>
      <li>Tonbridge Baptist Church, Tonbridge Kent, UK <a href="http://www.livestransformed.org.uk/">  (Tonbridge Baptist Church)</a></li>
      <li>In The Garden Missions, Winchester, VA <a href="http://inthegardenmissions.org/">  (In The Garden Missions)</a></li>
      <li>North Oak Community Church, Hays, KS <a href="https://www.northoak.net/default.htm@"></a></li>
</ul>
  </div>
  </div>
</div>
</footer>

<!-- Container (The About Section) -->
<div id="About" class="container-fluid text-left">
  <div class="container col-sm-9" >
 <header class="entry-header">
    <h1 class="entry-title text-left"><strong>About</strong></h1>
    <p class="text-left"><b>REACH . RAISE . RELEASE</b></p>
    <hr>
  </header>
  <p>
    
<p><strong>Ministry Activities</strong></p>
<ul>
<li>World Shine USA is partnered with and supports World Shine Ministries (WSM &#8211; 
  <a href="http://worldshineministries.com/"><span style="text-decoration:underline;">worldshineministries.org</span></a>) in Uganda.  World Shine USA works closely with WSM to Reach, Raise, and Release Christian leaders for Uganda and the world.</li>
<li>We are attempting to coordinate and collaborate with existing <a href="https://worldshineusa.wordpress.com/partners/">supporting church/ministry communities </a>of WSM in the United States and Great Britain.</li>
<li>We support the WSM Primary School in Rwentobo, Western Uganda, by sponsoring children, building school facilities, providing Christian curriculum resources, and bringing short-term missionaries to work with the children.</li>
<li>We work with young adult fellowships and emerging leaders to disciple and train.</li>
<li>World Shine USA operates the University House of Prayer (<a href="http://uhopmemphis.com/"><span style="text-decoration:underline;">UHOPMemphis.com</span></a>) at the University of Memphis.</li>
<li>World Shine USA leads Christian, content-filled tours and short-term missions in Africa, Europe, the UK, and Israel.</li>
</ul>
  <br>
  <div class="row">
    <hr>
    <header class="entry-header">
    <h1 class="entry-title text-center"><strong>Board of Directors</strong></h1>
  </header>
    <hr>
    <div class="col-sm-4">
      <a href="#demo" data-toggle="collapse">
        <img src="img/Steve.png" class="img-circle person" alt="More" width="20" height="5">
        <p class="text-left">
          <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Steve Happ</strong></p><br>
      </a>

      <div id="demo" class="collapse">
        <p class="title">CEO & Founder</p>
        <p>Detailed description about CEO & Founder...</p>
        <p>example@example.com</p>
      </div>
    </div>
    <div class="col-sm-4">
      <a href="#demo2" data-toggle="collapse">
        <img src="img/board/bob.png" class="img-circle person" alt="More" width="20" height="25"><br>
      <p class="text-left"><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Robert Phillips</strong></p><br>
      </a>
      <div id="demo2" class="collapse">
       <p class="title">CHAIRPERSON</p>
        <p>C12 Group</p>
        <p>example@example.com</p>
      </div>
    </div>
    <div class="col-sm-4">
      <a href="#demo3" data-toggle="collapse">
        <img src="img/board/r.png" class="img-circle person" alt="More" width="20" height="25">
         <p class="text-left"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Russell Bloodworth</strong></p><br>
      </a>
      <div id="demo3" class="collapse">
      <p class="title">EXECUTIVE VICE PRESIDENT </p>
        <p>Boyle Investment Company</p>
        <p>example@example.com</p>
      </div>
    </div>

  </div>
  <div class="row">
        <div class="col-sm-4">
      <a href="#demo4" data-toggle="collapse">
        <img src="img/board/sam.jpg" class="img-circle person" alt="More" width="20" height="25">
        <p class="text-left"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sam Coates</strong></p><br>
      </a>
      <div id="demo4" class="collapse">
        <p class="title">Assistant Director</p>
        <p>Detailed description about Assistant Director....</p>
        <p>example@example.com</p>
      </div>
    </div>
    <div class="col-sm-4">
      <a href="#demo5" data-toggle="collapse">
        <img src="img/board/john.png" class="img-circle person" alt="More" width="20" height="25">
        <p class="text-left"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;John Griesbeck</strong></p><br>
      </a>
      <div id="demo5" class="collapse">
       <p class="title">MANAGING PARTNER</p>
        <p>Reynolds, Bone, Griesbeck PLC Accounting Firm</p>
        <p>example@example.com</p>
      </div>
    </div>
    
  </div><br>
  <div class="row">
    <hr>
  <h3 style="text-align:center;"><span style="color:#777;"><strong>REACH     RAISE     RELEASE</strong></span></h3>
  <hr><br>
<p style="text-align:center;"><div class="jetpack-video-wrapper"><span class="embed-youtube" style="text-align:center; display: block;"><iframe class='youtube-player' type='text/html' width='882' height='527' src='https://www.youtube.com/embed/5jhW39NMPBU?version=3&#038;rel=1&#038;fs=1&#038;autohide=2&#038;showsearch=0&#038;showinfo=1&#038;iv_load_policy=1&#038;wmode=transparent' allowfullscreen='true' style='border:0;'></iframe></span></div></p>
  </div>
</div>
<!-- Picture Gallarey & others -->
<div class="col-sm-3 text-left" id="sside">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
  <span style="color:#000000;">Would you consider becoming a partner?</span><br>
You have 2 options:<br>
Wepay: 
<a href="https://www.aplos.com/aws/give/WorldShineUSA/donation">
  <img src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" alt="Small Donate Button" />
</a> 
<br>
Paypal: 
<span style="color:#ffffff;"> .
</span>
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=VQHRZHVDGBKNL">
  <img src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" alt="Small Donate Button" /></a><br>
<span style="font-size:xx-small;">
  <em>(Clicking Donate will take you to a donation page where you can donate with a major credit card or your checking account)</em></span><br>
  <p><b><i>Follow Us On;</i></b></p>
<aside id="wpcom_social_media_icons_widget-2" class="widget widget_wpcom_social_media_icons_widget" style="padding-left: 30px">
  
    <!-- Social Media links -->
      <a href="https://www.facebook.com/worldshineusa/" class="genericon genericon-facebook" target="_blank">
        <img src="img/facebook.png">
      </a>&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="https://www.twitter.com/worldshineusa/" class="genericon genericon-facebook" target="_blank">
        <img src="img/twitter.png">
      </a>
   <!--  End of social media links -->
  
</aside>
<!-- picture Gallery -->
<aside id="media_gallery-9" class="widget widget_media_gallery">
  <h1 class="widget-title">Picture Gallery</h1>
      <div class="tz-gallery">

        <div class="row">
          <div class="col-sm-6 col-md-4" >
                <a class="lightbox" href="img/favorites/DB1.jpg">
                    <img src="img/favorites/DB1.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4" >
                <a class="lightbox" href="img/favorites/DB2.jpg">
                    <img src="img/favorites/DB2.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB4.jpg">
                    <img src="img/favorites/DB4.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB5.jpg">
                    <img src="img/favorites/DB5.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB6.jpg">
                    <img src="img/favorites/DB6.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB7.jpg">
                    <img src="img/favorites/DB7.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB29.jpg">
                    <img src="img/favorites/DB29.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB49.jpg">
                    <img src="img/favorites/DB49.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB23.jpg">
                    <img src="img/favorites/DB23.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB16.jpg">
                    <img src="img/favorites/DB16.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB37.jpg">
                    <img src="img/favorites/DB37.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB17.jpg">
                    <img src="img/favorites/DB17.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB15.jpg">
                    <img src="img/favorites/DB15.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB55.jpg">
                    <img src="img/favorites/DB55.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB41.jpg">
                    <img src="img/favorites/DB41.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB36.jpg">
                    <img src="img/favorites/DB36.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB11.jpg">
                    <img src="img/favorites/DB11.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB13.jpg">
                    <img src="img/favorites/DB13.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB27.jpg">
                    <img src="img/favorites/DB27.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB84.jpg">
                    <img src="img/favorites/DB84.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB39.jpg">
                    <img src="img/favorites/DB39.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB35.jpg">
                    <img src="img/favorites/DB35.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB30.jpg">
                    <img src="img/favorites/DB30.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB67.jpg">
                    <img src="img/favorites/DB67.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB83.jpg">
                    <img src="img/favorites/DB83.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB50.jpg">
                    <img src="img/favorites/DB50.jpg" alt="">
                </a>
            </div>
           
             
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB97.jpg">
                    <img src="img/favorites/DB97.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB110.jpg">
                    <img src="img/favorites/DB110.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB61.jpg">
                    <img src="img/favorites/DB61.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB54.jpg">
                    <img src="img/favorites/DB54.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB68.jpg">
                    <img src="img/favorites/DB68.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB82.jpg">
                    <img src="img/favorites/DB82.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB89.jpg">
                    <img src="img/favorites/DB89.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB93.jpg">
                    <img src="img/favorites/DB93.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB100.jpg">
                    <img src="img/favorites/DB100.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB98.jpg">
                    <img src="img/favorites/DB98.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB121.jpg">
                    <img src="img/favorites/DB121.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB129.jpg">
                    <img src="img/favorites/DB129.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB173.jpg">
                    <img src="img/favorites/DB173.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB176.jpg">
                    <img src="img/favorites/DB176.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB178.jpg">
                    <img src="img/favorites/DB178.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB195.jpg">
                    <img src="img/favorites/DB195.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB182.jpg">
                    <img src="img/favorites/DB182.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB188.jpg">
                    <img src="img/favorites/DB188.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB190.jpg">
                    <img src="img/favorites/DB190.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB196.jpg">
                    <img src="img/favorites/DB196.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB44.jpg">
                    <img src="img/favorites/DB44.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB45.jpg">
                    <img src="img/favorites/DB45.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB78.jpg">
                    <img src="img/favorites/DB78.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB53.jpg">
                    <img src="img/favorites/DB53.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB24.jpg">
                    <img src="img/favorites/DB24.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB106.jpg">
                    <img src="img/favorites/DB106.jpg" alt="">
                </a>
            </div>
            
        </div>

    </div>
</aside>
<!-- /pictuire Gallery -->
</div>
</div>

<!-- Container (AFRICA Section) -->
<div id="africa" class="bg-1">
  <div class="container-fluid">
  <div class="container col-sm-9">
    <header class="entry-header">
    <h1 class="entry-title text-left"><strong>Africa</strong></h1>
    <hr>
  </header>
  <div class="entry-content">
    <p>World Shine USA works in Africa to Reach , Raise, and Release disciples of Jesus Christ to impact the world for the Kingdom of God. Our primary relationship and opportunity is with 
      <a href="https://worldshineuganda.wordpress.com/">World Shine Ministries</a> (WSM) in Kampala, Uganda, where we help them to achieve this mission with our skillsets and resources.</p>
<ul>
<li>WSM Uganda promotional video.</li>
</ul>
<div class="jetpack-video-wrapper">
  <span class="embed-youtube" style="text-align:center; display: block;">
    <iframe class='youtube-player' type='text/html' width='882' height='527' src='https://www.youtube.com/embed/g8LQx0WEv9A?version=3&#038;rel=1&#038;fs=1&#038;autohide=2&#038;showsearch=0&#038;showinfo=1&#038;iv_load_policy=1&#038;wmode=transparent' allowfullscreen='true' style='border:0;'>
      </iframe>
    </span>
  </div>
<p>&nbsp;</p>
<ul>
<li>The World Shine Foundation Primary School in Rwentobo, Uganda is a Christian primary school in a poor, rural area in Western Uganda. We help WSM Raise disciples through Christian education while also addressing physical needs. We are improving the school through building more and better facilities and providing curriculum and supplies. We are expanding the school upwards to secondary levels slowly and intentionally.</li>
</ul>
<div class="jetpack-video-wrapper">
  <span class="embed-youtube" style="text-align:center; display: block;">
    <iframe class='youtube-player' type='text/html' width='882' height='527' src='https://www.youtube.com/embed/JKQgqj1F-R8?version=3&#038;rel=1&#038;fs=1&#038;autohide=2&#038;showsearch=0&#038;showinfo=1&#038;iv_load_policy=1&#038;wmode=transparent' allowfullscreen='true' style='border:0;'>
    </iframe>
  </span>
</div>
<p>&nbsp;</p>
<ul>
<li>WSM Raises young adults through Vadieshkol youth fellowships, the Emerging Leaders Institute, and discipleship.</li>
</ul>
<div class="jetpack-video-wrapper">
  <span class="embed-youtube" style="text-align:center; display: block;">
    <iframe class='youtube-player' type='text/html' width='882' height='527' src='https://www.youtube.com/embed/nZPYeEfCB1Q?version=3&#038;rel=1&#038;fs=1&#038;autohide=2&#038;showsearch=0&#038;showinfo=1&#038;iv_load_policy=1&#038;wmode=transparent' allowfullscreen='true' style='border:0;'>
    </iframe>
  </span>
</div>
<p><a href="#myPage">Top</a></p>
  </div>
</div>
<div class="Container-fluid col-sm-3">
  <div class="Container" style="color:#d5d5d5;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
  <span style="color:#d5d5d5;">Would you consider becoming a partner?</span><br>
  You have 2 options:<br>
Wepay: 
<a href="https://www.aplos.com/aws/give/WorldShineUSA/donation">
  <img src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" alt="Small Donate Button" />
</a> 
<br>
Paypal: 
<span style="color:#ffffff;"> .
</span>
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=VQHRZHVDGBKNL">
  <img src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" alt="Small Donate Button" /></a><br>
<span style="font-size:xx-small;">
  <em>(Clicking Donate will take you to a donation page where you can donate with a major credit card or your checking account)</em></span>
  <p><b><i>Follow Us On;</i></b></p>
<aside id="wpcom_social_media_icons_widget-2" class="widget widget_wpcom_social_media_icons_widget" style="padding-left: 30px">
    <!-- Social Media links -->
      <a href="https://www.facebook.com/worldshineusa/" class="genericon genericon-facebook" target="_blank">
        <img src="img/facebook.png">
      </a>&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="https://www.twitter.com/worldshineusa/" class="genericon genericon-facebook" target="_blank">
        <img src="img/twitter.png">
      </a>
   <!--  End of social media links -->
</aside>
<!-- picture Gallery -->
<aside id="media_gallery-9" class="widget widget_media_gallery">
  <h1 class="widget-title">Picture Gallery</h1>
      <div class="tz-gallery">

        <div class="row">
          <div class="col-sm-6 col-md-4" >
                <a class="lightbox" href="img/favorites/DB1.jpg">
                    <img src="img/favorites/DB1.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4" >
                <a class="lightbox" href="img/favorites/DB2.jpg">
                    <img src="img/favorites/DB2.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB4.jpg">
                    <img src="img/favorites/DB4.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB5.jpg">
                    <img src="img/favorites/DB5.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB6.jpg">
                    <img src="img/favorites/DB6.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB7.jpg">
                    <img src="img/favorites/DB7.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB29.jpg">
                    <img src="img/favorites/DB29.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB49.jpg">
                    <img src="img/favorites/DB49.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB23.jpg">
                    <img src="img/favorites/DB23.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB16.jpg">
                    <img src="img/favorites/DB16.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB37.jpg">
                    <img src="img/favorites/DB37.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB17.jpg">
                    <img src="img/favorites/DB17.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB15.jpg">
                    <img src="img/favorites/DB15.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB55.jpg">
                    <img src="img/favorites/DB55.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB41.jpg">
                    <img src="img/favorites/DB41.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB36.jpg">
                    <img src="img/favorites/DB36.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB11.jpg">
                    <img src="img/favorites/DB11.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB13.jpg">
                    <img src="img/favorites/DB13.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB27.jpg">
                    <img src="img/favorites/DB27.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB84.jpg">
                    <img src="img/favorites/DB84.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB39.jpg">
                    <img src="img/favorites/DB39.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB35.jpg">
                    <img src="img/favorites/DB35.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB30.jpg">
                    <img src="img/favorites/DB30.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB67.jpg">
                    <img src="img/favorites/DB67.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB83.jpg">
                    <img src="img/favorites/DB83.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB50.jpg">
                    <img src="img/favorites/DB50.jpg" alt="">
                </a>
            </div>
           
             
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB97.jpg">
                    <img src="img/favorites/DB97.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB110.jpg">
                    <img src="img/favorites/DB110.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB61.jpg">
                    <img src="img/favorites/DB61.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB54.jpg">
                    <img src="img/favorites/DB54.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB68.jpg">
                    <img src="img/favorites/DB68.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB82.jpg">
                    <img src="img/favorites/DB82.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB89.jpg">
                    <img src="img/favorites/DB89.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB93.jpg">
                    <img src="img/favorites/DB93.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB100.jpg">
                    <img src="img/favorites/DB100.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB98.jpg">
                    <img src="img/favorites/DB98.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB121.jpg">
                    <img src="img/favorites/DB121.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB129.jpg">
                    <img src="img/favorites/DB129.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB173.jpg">
                    <img src="img/favorites/DB173.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB176.jpg">
                    <img src="img/favorites/DB176.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB178.jpg">
                    <img src="img/favorites/DB178.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB195.jpg">
                    <img src="img/favorites/DB195.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB182.jpg">
                    <img src="img/favorites/DB182.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB188.jpg">
                    <img src="img/favorites/DB188.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB190.jpg">
                    <img src="img/favorites/DB190.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB196.jpg">
                    <img src="img/favorites/DB196.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB44.jpg">
                    <img src="img/favorites/DB44.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB45.jpg">
                    <img src="img/favorites/DB45.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB78.jpg">
                    <img src="img/favorites/DB78.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB53.jpg">
                    <img src="img/favorites/DB53.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB24.jpg">
                    <img src="img/favorites/DB24.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB106.jpg">
                    <img src="img/favorites/DB106.jpg" alt="">
                </a>
            </div>
            
        </div>

    </div>
</aside>
<!-- /pictuire Gallery -->
</div>
</div>
</div>
</div>

<!-- Container (America Section) -->
<div id="America" class="container-fluid">
  <div class="container col-sm-9">
  <div class="row">
    <div class="col-sm-6">
  <header class="entry-header">
    <h1 class="entry-title text-left"><strong>America</strong></h1>
    <hr>
  </header>
  
<p>
  <strong><em>THE UNIVERSITY HOUSE OF PRAYER AT<br />
  UNIVERSITY OF MEMPHIS</em><br />
</strong>
</p>
<p>
  <strong>THE NEED</strong>
</p>
<p>The college years (18-25) are crucial years in a young person’s life. Decisions made during this season will affect the rest of their life and future generations. They can launch, they can tank, or they can set off down a path of mediocrity that will plague them for years to come.
</p>
</div>
<div class="col-sm-4">
 <p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
  <img class=" size-medium wp-image-25 alignright" src="img/uhop.jpg" alt="UHOP" width="350" height="300" sizes="(max-width: 300px) 100vw, 300px"></p>
</div>
</div>
<p><strong>THE OPPORTUNITIES</strong></p>
<p>The Lord provided two critical elements for a campus ministry: a great house just off campus and Joel Jassu. We met Joel on our first mission to Uganda and he is a lover of the Lord with a heart for prayer and ministry. We brought Joel from Uganda to attend the University of Memphis and he resides in the house.</p>
<p><strong>THE STRATEGY</strong></p>
<p>Establish a presence near campus and pray.</p>
<p><strong>THE STRATEGY IN MOTION</strong></p>
<ul>
<li>We moved Joel into the house at 643 Patterson in July 2014.</li>
<li>We began prayer walking the campus right away, praying for an outpouring of the Holy Spirit and connections to other pray-ers.</li>
<li>We met other campus ministers and began praying with and for them.</li>
<li>We have opened the house for student groups to come and pray.</li>
</ul>
<p>The primary emphasis is prayer …</p>
<ul>
<li>for the Spirit of God to be poured out on the University of Memphis</li>
<li>for students to come to know the love of God and His saving grace through the Lordship of Jesus Christ</li>
</ul>
<p>You can learn more about UHOP at <a href="http://www.uhopmemphis.com">www.uhopmemphis.com</a></p>
<p><a href="https://worldshineusa.wordpress.com/uhop-2/">Top</a></p>
  </div>
<div class="Container-fluid col-sm-3">
  <div class="Container" style="color:#777;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
  <span>Would you consider becoming a partner?</span><br>
  You have 2 options:<br>
Wepay: 
<a href="https://www.aplos.com/aws/give/WorldShineUSA/donation">
  <img src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" alt="Small Donate Button" />
</a> 
<br>
Paypal: 
<span style="color:#ffffff;"> .
</span>
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=VQHRZHVDGBKNL">
  <img src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" alt="Small Donate Button" /></a><br>
<span style="font-size:xx-small;">
  <em>(Clicking Donate will take you to a donation page where you can donate with a major credit card or your checking account)</em></span>
 <p><b><i>Follow Us On;</i></b></p>
<aside id="wpcom_social_media_icons_widget-2" class="widget widget_wpcom_social_media_icons_widget" style="padding-left: 30px">
    <!-- Social Media links -->
      <a href="https://www.facebook.com/worldshineusa/" class="genericon genericon-facebook" target="_blank">
        <img src="img/facebook.png">
      </a>&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="https://www.twitter.com/worldshineusa/" class="genericon genericon-facebook" target="_blank">
        <img src="img/twitter.png">
      </a>
   <!--  End of social media links -->
</aside>
<!-- picture Gallery -->
<aside id="media_gallery-9" class="widget widget_media_gallery">
  <h1 class="widget-title">Picture Gallery</h1>
      <div class="tz-gallery">

        <div class="row">
          <div class="col-sm-6 col-md-4" >
                <a class="lightbox" href="img/favorites/DB1.jpg">
                    <img src="img/favorites/DB1.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4" >
                <a class="lightbox" href="img/favorites/DB2.jpg">
                    <img src="img/favorites/DB2.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB4.jpg">
                    <img src="img/favorites/DB4.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB5.jpg">
                    <img src="img/favorites/DB5.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB6.jpg">
                    <img src="img/favorites/DB6.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB7.jpg">
                    <img src="img/favorites/DB7.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB29.jpg">
                    <img src="img/favorites/DB29.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB49.jpg">
                    <img src="img/favorites/DB49.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB23.jpg">
                    <img src="img/favorites/DB23.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB16.jpg">
                    <img src="img/favorites/DB16.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB37.jpg">
                    <img src="img/favorites/DB37.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB17.jpg">
                    <img src="img/favorites/DB17.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB15.jpg">
                    <img src="img/favorites/DB15.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB55.jpg">
                    <img src="img/favorites/DB55.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB41.jpg">
                    <img src="img/favorites/DB41.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB36.jpg">
                    <img src="img/favorites/DB36.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB11.jpg">
                    <img src="img/favorites/DB11.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB13.jpg">
                    <img src="img/favorites/DB13.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB27.jpg">
                    <img src="img/favorites/DB27.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB84.jpg">
                    <img src="img/favorites/DB84.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB39.jpg">
                    <img src="img/favorites/DB39.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB35.jpg">
                    <img src="img/favorites/DB35.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB30.jpg">
                    <img src="img/favorites/DB30.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB67.jpg">
                    <img src="img/favorites/DB67.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB83.jpg">
                    <img src="img/favorites/DB83.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB50.jpg">
                    <img src="img/favorites/DB50.jpg" alt="">
                </a>
            </div>
           
             
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB97.jpg">
                    <img src="img/favorites/DB97.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB110.jpg">
                    <img src="img/favorites/DB110.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB61.jpg">
                    <img src="img/favorites/DB61.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB54.jpg">
                    <img src="img/favorites/DB54.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB68.jpg">
                    <img src="img/favorites/DB68.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB82.jpg">
                    <img src="img/favorites/DB82.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB89.jpg">
                    <img src="img/favorites/DB89.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB93.jpg">
                    <img src="img/favorites/DB93.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB100.jpg">
                    <img src="img/favorites/DB100.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB98.jpg">
                    <img src="img/favorites/DB98.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB121.jpg">
                    <img src="img/favorites/DB121.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB129.jpg">
                    <img src="img/favorites/DB129.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB173.jpg">
                    <img src="img/favorites/DB173.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB176.jpg">
                    <img src="img/favorites/DB176.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB178.jpg">
                    <img src="img/favorites/DB178.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB195.jpg">
                    <img src="img/favorites/DB195.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB182.jpg">
                    <img src="img/favorites/DB182.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB188.jpg">
                    <img src="img/favorites/DB188.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB190.jpg">
                    <img src="img/favorites/DB190.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB196.jpg">
                    <img src="img/favorites/DB196.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB44.jpg">
                    <img src="img/favorites/DB44.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB45.jpg">
                    <img src="img/favorites/DB45.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB78.jpg">
                    <img src="img/favorites/DB78.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB53.jpg">
                    <img src="img/favorites/DB53.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB24.jpg">
                    <img src="img/favorites/DB24.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB106.jpg">
                    <img src="img/favorites/DB106.jpg" alt="">
                </a>
            </div>
            
        </div>

    </div>
</aside>
<!-- /pictuire Gallery -->
</div>
</div>
</div> <!-- End (Amrican Container) -->

<!-- Container (Accomplishments Section) -->
<div id="Accomplishments" class="bg-1" style="padding-bottom: 30px">
  <div class="container-fluid">
  <div class="container col-sm-9">
  <header class="entry-header">
    <h1 class="entry-title text-left"><strong>Healing for the Nations International Convention</strong></h1>
    <h1>The Genesis and journey till to date</h1>
    <hr>
  </header>
<div style="text-align:justify;">World Shine USA is privileged to work alongside World Shine Ministries (WSM) Uganda for our efforts in Africa.  We have done direct ministry with WSM and we have worked to help improve their ministry efforts-efficiency, transparency, focus, and communication.   God has truly blessed the work of our collective hands. The support of our generous donors has helped us accomplished this list:</div>
<ol>
<li style="text-align:justify;">Bought a school bus for our World Shine Foundation Primary School (WSFPS).</li>
<li style="text-align:justify;">We launched the Emerging Leaders Institute to raise up young men and women in the knowledge of the Word.</li>
<li>We are mentoring young leaders to launch into the ministry of the workplace, as well as full time ministry.</li>
<li style="text-align:justify;">Our University House of Prayer (UHOP) led 1 mission of university students to Uganda during the summer.  They conducted a co-ed discipleship retreat with around 60 college-aged young adults, several evangelism events to spread the Gospel in southern Uganda, worked with the children of WSFPS, and did several improvement projects at WSFPS.</li>
<li style="text-align:justify;">WSUSA led 2 adult mission trips to Uganda from Memphis, conduction 2 discipleship retreats for young men, 2 discipleship retreats for young women, and several improvement projects at WSFPS.</li>
<li style="text-align:justify;">We conducted the annual WSM staff retreat in Uganda.</li>
<li style="text-align:justify;">Conducted or participated in many missions to preach the Gospel throughout Uganda in schools, churches, the cities, and rural communities. Hundreds chose to follow Jesus!</li>
<li style="text-align:justify;">We handed out local language Bibles in the Rwentobo area.</li>
<li style="text-align:justify;">We outfitted 50 beds in the boarding section of the school with mattresses, sheets, blankets, pillows, and mosquito nets.</li>
<li style="text-align:justify;">We donated many goats to the goat herd at the school.</li>
<li style="text-align:justify;">We contracted for teacher training.</li>
<li style="text-align:justify;">We started a second Vadieshkol youth fellowship in Rwentobo.</li>
<li style="text-align:justify;">UHOP started a third Vadieshkol youth fellowship in Memphis</li>
<li style="text-align:justify;">At the school we installed new bathrooms and latrines, installed a water collection system on one of the classroom blocks, installed lightening arresters and gutters on the assembly hall, and built a student hand washing station next to the kitchen.</li>
<li>We have worked with WSM to stabilize the funding of the ministry administration. All bills and salaries have been paid each month.</li>
<li style="text-align:justify;">Our partners gave the rest of the textbooks needed at the school, installed a playground for the nursery section of the school, built a library for the school, dug a well in the upper town of Rwentobo, and began the construction of a clinic for the school and the town.</li>
</ol>
<p><a href="#myPage">Top</a></p>
  </div>
<div class="Container-fluid col-sm-3">
  <div class="Container" style="color:#777;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
  <span>Would you consider becoming a partner?</span><br>
  You have 2 options:<br>
Wepay: 
<a href="https://www.aplos.com/aws/give/WorldShineUSA/donation">
  <img src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" alt="Small Donate Button" />
</a> 
<br>
Paypal: 
<span style="color:#ffffff;"> .
</span>
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=VQHRZHVDGBKNL">
  <img src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" alt="Small Donate Button" /></a><br>
<span style="font-size:xx-small;">
  <em>(Clicking Donate will take you to a donation page where you can donate with a major credit card or your checking account)</em></span>
  <p><b><i>Follow Us On;</i></b></p>
<aside id="wpcom_social_media_icons_widget-2" class="widget widget_wpcom_social_media_icons_widget" style="padding-left: 30px">
    <!-- Social Media links -->
      <a href="https://www.facebook.com/worldshineusa/" class="genericon genericon-facebook" target="_blank">
        <img src="img/facebook.png">
      </a>&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="https://www.twitter.com/worldshineusa/" class="genericon genericon-facebook" target="_blank">
        <img src="img/twitter.png">
      </a>
   <!--  End of social media links -->
</aside>
<!-- picture Gallery -->
<aside id="media_gallery-9" class="widget widget_media_gallery">
  <h1 class="widget-title">Picture Gallery</h1>
      <div class="tz-gallery">

        <div class="row">
          <div class="col-sm-6 col-md-4" >
                <a class="lightbox" href="img/favorites/DB1.jpg">
                    <img src="img/favorites/DB1.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4" >
                <a class="lightbox" href="img/favorites/DB2.jpg">
                    <img src="img/favorites/DB2.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB4.jpg">
                    <img src="img/favorites/DB4.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB5.jpg">
                    <img src="img/favorites/DB5.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB6.jpg">
                    <img src="img/favorites/DB6.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB7.jpg">
                    <img src="img/favorites/DB7.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB29.jpg">
                    <img src="img/favorites/DB29.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB49.jpg">
                    <img src="img/favorites/DB49.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB23.jpg">
                    <img src="img/favorites/DB23.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB16.jpg">
                    <img src="img/favorites/DB16.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB37.jpg">
                    <img src="img/favorites/DB37.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB17.jpg">
                    <img src="img/favorites/DB17.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB15.jpg">
                    <img src="img/favorites/DB15.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB55.jpg">
                    <img src="img/favorites/DB55.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB41.jpg">
                    <img src="img/favorites/DB41.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB36.jpg">
                    <img src="img/favorites/DB36.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB11.jpg">
                    <img src="img/favorites/DB11.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB13.jpg">
                    <img src="img/favorites/DB13.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB27.jpg">
                    <img src="img/favorites/DB27.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB84.jpg">
                    <img src="img/favorites/DB84.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB39.jpg">
                    <img src="img/favorites/DB39.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB35.jpg">
                    <img src="img/favorites/DB35.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB30.jpg">
                    <img src="img/favorites/DB30.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB67.jpg">
                    <img src="img/favorites/DB67.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB83.jpg">
                    <img src="img/favorites/DB83.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB50.jpg">
                    <img src="img/favorites/DB50.jpg" alt="">
                </a>
            </div>
           
             
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB97.jpg">
                    <img src="img/favorites/DB97.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB110.jpg">
                    <img src="img/favorites/DB110.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB61.jpg">
                    <img src="img/favorites/DB61.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB54.jpg">
                    <img src="img/favorites/DB54.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB68.jpg">
                    <img src="img/favorites/DB68.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB82.jpg">
                    <img src="img/favorites/DB82.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB89.jpg">
                    <img src="img/favorites/DB89.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB93.jpg">
                    <img src="img/favorites/DB93.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB100.jpg">
                    <img src="img/favorites/DB100.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB98.jpg">
                    <img src="img/favorites/DB98.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB121.jpg">
                    <img src="img/favorites/DB121.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB129.jpg">
                    <img src="img/favorites/DB129.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB173.jpg">
                    <img src="img/favorites/DB173.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB176.jpg">
                    <img src="img/favorites/DB176.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB178.jpg">
                    <img src="img/favorites/DB178.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB195.jpg">
                    <img src="img/favorites/DB195.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB182.jpg">
                    <img src="img/favorites/DB182.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB188.jpg">
                    <img src="img/favorites/DB188.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB190.jpg">
                    <img src="img/favorites/DB190.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB196.jpg">
                    <img src="img/favorites/DB196.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB44.jpg">
                    <img src="img/favorites/DB44.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB45.jpg">
                    <img src="img/favorites/DB45.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB78.jpg">
                    <img src="img/favorites/DB78.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB53.jpg">
                    <img src="img/favorites/DB53.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB24.jpg">
                    <img src="img/favorites/DB24.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB106.jpg">
                    <img src="img/favorites/DB106.jpg" alt="">
                </a>
            </div>
            
        </div>

    </div>
</aside>
<!-- /pictuire Gallery -->
</div>
</div>
</div>
</div> <!-- End (Accomplishments Container) -->

<!-- Container (Donate Section) -->
<div id="Donate" class="container-fluid">
  <div class="container col-sm-9">
 
  <header class="entry-header">
    <h1 class="entry-title text-left"><strong>Donate</strong></h1>
    <hr>
  </header>
<p>World Shine USA is funded through donations from people like you. If you &#8230;</p>
<p style="padding-left:30px;">&#8230; have a heart for missions and for spreading the Gospel<br />
&#8230; have a heart for the poor and disadvantaged children of Africa<br />
&#8230; have a heart to see followers of Jesus Christ raised up through discipleship<br />
&#8230; have a heart for university age young adults to be raised up as Godly men and women<br />
&#8230; have a heart for the students of the University of Memphis</p>
<p>&#8230; then please consider donating to this ministry. We are dedicated to these things.</p>
<p>There are 4 specific areas into which you can sow:</p>
<ol>
<li><span style="text-decoration:underline;">World Shine USA</span>. These funds keep us returning to Uganda to disciple, bring much needed skill sets, promote transparency and accountability in finances, and encourage our African brothers and sisters.</li>
<li><span style="text-decoration:underline;">World Shine Ministries Uganda</span> &#8211; General use. These funds are used for administration and ministry activities.  Without a healthy administration, we cannot have a healthy ministry.</li>
<li><span style="text-decoration:underline;">Sponsorships</span> &#8211; You can fund impoverished children to attend our primary school in southwest Uganda, university students to attend university, or post-university students to attend our Emerging Leaders Institute.</li>
<li><span style="text-decoration:underline;">Projects</span> &#8211; anything from books / supplies for the school to building projects such as a library or classroom block &#8230; from laptops in our office or computer lab to a ministry van for missions &#8230;  whatever is on your heart to give is probably needed.</li>
</ol>
<p>Your donations are tax deductible because World Shine USA is a 501(c)(3) organization <span style="font-size:small;"><em>(Tax ID 47-2790161  Phone contact: 901.647.6323)</em></span>. <span style="color:#000000;">Would you consider becoming a partner?</span></p>
<p><span style="color:#000000;">You have 3 options for giving:<br />
</span><br />
1. Wepay:   <a href="https://www.aplos.com/aws/give/WorldShineUSA/donation"><img src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" alt="Donate Button" /></a><br />
2. Paypal: <span style="color:#ffffff;"> .  </span><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=VQHRZHVDGBKNL"><img src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" alt="Donate Button" /></a><br />
<span style="font-size:xx-small;"><em>      (Clicking Donate will take you to a donation page where you can donate with a major credit card or your checking account)</em></span></p>
<p>3. Mail a check to:<br />
World Shine USA<br />
P.O. Box 38444<br />
Germantown, TN  38183</p>
  </div>
<div class="Container-fluid col-sm-3">
  <div class="Container" style="color:#777;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
  <span>Would you consider becoming a partner?</span><br>
  You have 2 options:<br>
Wepay: 
<a href="https://www.aplos.com/aws/give/WorldShineUSA/donation">
  <img src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" alt="Small Donate Button" />
</a> 
<br>
Paypal: 
<span style="color:#ffffff;"> .
</span>
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=VQHRZHVDGBKNL">
  <img src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" alt="Small Donate Button" /></a><br>
<span style="font-size:xx-small;">
  <em>(Clicking Donate will take you to a donation page where you can donate with a major credit card or your checking account)</em></span>
  <p><b><i>Follow Us On;</i></b></p>
<aside id="wpcom_social_media_icons_widget-2" class="widget widget_wpcom_social_media_icons_widget" style="padding-left: 30px">
    <!-- Social Media links -->
      <a href="https://www.facebook.com/worldshineusa/" class="genericon genericon-facebook" target="_blank">
        <img src="img/facebook.png">
      </a>&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="https://www.twitter.com/worldshineusa/" class="genericon genericon-facebook" target="_blank">
        <img src="img/twitter.png">
      </a>
   <!--  End of social media links -->
</aside>
<!-- picture Gallery -->
<aside id="media_gallery-9" class="widget widget_media_gallery">
  <h1 class="widget-title">Picture Gallery</h1>
      <div class="tz-gallery">

        <div class="row">
          <div class="col-sm-6 col-md-4" >
                <a class="lightbox" href="img/favorites/DB1.jpg">
                    <img src="img/favorites/DB1.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4" >
                <a class="lightbox" href="img/favorites/DB2.jpg">
                    <img src="img/favorites/DB2.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB4.jpg">
                    <img src="img/favorites/DB4.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB5.jpg">
                    <img src="img/favorites/DB5.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB6.jpg">
                    <img src="img/favorites/DB6.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB7.jpg">
                    <img src="img/favorites/DB7.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB29.jpg">
                    <img src="img/favorites/DB29.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB49.jpg">
                    <img src="img/favorites/DB49.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB23.jpg">
                    <img src="img/favorites/DB23.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB16.jpg">
                    <img src="img/favorites/DB16.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB37.jpg">
                    <img src="img/favorites/DB37.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB17.jpg">
                    <img src="img/favorites/DB17.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB15.jpg">
                    <img src="img/favorites/DB15.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB55.jpg">
                    <img src="img/favorites/DB55.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB41.jpg">
                    <img src="img/favorites/DB41.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB36.jpg">
                    <img src="img/favorites/DB36.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB11.jpg">
                    <img src="img/favorites/DB11.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB13.jpg">
                    <img src="img/favorites/DB13.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB27.jpg">
                    <img src="img/favorites/DB27.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB84.jpg">
                    <img src="img/favorites/DB84.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB39.jpg">
                    <img src="img/favorites/DB39.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB35.jpg">
                    <img src="img/favorites/DB35.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB30.jpg">
                    <img src="img/favorites/DB30.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB67.jpg">
                    <img src="img/favorites/DB67.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB83.jpg">
                    <img src="img/favorites/DB83.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB50.jpg">
                    <img src="img/favorites/DB50.jpg" alt="">
                </a>
            </div>
           
             
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB97.jpg">
                    <img src="img/favorites/DB97.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB110.jpg">
                    <img src="img/favorites/DB110.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB61.jpg">
                    <img src="img/favorites/DB61.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB54.jpg">
                    <img src="img/favorites/DB54.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB68.jpg">
                    <img src="img/favorites/DB68.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB82.jpg">
                    <img src="img/favorites/DB82.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB89.jpg">
                    <img src="img/favorites/DB89.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB93.jpg">
                    <img src="img/favorites/DB93.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB100.jpg">
                    <img src="img/favorites/DB100.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB98.jpg">
                    <img src="img/favorites/DB98.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB121.jpg">
                    <img src="img/favorites/DB121.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB129.jpg">
                    <img src="img/favorites/DB129.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB173.jpg">
                    <img src="img/favorites/DB173.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB176.jpg">
                    <img src="img/favorites/DB176.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB178.jpg">
                    <img src="img/favorites/DB178.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB195.jpg">
                    <img src="img/favorites/DB195.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB182.jpg">
                    <img src="img/favorites/DB182.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB188.jpg">
                    <img src="img/favorites/DB188.jpg" alt="">
                </a>
            </div>
              <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB190.jpg">
                    <img src="img/favorites/DB190.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB196.jpg">
                    <img src="img/favorites/DB196.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB44.jpg">
                    <img src="img/favorites/DB44.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/favorites/DB45.jpg">
                    <img src="img/favorites/DB45.jpg" alt="">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB78.jpg">
                    <img src="img/favorites/DB78.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB53.jpg">
                    <img src="img/favorites/DB53.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB24.jpg">
                    <img src="img/favorites/DB24.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/favorites/DB106.jpg">
                    <img src="img/favorites/DB106.jpg" alt="">
                </a>
            </div>
            
        </div>

    </div>
</aside>
<!-- /pictuire Gallery -->
</div>
</div>
</div> <!-- End (Donate Container) -->

<!-- Add Google Maps -->
<!-- <div id="googleMap"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<script type="text/javascript">
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>
