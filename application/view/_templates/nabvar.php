    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="<?php echo URL;?>home/index" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0"><img class="img-fluid me-3" src="<?php echo URL;?>img/logo.png" alt=""></h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light pe-4 py-3 py-lg-0">
                <a href="<?php echo URL;?>home/index" class="nav-item nav-link">Home</a>
                <a href="<?php echo URL;?>home/about" class="nav-item nav-link">About Us</a>
                <a href="<?php echo URL;?>home/service" class="nav-item nav-link">Our Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="<?php echo URL;?>home/feacture" class="dropdown-item">Features</a>
                        <a href="<?php echo URL;?>home/quote" class="dropdown-item">Free Quote</a>
                        <a href="<?php echo URL;?>home/team" class="dropdown-item">Our Team</a>
                        <a href="<?php echo URL;?>home/testimonial" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="<?php echo URL;?>home/contact" class="nav-item nav-link">Contact Us</a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-danger me-2" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-danger me-2" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-danger me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-danger me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->