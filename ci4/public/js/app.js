const navbar = document.querySelector("#nav-bar");

// Adding sticky class to nav element
let top2 = navbar.offsetTop;
const stickynavbar= () => {
  if (window.scrollY > top2) {    
    navbar.classList.add('sticky');
  } else {
    navbar.classList.remove('sticky');    
  }
}
// Shrinking nav bar when scrolled
const navbarShrink = () => {
    if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
        navbar.style.padding = "1rem 5rem";
        navbar.style.borderBottom = "1px solid #dddddd";
     } else {
        navbar.style.padding = "2rem 5rem";
     }
}

// Function Call
window.addEventListener('scroll', () => {
    stickynavbar();
    navbarShrink();
});

