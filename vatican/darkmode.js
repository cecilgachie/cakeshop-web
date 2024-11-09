// Get the dark mode toggle checkbox
const darkModeToggle = document.getElementById('dark-mode-toggle');

// Check if the user has a saved dark mode preference in localStorage
if (localStorage.getItem('dark-mode') === 'enabled') {
    document.body.classList.add('dark-mode');
    darkModeToggle.checked = true; // Make the toggle switch on
} else {
    document.body.classList.remove('dark-mode');
    darkModeToggle.checked = false; // Keep the toggle off
}

// Toggle dark mode on checkbox change
darkModeToggle.addEventListener('change', () => {
    if (darkModeToggle.checked) {
        // Enable dark mode
        document.body.classList.add('dark-mode');
        localStorage.setItem('dark-mode', 'enabled'); // Save preference
    } else {
        // Disable dark mode
        document.body.classList.remove('dark-mode');
        localStorage.setItem('dark-mode', 'disabled'); // Save preference
    }
});
