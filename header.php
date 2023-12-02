<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="asset/logo/favicon.png">
    <!-- preloader css  -->
    <link rel="stylesheet" href="./asset/css/preloader.css">
    <!-- global css  -->
    <link rel="stylesheet" href="./asset/css/global.css">
    <!-- navbar css -->
    <link rel="stylesheet" href="./asset/css/navbar.css">
    <!-- bootstrap css  -->
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <!-- google fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" />
    <!-- font-awesome icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <title>Soalia Public Library</title>
</head>

<body>
    <!-- preloader start -->
    <div class="preloader" onload="loader()" id="loader">
        <div class="book">
            <div class="book__pg-shadow"></div>
            <div class="book__pg"></div>
            <div class="book__pg book__pg--2"></div>
            <div class="book__pg book__pg--3"></div>
            <div class="book__pg book__pg--4"></div>
            <div class="book__pg book__pg--5"></div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- nav bar design start -->
    <section>
        <nav class="stroke " id="navScroll">
            <div class="logo">
                <img src="asset/logo/logo.png" alt="logo">
            </div>
            <ul id="navUl">
                <li><a class="navbtn" href="./index.php">Home</a></li>
                <li><a class="navbtn " href="./about.php">About</a></li>
                <li><a class="navbtn" href="./avtivities.php">Activities</a></li>
                <li><a class="navbtn" href="./gallery.php">Gallery</a></li>
                <li><a class="navbtn" href="./annualReport.php">Annual Report</a></li>
                <li><a class="navbtn" href="./contact.php">Contact Us</a></li>
            </ul>
            <div class="menuLine" id="menuLine">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
        
    </section>
    <!-- nav bar design start -->

    <!-- donate button start-->
    <a href="./bankDtls.php">
        <div class="donateHero">
            <div class="donateBtn">
                <i class="fa-solid fa-circle-dollar-to-slot"></i><span>Donate</span>
            </div>
        </div>
    </a>
    <!-- donate button end -->