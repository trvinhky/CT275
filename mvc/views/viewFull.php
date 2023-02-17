<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $data["Title"]?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <?php 
        foreach($data["CssFiles"] as $fileName) {
            echo "<link rel='stylesheet' href='public/css/".$fileName.".css' />";
        }
    ?>
</head>

<body>
    <header id="header">
        <div class="header-navbar">
            <div class="container">
                <nav class="navbar">
                    <a href="home" class="logo">Escape.</a>
                    <div class="navbar-group d-none d-sm-flex">
                        <ul class="navbar-list">
                            <li class="navbar-item">
                                <a href="home" class="navbar-item__link active"> Home </a>
                            </li>
                            <li class="navbar-item">
                                <a href="categories" class="navbar-item__link"> Categories </a>
                            </li>
                            <li class="navbar-item">
                                <a href="about" class="navbar-item__link"> About </a>
                            </li>
                            <li class="navbar-item">
                                <a href="contact" class="navbar-item__link"> Contact </a>
                            </li>
                        </ul>
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle user" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="login">Log In</a>
                                <a class="dropdown-item" href="register">Register</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-12 col-lg-8">
                    <div class="header-content">
                        <span class="header-top">
                            <?php echo isset($data["SupTop"]) ? $data["SupTop"] : "" ?>
                        </span>
                        <h1 class="header-title">
                            <?php echo isset($data["HeaderTitle"]) ? $data["HeaderTitle"] : "" ?>
                        </h1>
                        <p class="header-desc">
                            <?php echo isset($data["Description"]) ? $data["Description"] : "" ?>
                        </p>
                        <div class="row align-items-center justify-content-center w-100">
                            <div class="col-md-8">
                                <form action="" method="get" class="search">
                                    <input type="search" class="search-input" placeholder="Search here..." />
                                    <button type="submit" class="search-btn">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?>
    <footer id="footer">
        <div class="footer-top">
            <div class="container text-center">
                <h3 class="content-title footer-title">Stay in Touch</h3>
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-sm-9 col-lg-6">
                        <form action="" class="footer-form">
                            <input type="email" name="email" class="footer-input"
                                placeholder="Enter your email address" />
                            <button type="submit" class="footer-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end">
            <div class="container">
                <p class="footer-copy">
                    Copyright © 2022 <a href="home" class="logo logo--small">Escape.</a>
                </p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="public/js/global.js"></script>
    <?php 
    if(isset($data["script"])) {
        foreach($data["script"] as $fileName) {
            echo "<link rel='stylesheet' href='public/js/".$fileName.".js' />";
        }
    }
    ?>
</body>

</html>