<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['demo-name'];
    $email = $_POST['demo-email'];
    $category = $_POST['demo-category'];
    $priority = $_POST['demo-priority'];
    $copy = isset($_POST['demo-copy']);
    $message = $_POST['demo-message'];

    // 邮件发送逻辑
    mail($recipient, "New Message from $name", $message, "From: $email");
}
?>
