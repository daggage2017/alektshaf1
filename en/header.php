<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Discovery World Company </title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css " rel="stylesheet">
    <link href="../css/fontawesome-all.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">


    <link href="../css/media.css" rel="stylesheet">
      <script src="../js/jquery-1.7.min.js"></script>
      <script src="../js/jquery.easing.1.3.js"></script>
      <script src="../js/tms-0.4.1.js"></script>
      <script>
          $(document).ready(function(){
              $('.slider')._TMS({
                  show:0,
                  pauseOnHover:true,
                  prevBu:'.prev',
                  nextBu:'.next',
                  playBu:false,
                  duration:500,
                  preset:'fade',
                  pagination:true,//'.pagination',true,'<ul></ul>'
                  pagNums:false,
                  slideshow:8000,
                  numStatus:false,
                  banners:'fromBottom',// fromLeft, fromRight, fromTop, fromBottom
                  waitBannerAnimation:false,
                  progressBar:false
              })

          })
          $(function(){
              if($(window).width() <= 1200)
              {
                  $("#slider .prev").css("left", "55px")
                  $("#slider .next").css("right", "55px")
              }
          })
      </script>
<!-- 8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <!--start top head -->
  <div class="top-head">
    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-4">
          <div class="logo-div">
            <div class="logo">
              <img class="img-responsive" src="../images/logo.png" alt="logo">
            </div>
            <div class="lang">
              <a href="../index.php"><img src="../images/ar.jpg" alt="ar"></a>
              <a href="index.php"><img src="../images/en.jpg" alt="en"></a>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-5">
          <div class="company">
            <h2>Discovery World Company</h2>
             <p>Gold detectors, treasures and groundwater </p>
          </div>
        </div>

        <div class="col-xs-12 col-sm-3">
          <div class="phone">
            <img class="img-responsive" src="../images/phone.png" alt="phone">
          </div>
        </div>

      </div>
    </div>
  </div>

 <!--end top head -->
<!--start navbar -->
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="aboutus.php"> About us</a></li>
       <li><a href="categories.php">Products </a></li>
         <li><a href="buy.php">Buy </a></li>
          <li><a href="contactus.php"> Contact us </a></li>
      </ul>
      
    </div><!-- /.navbar-collapse --> 
  </div><!-- /.container-fluid -->
</nav>
<!--end navbar -->



<!--start containt -->
  <div class="container-fluid">
    <div class="slinks">
      <a target="_blank" href="#"><i class="fab fa-facebook-square"></i> </a>
      <a target="_blank" href="#"><i class="fab fa-twitter-square"></i> </a>
      <a target="_blank" href="#"><i class="fab fa-google-plus-square"></i></a>
      <a target="_blank" href="#"><i class="fab fa-youtube-square"></i> </a>
    </div>





