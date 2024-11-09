<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to login page
    header("Location: signin.php");
    exit();
}

// Get the username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
    <script src="script.js"></script>
    <script src="darkmode.js"></script>
</head>
<body>
    <h1>Vatican Cake Point</h1>

    <!-- Dark Mode Switch (Top-right corner) -->
    <div class="dark-mode-switch">
        <input type="checkbox" id="dark-mode-toggle" aria-label="Dark Mode Toggle">
        <label for="dark-mode-toggle" class="switch-label"></label>
    </div>
    <script>
        // Dark mode toggle functionality
        const toggle = document.getElementById('dark-mode-toggle');
        const body = document.body;

        // Check for saved preference
        if (localStorage.getItem('dark-mode') === 'true') {
            body.classList.add('dark-mode');
            toggle.checked = true;
        }

        // Toggle dark mode
        toggle.addEventListener('change', () => {
            body.classList.toggle('dark-mode');
            localStorage.setItem('dark-mode', toggle.checked);
        });
    </script>

    <!-- Chat Box -->
    <div id="chat-container">
        <div id="chat-box">
            <!-- Chat messages will appear here -->
        </div>
        <div id="chat-input">
            <input type="text" id="chat-message" placeholder="Type your message..." />
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
    
    <!-- Link to the JavaScript file -->
    <script src="chat.js"></script>

    <!-- Navbar -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="service.html">Service</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="signin.php">Log In</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a href="gallarey.html">Gallery</a></li>
        </ul>
    </nav>

    <!-- Image Slider (Right to Left transition) -->
    <div class="image-slider">
        <img src="1.jpg" alt="Image 1">
        <img src="2.jpg" alt="Image 2">
        <img src="3.jpg" alt="Image 3">
        <img src="4.jpg" alt="Image 4">
        <img src="5.jpg" alt="Image 5">
    </div>

    <!-- Footer -->
    <footer>
        <ul>
            <li><a href="https://wa.me/0701224919">WhatsApp</a></li>
            <li><a href="mailto:mwangimwangifrancis94@gmail.com">Gmail</a></li>
            <li><a href="https://instagram.com/cecil_mwangi3">Instagram</a></li>
            <li><a href="https://twitter.com/f9_cecil">X (Twitter)</a></li>
            <li><a href="https://facebook.com/isaac mwangi">Facebook</a></li>
        </ul>
    </footer>
</body>
</html>
