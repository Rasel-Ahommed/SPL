var thisswiper = new Swiper('.Swiper', {
    slidesPerView: 3,
    spaceBetween: 50,
    centerSlide: "true",
    loop: true,
    fade: "true",
    grabCursor: "true",
    autoplayDisableOnInteraction: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },
    autoplay:{
        delay:2500,
        disableOnInteraction:false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520:{
            slidesPreView: 2,
        },
        920: {
            slidesPreView: 3,
        }
    }
});
var Myswiper = document.querySelector(".Swiper");
Myswiper.addEventListener("mouseenter",function(){
    thisswiper.autoplay.stop();
});
Myswiper.addEventListener("mouseleave",function(){
    thisswiper.autoplay.start();
})
