// hamburger
function toggleMenu() {
    let hamburger = document.querySelector('.hamburger');
    hamburger.classList.toggle('active');

    let navMenu = document.querySelector('.nav-menu');
    navMenu.classList.toggle('active');
}

// footer
let date = new Date().getFullYear();
document.getElementById("year").innerHTML = date;