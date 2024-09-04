//mengambil value inputan
const form= document.getElementById('form');
const username= document.getElementById('username');
const password= document.getElementById('password');

const username_error= document.getElementById('username_error');
const password_error= document.getElementById('password_error');


// Function to check input value and update border color
function updateBorderColor(input) {
    if (input.value.trim() === "") {
        input.classList.remove("filled-input");
        input.classList.add("input");
    } else {
        input.classList.remove("input");
        input.classList.add("filled-input");
    }
}

// Get the input elements
const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");

// Add event listeners to check input on every keyup and input change
usernameInput.addEventListener("input", function() {
    updateBorderColor(usernameInput);
});

passwordInput.addEventListener("input", function() {
    updateBorderColor(passwordInput);
});

// Initial check on page load
updateBorderColor(usernameInput);
updateBorderColor(passwordInput);

