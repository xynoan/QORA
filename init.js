let date = new Date().getFullYear();

document.getElementById("year").innerHTML = date;

function triggerHamburger() {
    let hamburger = document.getElementById("menu");
    hamburger.classList.toggle("invisible");
}