<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if (!empty($_POST['website'])) {
    exit; // Spam bot filled the honeypot, so abort
  }

  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $message = str_replace(["\r\n", "\r"], "\n", $_POST['message']); // normalize to \n

  if (!$email) {
    die("Invalid email");
  }
  
  if ($email && $message && $name) {
    $to = "pr@nextcloud.com";
    $subject = "DSI contact request";
    $headers = "From: DSI Landing page <pr@nextcloud.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
      echo "✅ Message sent successfully!";
    } else {
      echo "❌ Failed to send message.";
    }
  } else {
    echo "Invalid form data.";
  }


} else {
  echo "Unauthorized request.";
}
?>