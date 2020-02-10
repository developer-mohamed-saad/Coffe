window.onscroll = function() {myFunction()};

var header = document.getElementsByClassName("caffe-header");
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    navbar.classList.add("sticky"),
    navbar.classList.remove("navbar-dark"),
    navbar.classList.add("navbar-light");
  } else {
    navbar.classList.remove("sticky");
    navbar.classList.remove("navbar-light"),
    navbar.classList.add("navbar-dark");

  }
}