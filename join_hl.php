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

      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-sm navbar-light" id="navbar">
          <div class="container">
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-band col-3">
                <a href="index.php"><img src="resources/images/hld_banner.png" class="img img-fluid"></a>
              </div>
              <div class="collapse navbar-collapse justify-content-md-end" id="navbar1">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item nav-item-padding">
                        <div class="dropdown">
                          <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HOME</a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" id="how_it_works" href="#">HOW IT WORKS?</a>
                            <a class="dropdown-item" id="get_update" href="#">GET UPDATES</a>
                            <a class="dropdown-item" id="get_involved" href="#">GET INVOLVED</a>
                          </div>
                        </div>
                    </li> -->
                    <li class="nav-item nav-item-padding">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item nav-item-padding" id="join">
                        <a class="nav-link" href="#">JOIN THE HL FAMILY</a>
                    </li>
                    <li class="nav-item nav-item-padding" id="contact">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                </ul>
              </div>
          </div>
      </nav>

      <!-- OPTIONS -->
      <div class="container">
        <div class="row text-center">
          <div class="col-md col-12">
            <div class="card card-shadow">
              <img class="card-img-top img img-fluid" src="resources/images/1.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Join as a Volunteer</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">Join us</a>
              </div>
            </div>
          </div>  
          <div class="col-md col-12">
            <div class="card card-shadow">
              <img class="card-img-top" src="resources/images/2.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Jon as a Book</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">Join us</a>
              </div>
            </div>
          </div>  
          <div class="col-md col-12">
            <div class="card card-shadow">
              <img class="card-img-top" src="resources/images/3.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Organise your own</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary">Join us</a>
              </div>
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
          // document.getElementById("navbar").classList.remove("navbar-light");
          document.getElementById("navbar").classList.remove("bg-nav");
        } else {
          document.getElementById("navbar").classList.add("fixed-top");
          // document.getElementById("navbar").classList.add("navbar-light");
          document.getElementById("navbar").classList.add("bg-nav");
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