let currentDropdown = null;

// Function to toggle dropdown and close any previously opened dropdowns
function toggleDropdown(id) {
    const dropdown = document.getElementById(id);

    // Close the currently open dropdown if it's different from the clicked one
    if (currentDropdown && currentDropdown !== dropdown) {
        currentDropdown.classList.remove('show');
    }

    // Toggle the clicked dropdown
    if (dropdown.classList.contains('show')) {
        dropdown.classList.remove('show');
        currentDropdown = null;
    } else {
        dropdown.classList.add('show');
        currentDropdown = dropdown;
    }
}

// Function to set active button in the main content and update the title
function setActive(button) {
    // Remove active class from all buttons
    document.querySelectorAll('.button-box button').forEach(btn => {
        btn.classList.remove('active');
    });

    // Add active class to the clicked button
    button.classList.add('active');

    // Update the main title to reflect the active button
    document.getElementById('main-title').textContent = `Rincian Transaksi: ${button.textContent}`;
}