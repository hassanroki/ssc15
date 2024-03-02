// Main Navbar Fixed
window.addEventListener("scroll", function() {
    var mainNavbar = document.querySelector(".main-navbar");
  
    // Add or remove the fixed-navbar class based on the scroll position
    if (window.scrollY > mainNavbar.offsetTop) {
      mainNavbar.classList.add("fixed-navbar");
    } else {
      mainNavbar.classList.remove("fixed-navbar");
    }
  });
  

  // AOS Animation
  AOS.init();

// After dynamically loading content
AOS.refresh();


  // Read More JavaScript 
  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("readMore");
    var btnText = document.getElementById("readContent");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }
 


