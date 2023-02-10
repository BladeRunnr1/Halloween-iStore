<!-- <?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hallowen iStore</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

  <link rel="stylesheet" href="slive.css">
</head>

<body>
  <section>
    <div class="Navbar">
      <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Hallowen iStore</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>

              <li class="nav-item">
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>

              <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Shop By Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Mobiles</a></li>
                  <li><a class="dropdown-item" href="#">Computers</a></li>
                  <li><a class="dropdown-item" href="#">TV</a></li>
                  <li><a class="dropdown-item" href="#">Mens Fashion</a></li>
                  <li><a class="dropdown-item" href="#">Women's Fashion</a></li>
                  <li><a class="dropdown-item" href="#">Fitness</a></li>
                  <li><a class="dropdown-item" href="#">Sports</a></li>
                  <li><a class="dropdown-item" href="#">Bags</a></li>
                  <li><a class="dropdown-item" href="#">Luggage</a></li>
                  <li><a class="dropdown-item" href="#">Appliances</a></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Support</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Wanna work with us</a>
                  </li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
            <div class="mx-2">
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
              </button>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signupModal">
                SignUp
              </button>
          </div>
          



          <!-- Modal -->
          <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Login to Hallowen iStore</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="container mt-4">
<h3>Please Login Here:</h3>
<hr>

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>


          <!--SignUp Modal -->

          <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Create an Hallowen Account</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="container mt-4">
                    <h3>Please Register Here:</h3>
                    <hr>
                    <form action="" method="post">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Username</label>
                          <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Password</label>
                          <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword4">Confirm Password</label>
                          <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">
                        </div>
                      <div class="form-group">
                        <label for="inputAddress2">Address</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">City</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Check me out
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
      </nav>
    </div>
    </div>
    </div>
    </div>
    </nav>
    </div>
  </section>
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
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
      <div class="carousel-item">
        <img src="IMG/2. Clothing background.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>The Best Coding Blog</h2>
          <p>Technology News, Development and Trends</p>
          <button class="btn btn-danger">Technology</button>
          <button class="btn btn-primary">Web Development</button>
          <button class="btn btn-success">Tech Fun</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="IMG/3. table laptop.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Award winning Blog</h2>
          <p>Technology News, Development and Trends</p>
          <button class="btn btn-danger">Technology</button>
          <button class="btn btn-primary">Web Development</button>
          <button class="btn btn-success">Tech Fun</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
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
    </main>
    <footer class="container">
      <p class="float-right" style="text-align: right;"><a href="#">Back to top</a></p>
      <p>© 2020-2021 iCoder, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"></script>
</body>

</html>