let currentDropdown = null;

// Function to toggle dropdown and close any previously opened dropdowns
function toggleDropdown(event, id) {
    event.stopPropagation(); // Prevents event from bubbling up to the document
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
    document.querySelectorAll('.button-main button').forEach(btn => {
        btn.classList.remove('active');
    });

    // Add active class to the clicked button
    button.classList.add('active');

    // Uncomment if you want to update the title
    // document.getElementById('main-title').textContent = `Rincian Transaksi: ${button.textContent}`;
}

// Function to show the sidebar
function showSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.remove('peek');
    sidebar.classList.add('show');
}

// Function to hide the sidebar
function hideSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.remove('show');
    sidebar.classList.add('peek');
}

// Add event listeners when DOM content is loaded
document.addEventListener('DOMContentLoaded', function () {
    // Show sidebar when clicking anywhere on the page
    document.addEventListener('click', function (event) {
        const sidebar = document.getElementById('sidebar');
        const isClickInsideSidebar = sidebar.contains(event.target);
        const isClickOnSidebarButton = event.target.closest('.sidebar'); // Assuming a button or link might trigger this

        if (!isClickInsideSidebar && !isClickOnSidebarButton && sidebar.classList.contains('show')) {
            hideSidebar();
        }
    });

    // Prevent sidebar from closing when clicking inside the sidebar
    document.getElementById('sidebar').addEventListener('click', function(event) {
        event.stopPropagation(); // Prevent the click event from bubbling to the document
    });

    // Add event listener to the close button
    const closeButton = document.querySelector('.right-sidebar .close-btn');
    if (closeButton) {
        closeButton.addEventListener('click', function(event) {
            event.stopPropagation(); // Prevent the click event from bubbling to the document
            hideSidebar();
        });
    }

    // Optional: Add a button or any element to show the sidebar (ensure this button exists in your HTML)
    const showSidebarButton = document.querySelector('.show-sidebar-btn');
    if (showSidebarButton) {
        showSidebarButton.addEventListener('click', showSidebar);
    }
});
