// app.js
let currentDropdown = null;

function toggleDropdown(id) {
    const dropdown = document.getElementById(id);

    // Close the currently open dropdown
    if (currentDropdown && currentDropdown !== dropdown) {
        currentDropdown.classList.remove('show');
        currentDropdown.style.maxHeight = null; // Collapse the open dropdown
    }

    // Toggle the clicked dropdown
    if (dropdown.classList.contains('show')) {
        dropdown.classList.remove('show');
        dropdown.style.maxHeight = null; // Collapse the dropdown
        currentDropdown = null;
    } else {
        dropdown.classList.add('show');
        dropdown.style.maxHeight = dropdown.scrollHeight + "px"; // Expand the dropdown
        currentDropdown = dropdown;
    }
}

// Close dropdown if clicked outside
window.addEventListener('click', function(event) {
    if (!event.target.closest('.kotak-rincian')) {
        const dropdowns = document.querySelectorAll('.dropdown-menu');
        dropdowns.forEach(function(dropdown) {
            dropdown.classList.remove('show');
            dropdown.style.maxHeight = null; // Collapse all dropdowns
        });
        currentDropdown = null;
    }
});
