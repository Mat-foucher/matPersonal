<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { $name = $_POST["name"]; $email = $_POST["email"]; $message = $_POST["message"]; $to = "youremail@example.com"; $subject = "New message from $name"; $body = "Name: $name\nEmail: $email\nMessage:\n$message"; mail($to, $subject, $body); header("Location: thank-you.html"); exit; } ?> 