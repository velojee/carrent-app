// JavaScript for dropdown toggle
function toggleDropdown(id) {
    var dropdowns = document.querySelectorAll('.dropdown-menu');
    dropdowns.forEach(function(dropdown) {
        if (dropdown.id !== id) {
            dropdown.classList.remove('show');
        }
    });

    var dropdown = document.getElementById(id);
    dropdown.classList.toggle('show');
}

// Close dropdown if clicked outside
window.onclick = function(event) {
    if (!event.target.matches('.nama-rincian')) {
        var dropdowns = document.querySelectorAll('.dropdown-menu');
        dropdowns.forEach(function(dropdown) {
            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
            }
        });
    }
}
