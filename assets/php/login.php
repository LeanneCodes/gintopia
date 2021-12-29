<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GinTopia | Cocktail Making Class</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap CDN Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Birthstone&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Handlee&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">GinTopia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="allaboutgin.html">All About GIn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bookaclass.html">Book a Class</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.html">Contact Us</a>
            </li>
          </ul>
          <a class="nav-link sign-up active" aria-current="page" href="signup.html">Sign In / Sign Up</a>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->
    <hr>
    <h2>GinTopians Welcome</h2>
    <!-- Sign Up/Sign In -->
    <section class="signup-container">
      <div class="login">
        <h4>Existing GinTopians Sign In Here</h4>
        <div class="container">
          <form action="index.php" method="post">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" placeholder="jane@doe.com" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" placeholder="" required>
            </div>
            <button type="submit" name="login_btn" class="btn btn-secondary">Login</button>
          </form>
          <br>
          <p>No Account?<br><a class="register" href="register.php">Register Instead</a></p>
        </div>
      </div>
    </section>
    <!-- /.sign up/sign in -->
    <hr>
    <!-- Bottom Image -->
    <section>
      <div>
        <img class="signup-gin img-fluid" src="assets/images/blogger-gin.png" alt="gin-photo">
      </div>
    </section>
    <!-- /.bottom image -->
    <hr>
    <!-- Footer -->
    <section>
      <footer class="text-center text-white" style="background-color: #d3b488;">
        <!-- Social links grid container -->
        <div class="container p-4 pb-0">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" href="http://www.facebook.com" target="_blank" role="button"
          ><i class="fab fa-facebook-f"></i></a>
          <!-- Twitter -->
          <a class="btn btn-outline-light btn-floating m-1" href="http://www.twitter.com" target="_blank" role="button"
          ><i class="fab fa-twitter"></i></a>
          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="http://www.instagram.com" target="_blank" role="button"
          ><i class="fab fa-instagram"></i></a>
        </div>
        <!-- /.social links grid container -->
        <hr>
        <!-- Section: CTA -->
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <span class="me-3">Book a class with us!</span>
            <a class="btn btn-light" href="bookaclass.html">Book Now</a>
          </p>
        </section>
        <!-- ./section: CTA -->
        </div>
        <!-- /.grid container -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #967950;">
          © 2021 Copyright:
          <a class="text-white" href="https://gintopia.com/">GinTopia.com</a>
        </div>
        <!-- /.copyright -->
      </footer>
    </section>
    <!-- /.footer -->
    <!-- font awesome script -->
    <script src="https://kit.fontawesome.com/eaf248fb94.js" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundles -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>