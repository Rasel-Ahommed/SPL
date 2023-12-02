// //gallery js
let img = document.querySelectorAll(".imageGallery .imgList");
let fullImgHero = document.querySelector('.fullImgHero');
let fullImgTitle = document.querySelector('.fullImgTitle');


img.forEach((gImg) => {
    gImg.onclick = () => {
        let imgSrc = gImg.querySelector(".image").src;
        let imgtitle = gImg.querySelector(".imgTitle").innerHTML;
        document.getElementById('fullImgShow').src = imgSrc;
        fullImgTitle.innerHTML = imgtitle;
        fullImgHero.style.display = "flex";
    };
});

// close the full Image mode 
let cancel = document.getElementById("cancel");
cancel.addEventListener("click", function () {
    fullImgHero.style.display = "none";
});




