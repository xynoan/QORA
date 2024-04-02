let hamburger = document.querySelector('.hamburger');
let navMenu = document.querySelector('.nav-menu');
let college = document.getElementById("CCS");
let popupDiv = document.getElementById('profileDiv');
// hamburger
function toggleMenu() {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
}

function toggleProgram() {
    college.classList.toggle('active');
}

function toggleProfile() {
    popupDiv.classList.toggle('active');
}

document.addEventListener("DOMContentLoaded", () => {
    // form
    let previousButton = document.getElementById("previousButton");

    if (previousButton) {
        previousButton.addEventListener("click", () => {
            window.history.back();
        });
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
    const imageContainer = document.getElementById('image-container');

    if (actualBtn) {
        actualBtn.addEventListener('change', function () {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    const imageUrl = event.target.result;
                    const imgElement = document.createElement('img');
                    imgElement.src = imageUrl;
                    imgElement.alt = 'Selected Image';
                    imgElement.style.borderRadius = "inherit";
                    imgElement.style.maxWidth = '100%'; // Ensure the image fits within the container
                    const label = imageContainer.querySelector('label');
                    const span = imageContainer.querySelector('span');
                    if (label) label.remove();
                    if (span) span.remove();
                    const existingImages = imageContainer.querySelectorAll('img');
                    existingImages.forEach(img => img.remove());
                    imageContainer.appendChild(imgElement);
                };
                reader.readAsDataURL(file);
            } else {
                console.log('No file selected');
            }
        });
    }
});

document.addEventListener("click", (e) => {
    if (e.target.id !== "profile_img" && popupDiv.classList.contains("active")) {
        popupDiv.classList.toggle("active");
    }
});