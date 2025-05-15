<?php
// Initialize session
session_start();

// Define valid credentials (in a real application, these would be stored in a database)
// Format for user ID: b[student number]@sakarya.edu.tr
// Format for password: b[student number] without the domain
$valid_email = "b2412100001@sakarya.edu.tr"; // Example - should be replaced with actual student ID
$valid_password = "b2412100001"; // Example - should be replaced with actual password

// Function to check if email is valid format
function isValidEmail($email) {
    // Check for @sakarya.edu.tr domain and proper email format
    return filter_var($email, FILTER_VALIDATE_EMAIL) && 
           preg_match('/@sakarya\.edu\.tr$/', $email) &&
           preg_match('/^b[0-9]+@sakarya\.edu\.tr$/', $email);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    
    // Validate that fields are not empty
    if (empty($email) || empty($password)) {
        // Redirect back with error parameter
        header("Location: login.html?error=empty");
        exit;
    }
    
    // Validate email format
    if (!isValidEmail($email)) {
        header("Location: login.html?error=email");
        exit;
    }
    
    // Check credentials
    if ($email === $valid_email && $password === $valid_password) {
        // Successful login
        $_SESSION['user_email'] = $email;
        $_SESSION['logged_in'] = true;
        
        // Extract student number from email for welcome message
        preg_match('/^(b[0-9]+)@/', $email, $matches);
        $student_number = $matches[1];
        
        // Redirect to welcome page
        header("Location: welcome.php");
        exit;
    } else {
        // Failed login
        header("Location: login.html?error=login");
        exit;
    }
} else {
    // If someone tries to access this page directly, redirect to the login form
    header("Location: login.html");
    exit;
}
?> 