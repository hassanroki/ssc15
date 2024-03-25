// Main Navbar Fixed
window.addEventListener("scroll", function () {
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

// Add a timeout function to hide the alert after 3 seconds
setTimeout(function () {
  var sessionAlert = document.getElementById('session-alert');
  if (sessionAlert) {
    sessionAlert.style.display = 'none';
  }
}, 3000);

// Data Insert School Id From Merit List Table
$(document).ready(function () {
  $('#schoolName').on('input', function () {
    var selectedSchool = $(this).val();
    var schoolId = $('#instituteNameList option[value="' + selectedSchool + '"]').data('school-id');
    $('#schoolId').val(schoolId);
  });
});

// Photo File Select and Data Photo Showing
function previewImage(event) {
  var reader = new FileReader();
  reader.onload = function () {
    var preview = document.getElementById('preview');
    preview.src = reader.result;
    preview.style.display = 'block';
  }
  reader.readAsDataURL(event.target.files[0]);
}