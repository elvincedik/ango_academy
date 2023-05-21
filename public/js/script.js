/* Styling for the scrolled navbar */
const navbar = document.getElementById('navbar');
const navbarScrolledClass = 'navbar-scrolled';

function updateNavbar() {
  if (window.scrollY > 100) {
    navbar.classList.add(navbarScrolledClass);
  } else {
    navbar.classList.remove(navbarScrolledClass);
  }
}

window.addEventListener('scroll', updateNavbar);

//Get to top button
let mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//script for team carousel

//script for hide and reveal password
var password = document.getElementById('password');
var toggler = document.getElementById('show_password');

    showHidePassword = () => {
        if (password.type == 'password') {
          password.setAttribute('type', 'text');
          toggler.classList.add('bi-eye-slash-fill');
          toggler.classList.remove('bi-eye-fill');
        } else {
          toggler.classList.remove('bi-eye-slash-fill');
          toggler.classList.add('bi-eye-fill');
          password.setAttribute('type', 'password');
        }
    };

toggler.addEventListener('click', showHidePassword);


var confirmPassword = document.getElementById('confirm_password');
var togglerPassword = document.getElementById('toggler_password');

    revealHidePassword = () => {
        if (confirmPassword.type == 'password') {
            confirmPassword.setAttribute('type', 'text');
            togglerPassword.classList.add('bi-eye-slash-fill');
            togglerPassword.classList.remove('bi-eye-fill');
        } else {
            togglerPassword.classList.remove('bi-eye-slash-fill');
            togglerPassword.classList.add('bi-eye-fill');
            confirmPassword.setAttribute('type', 'password');
        }
    };

togglerPassword.addEventListener('click', revealHidePassword);

