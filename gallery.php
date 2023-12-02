<!-- include navbar -->
<?php
include('header.php');
?>
<head>
    <!-- gallery css -->
    <link rel="stylesheet" href="./asset/css/gallery.css">
</head>
<!-- gallery header  -->
<div class="galleryhero">
    <div class="galleryBanner">
        <div class="galleryTitle">
            <span>Home/Gallery</span>
        </div>
    </div>
</div>

<!-- gallery image -->
<div class="GalleryTitle">
    <h3>gallery</h3>
</div>

<!-- show full image  -->
<div class="fullImgHero">
    <div class="fullImg" id="fullImgBox">
        <i class="fa-solid fa-xmark" id="cancel"></i>
        <img src="./asset/img/gallery/display1.webp" onerror="this.src='img/undefined.jpg'" id="fullImgShow">
        <span class="fullImgTitle">image title</span>
    </div>
</div>

<!-- image gallery  -->
<div class="galleryImgHero ">
    <div class="imageGallery">
        <h5 >Image Title 1</h5>
        <div class="imgList">
            <img class="image" src="./asset/img/gallery/display2.webp" alt="">
            <span class="imgTitle" hidden>image title 1</span>
        </div>
        <div class="imgList">
            <img class="image" src="./asset/img/gallery/display1.webp" alt="">
            <span class="imgTitle" hidden>image title 2</span>
        </div>
        <div class="imgList">
            <img class="image" src="./asset/img/gallery/display3.webp" alt="">
            <span class="imgTitle" hidden>image title 3</span>
        </div>
    </div>
    
    <div class="imageGallery">
        <h5 >Image Title 3</h5>
        <div class="imgList">
            <img class="image" src="./asset/img/gallery/display2.webp" alt="">
            <span class="imgTitle" hidden>image title 7</span>
        </div>
        <div class="imgList">
            <img class="image" src="./asset/img/gallery/display1.webp" alt="">
            <span class="imgTitle" hidden>image title 8</span>
        </div>
        <div class="imgList">
            <img class="image" src="./asset/img/gallery/display3.webp" alt="">
            <span class="imgTitle" hidden>image title 9</span>
        </div>
        <div class="imgList">
            <img class="image" src="./asset/img/gallery/display1.webp" alt="">
            <span class="imgTitle" hidden>image title 10</span>
        </div>
        <div class="imgList">
            <img class="image" src="./asset/img/gallery/display3.webp" alt="">
            <span class="imgTitle" hidden>image title 11</span>
        </div>
    </div>
    
</div>

<!-- include footer  -->
<?php
include("footer.php");
?>
<!-- gallery js  -->
<script src="./asset/js/gallery.js"></script>
</body>

</html>