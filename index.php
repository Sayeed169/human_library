<?php
  include 'consts.php';
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="resources/images/hld_logo.png" sizes="16x16">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- IBM Plex Sans -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet"> 

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Human Library Bangladesh</title>

  </head>
  <body class="h-100">
    <div class="h-100">
      <!-- <div class="bg-light text-center" id="nav-image">
        <img src=<?php echo HL_LOGO;?> width="128" height="128" style="margin: 10px;" class="d-inline-block align-bottom" alt="">
      </div> -->

      <nav class="navbar navbar-expand-sm navbar-light bg-light" id="navbar">
          <div class="container">
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-md-center" id="navbar1">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="dropdown">
                          <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-home"></i> HOME</a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" id="how_it_works" href="#"><i class="fas fa-home"></i> HOW IT WORKS?</a>
                            <a class="dropdown-item" id="get_update" href="#"><i class="fas fa-comment"></i> GET UPDATES</a>
                            <a class="dropdown-item" id="get_involved" href="#"><i class="fas fa-comment-alt"></i> GET INVOLVED</a>
                          </div>
                        </div>
                    </li>
                    <li class="nav-item" id="join">
                        <a class="nav-link" href="#"><i class="fas fa-clipboard-list"></i> JOIN THE HL FAMILY</a>
                    </li>
                    <li class="nav-item" id="contact">
                        <a class="nav-link" href="#"><i class="fas fa-chart-line"></i> CONTACT</a>
                    </li>
                </ul>
              </div>
          </div>
      </nav>

      <!--WHAT IS HUMAN LIBRARY DIV-->
      <div class="hl-div">
        <div class="text-center text-dark col-md-6 offset-md-3 col-12 content-div">
          <img class="img-fluid" src="resources/images/hld_banner.png">&nbsp;
          <h3 class="title">About Human Library Dhaka</h3>
          <p class="text-justify">
            Human Library Dhaka is a local branch of the Human Library Organization that was originally founded by Ronni Abergel in Denmark. It has been designed to fight stereotypes by teaching people to not judge a book by its cover. The library presents people as Human Books who have had experiences of prejudice due to their faith/color/gender/race/profession/lifestyle. In each session of the library, Human Books share those experiences with a group of 5-6 people we like to call “readers”. The readers in turn ask difficult questions which help them to step into the book’s shoes and understand the book better. There are around 3-5 sessions in one day.
          </p>
          
          <h3 class="title">Why visit us?</h3>
          <p class="text-justify">
            You can help Bangladesh to be the most inclusive society by lending your ears to those who have felt unheard and misunderstood for so long. Your 20 minutes of time can break a stereotype which will not only make a person feel more included but also help you take lessons from someone else’s experience.
          </p>
          
          <div>
            <a href="#"><i class="fab fa-facebook-f fb-icon"></i></a>
          </div>
            
        </div>
        <!-- <div class="text-center">
          <h1><i class="fas fa-angle-double-down text-dark"></i></h1>
        </div> -->
      </div>

      <!-- VIDEO -->
      <div class="">
        <!-- The video -->
        <video autoplay muted loop id="myVideo">
          <source src="resources/video/Human Library Dhaka.MKV" type="video/mp4">
        </video>

        <!-- Overlay text to describe the video -->
        <div class="content d-none">
          <h1>Heading</h1>
          <p>Lorem ipsum...</p>
          <!-- Use a button to pause/play the video with JavaScript -->
          <button id="myBtn" onclick="myFunction()">Pause</button>
        </div>
      </div>
      
      <!--WORK FLOW DIV for LARGE SCREEN-->
      <div class="d-md-block d-none text-center content-div">
        <div class="col-md-8 offset-md-2 col-12">
          <h3 class="title">How does it work?</h3>
          <div class="col-4 border border-dark border-top-0 border-right-0">
            <h5 class="hld-color">STEP ONE</h5>
            <p>Select the Human Books to be loaned</p>
          </div>
          <div class="col-4 offset-4 border border-dark border-top-0 border-right-0">
            <h5 class="hld-color">STEP TWO</h5>
            <p>Receive your library card with your scheduled readings</p>
          </div>
          <div class="col-4 offset-8 border border-dark border-top-0 border-right-0">
            <h5 class="hld-color">STEP THREE</h5>
            <p>Attend your reading sessions</p>
          </div>
        </div>
        <div class="text-center">
          <img class="img-fluid" src="https://static.wixstatic.com/media/f85b89_9d5c764e315f4312a6c4c4db7a67c950~mv2.png/v1/crop/x_0,y_15,w_1054,h_836/fill/w_621,h_493,al_c,q_80,usm_0.66_1.00_0.01/f85b89_9d5c764e315f4312a6c4c4db7a67c950~mv2.webp">
        </div>
      </div>

      <!--WORK FLOW DIV for SMALL SCREEN-->
      <div class="d-md-none d-block text-center content-div">
        <div class="col-md-8 offset-md-2 col-12">
          <h1 class="content-div">How does it work?</h1>
          <div class="col-12 border border-dark border-right-0 border-top-0">
            <h5 class="hld-color">STEP ONE</h5>
            <p>Select the Human Books to be loaned</p>
          </div>
          <div class="col-12 border border-dark border-left-0 border-top-0">
            <h5 class="hld-color">STEP TWO</h5>
            <p>Receive your library card with your scheduled readings</p>
          </div>
          <div class="col-12 border border-dark border-top-0 border-right-0">
            <h5 class="hld-color">STEP THREE</h5>
            <p>Attend your reading sessions</p>
          </div>
        </div>
        <div class="text-center">
          <img class="img-fluid" src="https://static.wixstatic.com/media/f85b89_9d5c764e315f4312a6c4c4db7a67c950~mv2.png/v1/crop/x_0,y_15,w_1054,h_836/fill/w_621,h_493,al_c,q_80,usm_0.66_1.00_0.01/f85b89_9d5c764e315f4312a6c4c4db7a67c950~mv2.webp">
        </div>
      </div>

      <!--SUBSCRIBE-->
      <div class="d-none content-div">  
        <div class="col-md-6 offset-md-3 col-12 content-div">
          <h3 class="text-center">Join our mailing list!</h3>
          <p class="text-center">Receive the latest updates about our upcoming events!</p>
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address<i class="text-danger"> *</i></label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputFirstName1">First Name</label>
              <input type="text" class="form-control" id="exampleInputFirstName1">
            </div>
            <div class="form-group">
              <label for="exampleInputLastName1">Last Name</label>
              <input type="text" class="form-control" id="exampleInputLastName1">
            </div>
            <button type="subscribe" class="btn btn-primary">Subscribe</button>
          </form>
        </div>
      </div>

      <!--Courasel-->
      <div id="carouselExampleIndicators" class="carousel carousel-fade col-8 offset-2" data-ride="carousel" data-interval="2000" data-pause="false" style="height: 70vh; overflow: hidden !important;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="resources/images/1.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="resources/images/2.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="resources/images/3.jpg" alt="">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="resources/images/4.jpg" alt="">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- JOURNEY SO FAR -->
      <div class="bg-alt content-div text-center">
        <div class="col-md-8 offset-md-2 col-12">
          <h3 class="title">Journey so far</h3>
          <div class="row">
            <div class="col-md col-12 count">
              <i class="fas fa-book"></i>
              <h3 class="count-header">50</h3>
              <p class="hld-color">Books</p>
            </div>
            <div class="col-md col-12 count">
              <i class="fas fa-glasses"></i>
              <h3 class="count-header">100</h3>
              <p class="hld-color">Readers</p>
            </div>
            <div class="col-md col-12 count">
              <i class="fas fa-clipboard-check"></i>
              <h3 class="count-header">04</h3>
              <p class="hld-color">Sessions</p>
            </div>
          </div>
        </div>
      </div>

      <!--Get Involved DIV-->
      <div class="">
        <div class="col-md-8 offset-md-2 col-12 text-center content-div">
          <h3 class="title">Get involved</h3>
          <div class="row text-center">
            <div class="col-md-6 col-12">
              <div class="figure">
                <img src="resources/images/be_a_b.jpg" class="img-fluid rounded shadow-light" alt="Become a book in Human Library Bangladesh">
                <h4 class="figure-caption">
                  <a href="http://bit.ly/2ws01TI" class="btn btn-reg">BE A BOOK</a>
                </h4>
              </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="figure">
                  <img src="resources/images/be_a_v2.jpg" class="img-fluid rounded shadow-light" alt="Become a volunteer in Human Library Bangladesh">
                  <h4 class="figure-caption">
                    <a href="http://bit.ly/2ws01TI" class="btn btn-reg">BE A VOLUNTEER</a>
                  </h4>
                </div>
            </div>
          </div>
        </div>  
      </div>

      <!--Contact-->
      <div class="bg-alt text-center content-div">  
        <div class="col-12">
          <h3 class="title">Contact us</h3>
          <div class="row">
            <div class="col-md col-12">
              <h1 class="contact-icon"><i class="fab fa-facebook-f"></i></h1>
              <h6>facebook/human library bd</h6>
            </div>
            <div>
              <h1 class="contact-icon"><i class="fas fa-phone"></i></h1>
              <h6 class="col-md col-12">+8801723880554</h6>
            </div>
            <div class="col-md col-12">
              <h1 class="contact-icon"><i class="far fa-envelope"></i></h1>
              <h6 class="">humanlibrarydhaka@gmail.com</h6>
            </div>
          </div>
        </div>
      </div>

    </div> 

    <script>
      window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (currentScrollPos<=80) {
          document.getElementById("navbar").classList.remove("fixed-top");
        } else {
          document.getElementById("navbar").classList.add("fixed-top");
        }
      }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>