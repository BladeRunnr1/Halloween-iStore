<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>PHP login system!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="welcome.php">Hallowen Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li> -->
      

      
     
    </ul>
   <div class="container width-50">
   <form class="d-flex width-200" role="search">
        <input class="form-control me-200" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success ml-2" type="submit">Search</button>
      </form>
   </div>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>
  <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
  </div>
</nav>

<!-- <div class=" mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr> -->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="IMG/welcome to our website.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Welcome to Hallowen iStore</h2>
          <p>Unique and latest products</p>
          <button class="btn btn-danger">Todays Deals</button>
          <button class="btn btn-primary">Best Sold</button>
          <button class="btn btn-success">New Releases</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-4"  data-aos="zoom-in-down" data-aos-easing="linear"
     data-aos-duration="1500">
    <div class="row" data-aos="fade-down-left" data-aos-easing="linear"
     data-aos-duration="1500">
      <div class="col-md-4">
        <div class="card mb-4 box-shadow"  data-aos="zoom-in-down" data-aos-easing="linear"
     data-aos-duration="1500">
          <img class="card-img-top" data-src="IMG" alt="Thumbnail [100%x225]" style="display: block;"
            src="img/iphone 11 Red.jpg" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text">
              <center> <b>
                  <h3>₹46,900</h3>
                </b>₹59,900 (7% off) <br>Apple iphone 11 Red (64 GB)<br>Buy Now, Hurry Up</center>
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn">
                <button class="btn btn-success">Buy Now</button>
                <button class="btn btn-primary">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" data-src="IMG" alt="Thumbnail [100%x225]" style="display: block;"
            src="img/iphone 13 Pro Max - Seirra Blue.jpg" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text">
              <center> <b>
                  <h3>₹1,29,900</h3>
                </b>₹1,15,900 (11% off) <br>Apple iPhone 13 Pro Max (128 GB)<br>Buy Now, Hurry Up</center>
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn">
                <button class="btn btn-success">Buy Now</button>
                <button class="btn btn-primary">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" data-src="IMG" alt="Thumbnail [100%x225]" style="display: block;"
            src="IMG/iphone 13 Pink.jpg" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text">
              <center> <b>
                  <h3>₹59,900</h3>
                </b>₹65,900 (27% off) <br>Apple iphone 13 Pink (64 GB)<br>Buy Now, Hurry Up</center>
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn">
                <button class="btn btn-success">Buy Now</button>
                <button class="btn btn-primary">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top my-4" data-src="IMG" alt="Thumbnail [100%x225]" style="display: block;"
            src="IMG/OnePlus 10 Pro 5G (Emerald Forest, 8GB RAM, 128GB Storage).jpg" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text">
              <center> <b>
                  <h3>₹62,499</h3>
                </b>72,499 (18% off) <br>Oneplus 10R 5G (256 GB)<br>Buy Now, Hurry Up</center>
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn">
                <button class="btn btn-success">Buy Now</button>
                <button class="btn btn-primary">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top my-4" data-src="IMG" alt="Thumbnail [100%x225]" style="display: block;"
            src="IMG/OnePlus 7 Pro (Mirror Grey, 6GB RAM, 128GB Storage).jpg" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text">
              <center> <b>
                  <h3>₹36,399</h3>
                </b>₹45,299 (9% off) <br>Oneplus 7 Pro (128 GB)<br>Buy Now, Hurry Up</center>
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn">
                <button class="btn btn-success">Buy Now</button>
                <button class="btn btn-primary">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top my-4" data-src="IMG" alt="Thumbnail [100%x225]" style="display: block;"
            src="IMG/OnePlus 9 Pro 5G (Morning Mist, 8GB RAM, 128GB Storage).jpg" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text">
              <center> <b>
                  <h3>₹85,890</h3>
                </b>₹89,459 (4% off) <br>Oneplus 9 Pro (512 GB)<br>Buy Now, Hurry Up</center>
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn">
                <button class="btn btn-success">Buy Now</button>
                <button class="btn btn-primary">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top my-4" data-src="IMG" alt="Thumbnail [100%x225]" style="display: block;"
            src="IMG/Huawei P50 Pro 4G (Cocoa Gold, 8GB RAM, 256GB Storage).jpg" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text">
              <center> <b>
                  <h3>₹1,27,450</h3>
                </b>₹1,35,370 (3% off) <br>Huawei P50 Pro 5G(256 GB)<br>Buy Now, Hurry Up</center>
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn">
                <button class="btn btn-success">Buy Now</button>
                <button class="btn btn-primary">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top my-4" data-src="IMG" alt="Thumbnail [100%x225]" style="display: block;"
            src="IMG/Samsung Galaxy Z Fold3 5G (Phantom Silver, 12GB RAM, 256GB Storage).jpg"
            data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text">
              <center> <b>
                  <h3>₹1,52,450</h3>
                </b>₹1,85,499 (14% off) <br>Samsung Galaxy Z Fold3 5G (128 GB)<br>Buy Now, Hurry Up</center>
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn">
                <button class="btn btn-success">Buy Now</button>
                <button class="btn btn-primary">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top my-4" data-src="IMG" alt="Thumbnail [100%x225]" style="display: block;"
            src="IMG/Mi 12 Pro  5G.jpg" data-holder-rendered="true">
          <div class="card-body">
            <p class="card-text">
              <center> <b>
                  <h3>₹95,000</h3>
                </b>₹1,12,000 (6% off) <br>Xiomi 12 Pro 5G(512 GB)<br>Buy Now, Hurry Up</center>
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn">
                <button class="btn btn-success">Buy Now</button>
                <button class="btn btn-primary">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



</div>

<footer class="container">
      <p class="float-right" style="text-align: right;"><a href=""  onclick='window.scrollTo({top: 0, behavior: "smooth"});'>Back to top</a></p>
      <p>© 2020-2021 iCoder, Inc. · <a href="#">Privacy</a> · <a href="">Terms</a></p>
    </footer>
    <!-- Optional JavaScript -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
 
  AOS.init();
</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>