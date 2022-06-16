<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Landing Page by Code4education</title>
    <?php 
    include 'subscribe.php';
    ?>
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- Bootstrap 5 CDN Links -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- Custom File's Link -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive-style.css" />
  </head>

  <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="75">
  
    <!-- navbar section -->
    <header class="header_wrapper">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <!-- <img src="images/logo.png" alt="logo" class="img-fluid" /> -->
            <span
              class="img-fluid text-warning fw-bold a"
              style="font-size: 30px"
              >LARAGON</span
            ><span class="img-fluid text-primary fw-bolder">.</span
            ><span class="img-fluid text-danger fw-bolder">NET</span>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fas fa-stream navbar-toggler-icon"></i>
          </button>
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNav"
          >
            <ul class="navbar-nav menu-navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item mt-3 mt-lg-0">
                <!-- <a class="main-btn" href="#subscribe">Subscribe</a> -->
                <button type="button"  class="main-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Subscribe
                </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form  method="POST">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subscribe Now</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <label for="" class="text-warning">Name</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="text-warning">Email</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Subscribe</button>
      </div>
    </div>
  </form>
  </div>
</div>
