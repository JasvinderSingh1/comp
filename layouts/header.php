<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>COMSORT</title>
    <link rel="icon" href="img/comsort-fav.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/parlx.css">
</head>

<body>
     <style>
.key {
    cursor: pointer;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.error{
    color: #ff0000;
}

</style>

    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/comsortnew"> <img src="img/Comsort-main-logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <!--<li class="nav-item active">
                                    <a class="nav-link" href="#">Home</a>
                                </li>-->
                                <li class="nav-item">
                                    <a class="nav-link" href="/about-us">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/solutions">Solutions</a>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link" href="#">Survey</a>
                                </li>-->
                                <!--<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>-->
                                <!--<li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>-->
                                <li class="d-none d-lg-block">
                                    <a class="btn_new" href="#" data-toggle="modal" data-target="#exampleModal">Request Demo</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="margin-top: 102px;">
        <div class="modal-content">
          <form class="form-horizontal" action="" method="post" id="form-id">  
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Request a Demo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           
              <div class="form-group displaynone">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" name="name" id="recipient-name" required>
              </div>
              <div class="form-group displaynone">
                <label for="recipient-email" class="col-form-label">Email:</label>
                <input type="text" class="form-control" name="email" id="recipient-email" required>
              </div>
              <div class="form-group displaynone">
                <label for="recipient-email" class="col-form-label">Company Name:</label>
                <input type="text" class="form-control" name="cname" id="recipient-company" required>
              </div>
              <div class="form-group displaynone">
                <label for="recipient-phone" class="col-form-label">Phone Number:</label>
                <input type="number" class="form-control" name="phone" id="recipient-phone" required>
              </div>
              <div class="form-group displaynone">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" name="message" id="message-text" required></textarea>
              </div>
              <div class="">
                <div id='response'></div>
              </div>
          </div>
          
          <div class="modal-footer displaynone">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="send"  value='Submit' class="btn btn-primary">Send</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Header part end-->
