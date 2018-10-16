<!doctype html>
<html lang="en" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="images/hld_logo.png" sizes="16x16">

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
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-sm navbar-light bg-nav" id="navbar">
          <div class="container">
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-band col-3 d-md-none d-block">
                <a href="#"><img src="images/hld_logo.png" class="img img-fluid"></a>
              </div>
              <div class="collapse navbar-collapse justify-content-md-center" id="navbar1">
                <ul class="navbar-nav">
                    <li class="nav-item nav-item-padding">
                        <div class="dropdown">
                          <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HOME</a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item d-md-block d-none" href="#how_it_works_l">HOW IT WORKS?</a>
                            <a class="dropdown-item d-md-none d-block" href="#how_it_works_s">HOW IT WORKS?</a>
                            <a class="dropdown-item" href="#get_involved">GET INVOLVED</a>
                          </div>
                        </div>
                    </li>
                    <li class="nav-item nav-item-padding" id="join">
                        <a class="nav-link" href="join_hl.php">JOIN HL BD FAMILY</a>
                    </li>
                    <li class="nav-item nav-item-padding" id="contact">
                        <a class="nav-link" href="#contact_us">CONTACT</a>
                    </li>
                </ul>
              </div>
          </div>
      </nav>

      <!--ABOUT HUMAN LIBRARY-->
      <div class="hl-div">  
        <div class="d-flex h-100 text-center">
          <div class="col-md-8 offset-md-2 col-12" style="background-color: #f0ffffb5; padding: 50px 50px 50px 50px;">
            <h3 class="title">About Human Library Dhaka</h3>
            <p class="text-justify">
              Human Library Dhaka is a local branch of the Human Library Organization that was originally founded by Ronni Abergel in Denmark. It has been designed to fight stereotypes by teaching people to not judge a book by its cover. The library presents people as Human Books who have had experiences of prejudice due to their faith/color/gender/race/profession/lifestyle. In each session of the library, Human Books share those experiences with a group of 5-6 people we like to call “readers”. The readers in turn ask difficult questions which help them to step into the book’s shoes and understand the book better. There are around 3-5 sessions in one day.
            </p>
            
            <h3 class="title">Why visit us?</h3>
            <p class="text-justify">
              You can help Bangladesh to be the most inclusive society by lending your ears to those who have felt unheard and misunderstood for so long. Your 20 minutes of time can break a stereotype which will not only make a person feel more included but also help you take lessons from someone else’s experience.
            </p>        
          </div>
        </div>
      </div>

      <!--WORK FLOW DIV for LARGE SCREEN-->
      <div class="d-md-block d-none text-center bg-alt h-100" id="how_it_works_l">
        <div class="d-flex h-100">
          <div class="col-md-8 offset-md-2 col-12 align-self-center">
          <h3 class="title">How does it work?</h3>
          <div class="col-4 step-lg">
            <h5 class="hld-color">STEP ONE</h5>
            <p>Select the Human Books to be loaned</p>
          </div>
          <div class="col-4 offset-4 step-lg">
            <h5 class="hld-color">STEP TWO</h5>
            <p>Receive your library card with your scheduled readings</p>
          </div>
          <div class="col-4 offset-8 step-lg">
            <h5 class="hld-color">STEP THREE</h5>
            <p>Attend your reading sessions</p>
          </div>
          </div>
        </div>  
        <!-- <div class="text-center">
          <img class="img-fluid" src="https://static.wixstatic.com/media/f85b89_9d5c764e315f4312a6c4c4db7a67c950~mv2.png/v1/crop/x_0,y_15,w_1054,h_836/fill/w_621,h_493,al_c,q_80,usm_0.66_1.00_0.01/f85b89_9d5c764e315f4312a6c4c4db7a67c950~mv2.webp">
        </div> -->
      </div>

      <!--WORK FLOW DIV for SMALL SCREEN-->
      <div class="d-md-none d-block text-center content-div bg-alt" id="how_it_works_s">
        <div class="col-md-8 offset-md-2 col-12">
          <h1 class="title">How does it work?</h1>
          <div class="col-12 step-one-sm">
            <h5 class="hld-color">STEP ONE</h5>
            <p>Select the Human Books to be loaned</p>
          </div>
          <div class="col-12 step-two-sm">
            <h5 class="hld-color">STEP TWO</h5>
            <p>Receive your library card with your scheduled readings</p>
          </div>
          <div class="col-12 step-three-sm">
            <h5 class="hld-color">STEP THREE</h5>
            <p>Attend your reading sessions</p>
          </div>
        </div>
      </div>

      <!-- VIDEO -->
      <div class="col-md-8 offset-md-2 col-12">
        <video width="100%" controls loop autoplay>
          <source src="video/HLD.mp4" type="video/mp4">
          <source src="mov_bbb.ogg" type="video/ogg">
          Your browser does not support HTML5 video.
        </video>
      </div>      

      <!--SUBSCRIBE-->
      <!-- <div class="content-div">  
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
      </div> -->

      <!--Get Involved DIV-->
      <div class="text-center d-flex h-100 content-div" id="get_involved">
        <div class="col-md-8 offset-md-2 col-12 align-self-center">
          <h3 class="title">Get involved</h3>
          <div class="row text-center">
           
            <div class="col-md-6 col-12">
              <div class="figure">
                <div id="carouselExampleSlidesOnly" class="carousel carousel-fade figure-slider shadow-light div-rounded" data-ride="carousel" data-interval="2000" data-pause="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="images/book/1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/book/2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/book/3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/book/4.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/book/5.jpg" alt="Fifth slide">
                    </div>
                  </div>
                </div>
                
                <h4 class="figure-caption">
                  <a href="https://docs.google.com/forms/d/1fSeLQrGFC8zWPKNqPrAoNeUoFCXQY1QzvINkBByL1fM/edit" class="btn btn-reg">BE A BOOK</a>
                </h4>
              </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="figure">
                  <div id="carouselExampleSlidesOnly" class="carousel carousel-fade figure-slider shadow-light div-rounded" data-ride="carousel" data-interval="2223" data-pause="false">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="images/volunteer/1.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/volunteer/2.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/volunteer/3.jpg" alt="Third slide">
                      </div>
                    </div>
                  </div>
                  
                  <h4 class="figure-caption">
                    <a href="https://docs.google.com/forms/d/14O7mzIkqqp0YcJj-ravOMdsXc5DcsnIzSaFUpN7fRCE/viewform?edit_requested=true" class="btn btn-reg">BE A VOLUNTEER</a>
                  </h4>
                </div>
            </div>
          </div>
        </div>  
      </div>

      <!--Courasel-->
      <div class="content-div">
        <div class="col-md-8 offset-md-2 col-12">
        <div id="carouselExampleIndicators" class="carousel slide figure-slider" data-ride="carousel" data-interval="2000" data-pause="false">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner" style="max-height: 65vh; min-height: 65vh;">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/images/1.jpg" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/images/2.jpg" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/images/3.jpg" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/images/4.jpg" alt="">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/images/5.jpg" alt="">
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
        </div>
      <div>  
      <!-- PARTNER DIV -->
      <div class="container text-center d-flex h-100  ">
        <div class="row align-self-center">
          <div class="col-md-8 offset-md-2 col-12 mx-auto">
            <h3 class="title text-center">Our previous partners</h3>
            <div class="row">
              <div class="col-md-3 offset-md-1 col-4 logo-div vertical">
                <img src="images/logo/HL.png" class="img img-fluid">
              </div>
              <div class="col-md-3 offset-md-1 col-4 logo-div vertical">
                <img src="images/logo/EMK.jpg" class="img img-fluid">
              </div>
              <div class="col-md-3 offset-md-1 col-4 logo-div vertical">
                <img src="images/logo/bc.jpg" class="img img-fluid">
              </div>
              <div class="col-md-3 offset-md-1 col-4 logo-div vertical">
                <img src="images/logo/garb.jpg" class="img img-fluid">
              </div>
              <div class="col-md-3 offset-md-1 col-4 logo-div vertical">
                <img src="images/logo/zb.png" class="img img-fluid">
              </div>
              <div class="col-md-3 offset-md-1 col-4 logo-div vertical">
                <img src="images/logo/psb.png" class="img img-fluid">
              </div>
              <div class="col-md-3 offset-md-1 col-4 logo-div vertical">
                <img src="images/logo/tmcb.png" class="img img-fluid">
              </div>
              <div class="col-md-3 offset-md-1 col-4 logo-div vertical">
                <img src="images/logo/ulab.jpg" class="img img-fluid">
              </div>
              <div class="col-md-3 offset-md-1 col-4 logo-div vertical">
                <img src="images/logo/sb.png" class="img img-fluid">
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <!--Contact-->
      <!-- <div class="bg-dark text-light text-center content-div" id="contact_us">  
        <div class="col-12">
          <h3 class="title" style="color: #fff;">Contact us</h3>
          <div class="row">
            <div class="col-md col-12">
              <h1 class="contact-icon"><i class="fab fa-facebook-f"></i></h1>
              <h6>facebook/humanlibrarydhaka</h6>
            </div>
            <div class="col-md col-12">
              <h1 class="contact-icon"><i class="fas fa-phone"></i></h1>
              <h6>+8801723880554</h6>
            </div>
            <div class="col-md col-12">
              <h1 class="contact-icon"><i class="far fa-envelope"></i></h1>
              <h6>info@humanlibrarybd.org</h6>
            </div>
          </div>
        </div>
      </div> -->

    </div> 

    <script>
      window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (currentScrollPos<=120) {
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