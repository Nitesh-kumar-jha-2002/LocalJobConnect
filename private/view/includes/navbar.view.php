<!-- NavBar Section Start -->

<nav class="navbar navbar-expand-lg fixed-top shadow-sm" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE ?>">
            <img src="assets\image\logo.svg" alt="LOCALJOBCONNECT" width="50" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE ?>explore">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE ?>seller">Become a Seller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE ?>contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASE ?>about">About Us</a>
                </li>
            </ul>
            <a href="<?= BASE ?>signin" class="text-decoration-none link-btn mx-2">
                <i class="fa-solid fa-user me-2"></i>Sign In
            </a>
        </div>
    </div>
</nav>