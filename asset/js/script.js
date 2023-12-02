
// hidden preloader js 
let loader= document.getElementById("loader");
window.addEventListener("load",vanish);
function vanish(){
  loader.setAttribute("hidden","hidden");
}

// nav bar scroll color js 
let nav = document.getElementById("navScroll"); //targer nav bar 
window.addEventListener("scroll", function(){
    let scrollValue = scrollY; //get scroll value;
    if(scrollValue > 100){
        nav.classList.add("bgColorNav");
    }
    else{
      nav.classList.remove("bgColorNav");
    }
})


// active class add 
document.addEventListener('DOMContentLoaded', function() {
  var header = document.getElementById("navUl");
  var btns = header.querySelectorAll(".navbtn");

  btns.forEach((ele) => {
    ele.addEventListener('click', function() {
      // Remove active class from all buttons
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      // Add active class to the clicked button
      ele.classList.add("active");

      // Save the active button's href in local storage
      localStorage.setItem('activeButton', ele.getAttribute('href'));
    });
  });

  // Check if there's a saved active button in local storage
  var activeButtonHref = localStorage.getItem('activeButton');
  if (activeButtonHref) {
    var activeButton = header.querySelector(`a[href="${activeButtonHref}"]`);
    if (activeButton) {
      activeButton.classList.add("active");
    }
  }
});


//responsive nav bar
let menuLine = document.getElementById("menuLine");
let navUl = document.getElementById("navUl");

menuLine.addEventListener("click", function () {
			if (window.getComputedStyle(navUl).display == "none") {
				navUl.style.display = "block";
			}
			else {
				navUl.style.display = "none";
			}

});
