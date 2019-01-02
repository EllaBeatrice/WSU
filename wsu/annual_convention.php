<!DOCTYPE html>
<html lang="en">
<head>

  <title>Annual Convention – Reach . Raise . Release</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/gallery-grid.css">
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
      <a class="navbar-brand" href="#myPage"><b>WORLD SHINE USA --<i>Annual Convention</i></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#gallery">GALLERY</a></li>
        <li><a href="index.php">Back</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<!-- Container ( Convention Section) -->


<div id="myPage" class="bg-1" style="padding-bottom: 30px">
  <div class="carousel slide" data-ride="carousel">
   <img src="img/convention/2.png" width="1353px" height="650px" >
</div>
  <div class="container-fluid">
  <div class="container">
  <header class="entry-header">
    <h1 class="entry-title text-left"><strong>Healing for the Nations International Convention</strong></h1>
    <p><b>The Genesis and journey till to date</b></p>
    <hr>
  </header>
<div style="text-align:justify;">
  <p>It all started in 2014 when the idea was born to start a great Healing for the Nations International Convention, with a big turn up of 2000 people at Ntinda primary school ground, this was initiated as a way to reach people with the gospel. This was really amazing as we saw people emerging from different denominations coming to preach Jesus, and nothing less or more; at the end of the gospel we saw no fights and no controversies in the gospel, more than 500 souls turned to Christ, dozens and dozens of people getting healed and totally delivered, families restored. We chose to do various forums which included Medical, Education, Governance, Art and entertainment, Security, Church forums which brought all church leaders together, Business forums and the Marriage forums, some of these happened in the western part of Uganda and also in Kampala area.</p>
<p>In 2015 we used the same grounds and this time around we saw more than 5,000 people turn up to be ministered to. We also witnessed excitement, the joy of salvation and many people gave their lives to Christ, some were healed and delivered during the ministry clinics that we set up during the event. We received more than 50 delegates from Africa and the rest of the world, these together with our local delegates here were able to make the convention a great success. </p>
<p>2016 was yet another great convention taking place in western Uganda-Rwentobo at World Shine Foundation School grounds. Since then we have had three other conventions in the same location with increasing numbers of attendance ranging from 20,000 people in 2016, 25,000 people in 2017 to 30,000 people in the May 2018 convention. These assemblies have brought many people across the globe who have witnessed salvation, healing and deliverance and therefore we believe our goal was achieved. </p>
<p>Please pray for us as we plan for the 2019 convention 6.</p>
</div>
</div>
</div>
</div>
<!-- Gallery Section -->
<div class="tz-gallery" id="gallery">

        <div class="row">
          <h1 style="text-align: center;"><strong>Moments of the May 2018 Convention in Pictures</strong></h1>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/grad/1.jpg">
                    <img src="img/grad/1.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/grad/2.jpg">
                    <img src="img/grad/2.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/grad/3.jpg">
                    <img src="img/grad/3.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/grad/4.jpg">
                    <img src="img/grad/4.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/grad/5.jpg">
                    <img src="img/grad/5.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/grad/6.jpg">
                    <img src="img/grad/6.jpg" alt="">
                </a>
            </div>
        </div>
  </div>
<!-- /Gallery Section -->
<!-- /Convetion Section -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
