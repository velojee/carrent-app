    // Declare sidebar globally so it's accessible everywhere
    const sidebar = document.getElementById('sidebar');

    // Toggle dropdown visibility, ensuring only one dropdown is open at a time
    function toggleDropdown(event, id) {
        event.stopPropagation(); // Prevent the sidebar from toggling

        const currentDropdown = document.getElementById(id);
        const allDropdowns = document.querySelectorAll('.dropdown-list'); // Select all dropdowns

        // Collapse all dropdowns except the clicked one
        allDropdowns.forEach(dropdown => {
            if (dropdown !== currentDropdown) {
                dropdown.classList.remove('show');
            }
        });

        // Toggle the current dropdown
        currentDropdown.classList.toggle('show');
    }

    // Handle sidebar peek click to show full visibility
    sidebar.addEventListener('click', function(event) {
        if (sidebar.classList.contains('peek')) {
            sidebar.classList.add('show');
            sidebar.classList.remove('peek');
        }
        event.stopPropagation(); // Prevent hiding sidebar when clicking inside
    });

    // Close sidebar when clicking outside
    document.addEventListener('click', function(event) {
        if (!sidebar.contains(event.target) && sidebar.classList.contains('show')) {
            sidebar.classList.add('peek');
            sidebar.classList.remove('show');
        }
    });

    // Close sidebar manually using the close button
    function closeSidebar(event) {
        event.stopPropagation(); // Prevent the click from bubbling up to the sidebar
        sidebar.classList.add('peek');
        sidebar.classList.remove('show');
    }
    // Add event listener to all buttons in the button box to toggle the 'active' class
    const buttons = document.querySelectorAll('.button-main button');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove 'active' class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));

            // Add 'active' class to the clicked button
            this.classList.add('active');
        });
    });