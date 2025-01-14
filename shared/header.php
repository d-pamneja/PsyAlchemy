<style>
    .navbar-nav .nav-item a:hover {
        color: #715297 !important;
    }
    .offcanvas .nav-item a:hover {
        color: #715297 !important;
    }

    .navbar-toggler-icon {
        width: 24px;
        height: 24px;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .navbar-toggler-icon::before,
    .navbar-toggler-icon::after,
    .navbar-toggler-icon .middle-line {
        content: '';
        display: block;
        height: 2px;
        width: 100%;
        background-color: #000;
        transition: transform 0.3s ease;
    }

    .navbar-toggler-icon::before {
        transform: translateY(4px);
    }

    .navbar-toggler-icon::after {
        transform: translateY(-4px);
    }
</style>

<header id="top" class="position-sticky top-0 start-0" style="z-index:10;">
    <nav class="navbar bg-white fixed-top">
        <div class="container-fluid">
            <div class="d-flex align-items-center g-4">
                <a class="navbar-brand d-flex" href="index.php">
                    <img src="images/name-logo.png" class="img-fluid" id="logo" height="200px" width="200px">
                </a>
            </div>

            <!-- Desktop Menu -->
            <ul class="navbar-nav flex-row d-none d-md-flex">
                <li class="nav-item" style="padding: 15px;margin-right: 15px;">
                    <a class="nav-link text-uppercase ls-4 text-dark" href="#home-section">Home</a>
                </li>
                <li class="nav-item" style="padding: 15px;margin-right: 15px;">
                    <a class="nav-link text-uppercase ls-4 text-dark" href="#about-section">About</a>
                </li>
                <li class="nav-item" style="padding: 15px;margin-right: 15px;">
                    <a class="nav-link text-uppercase ls-4 text-dark" href="#services-section">Services</a>
                </li>
                <li class="nav-item" style="padding: 15px;margin-right: 15px;">
                    <a class="nav-link text-uppercase ls-4 text-dark" href="#blogs-section">Blog</a>
                </li>
                <li class="nav-item" style="padding: 15px;margin-right: 15px;">
                    <a class="nav-link text-uppercase ls-4 text-dark" href="#faqs-section">FAQs</a>
                </li>
                <li class="nav-item" style="padding: 15px;margin-right: 15px;">
                    <a class="nav-link text-uppercase ls-4 text-dark" href="#contact-section">Contact</a>
                </li>
            </ul>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler border-0 d-md-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon">
                        <span class="middle-line"></span>
                    </span>
            </button>
        </div>
    </nav>
</header>

<!-- Off-Canvas Menu for Mobile -->
<div class="offcanvas offcanvas-end text-white bg-black" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close btn-close-white ms-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 p-4">
            <li class="nav-item">
                <a class="nav-link active text-uppercase ls-4 text-white" href="#home-section">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase ls-4 text-white" href="#about-section">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase ls-4 text-white" href="#services-section">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase ls-4 text-white" href="#blogs-section">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase ls-4 text-white" href="#faqs-section">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase ls-4 text-white" href="#contact-section">Contact</a>
            </li>
        </ul>
    </div>
</div>
