// hamburger
function toggleMenu() {
    let hamburger = document.querySelector('.hamburger');
    hamburger.classList.toggle('active');

    let navMenu = document.querySelector('.nav-menu');
    navMenu.classList.toggle('active');
}

function toggleProgram() {
    console.log("yahallo")
    let college = document.getElementById("CCS");
    college.classList.toggle('active');
}

// OTP
const inputs = document.querySelectorAll("#otp > *[id]");
for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener("keydown", function (event) {
        if (event.key === "Backspace") {
            inputs[i].value = "";
            if (i !== 0) inputs[i - 1].focus();
        } else {
            if (i === inputs.length - 1 && inputs[i].value !== "") {
                return true;
            } else if (event.keyCode > 47 && event.keyCode < 58) {
                inputs[i].value = event.key;
                if (i !== inputs.length - 1) inputs[i + 1].focus();
                event.preventDefault();
            } else if (event.keyCode > 64 && event.keyCode < 91) {
                inputs[i].value = String.fromCharCode(event.keyCode);
                if (i !== inputs.length - 1) inputs[i + 1].focus();
                event.preventDefault();
            }
        }
    });
}
// footer
let date = new Date().getFullYear();
document.getElementById("year").innerHTML = date;

// submit image
const actualBtn = document.getElementById('actual-btn');

const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function() {
    fileChosen.textContent = this.files[0].name
})