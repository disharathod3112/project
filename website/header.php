
<!-- active text-secondary -->

<?php
	
	function active($currect_page){
		
	  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ; // current page url
	  $url = end($url_array);  
	  if($currect_page == $url){
		  echo 'active text-secondary'; //class name in css 
	  } 
	}

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>DishaTech - IT Solutions</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark py-2 d-none d-md-flex">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="me-3 text-white-50"><a href="#"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>23 Ranking Street, Gujarat</small>
                        <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>DishaTech@TopsTech.com</small>
                    </div>
                    <div id="note" class="text-secondary d-none d-xl-flex"><small>Note : We help you to Grow your Business</small></div>
                    <div class="top-link">
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-twitter text-primary"></i></a>
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                        <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="container-fluid bg-primary">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="index" class="navbar-brand">
                        <h1 class="text-white fw-bold d-block">Disha<span class="text-secondary">Tech</span> </h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="index" class="nav-item nav-link <?php active("index")?>">Home</a>
                            <a href="about" class="nav-item nav-link <?php active("about")?>">About</a>
                            <a href="services" class="nav-item nav-link <?php active("services")?>">Services</a>
                            <a href="projects" class="nav-item nav-link <?php active("projects")?>">Projects</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded">
                                    <a href="blog" class="dropdown-item <?php active("blog")?>">Our Blog</a>
                                    <a href="team" class="dropdown-item <?php active("team")?>">Our Team</a>
                                    <a href="testimonial" class="dropdown-item <?php active("testimonial")?>">Testimonial</a>
                                    <a href="404" class="dropdown-item <?php active("404")?>">404</a>
                                </div>
                            </div>
                            <a href="contact" class="nav-item nav-link <?php active("contact")?>">Contact</a>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shirink-0">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                            <a href="" class="position-relative animated tada infinite">
                                <i class="fa fa-phone-alt text-white fa-2x"></i>
                                <div class="position-absolute" style="top: -7px; left: 20px;">
                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column pe-4 border-end">
                            <span class="text-white-50">Have any questions?</span>
                            <span class="text-secondary">Call: + 0972 204 1171</span>
                        </div>
                        <?php
                            if (isset($_SESSION['u_id'])) {
                            ?>
                             <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded">
                                    
                                     <h6><?php echo "Hi .." . $_SESSION['u_name']?></h6>
                                   <ul class="sub-menu">
                                    <li><a href="user_profile">My Profile</a></li>
                                    <li><a href="contact-us">My Order</a></li>
                                </ul>
                            </li>
                                <li><a href="logout">Logout</a></li>
                                </div>
                            </div>
                            <?php
                            } else {
                            ?>
                               <div class="d-flex align-items-center justify-content-center ms-4 ">
                            <a href="login"><i class="text-white fa-2x">Login</i> </a>
                        </div>
                            <?php
                            }
                            ?>


                        
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
