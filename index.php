<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Em Tech Learning</title>
</head>
<body>
    <h1>Welcome to Em Tech Learning</h1>
    <nav>
        <a href="editor.php">Code Editor</a>
        <a href="quizzes.php">Quizzes</a>
        <a href="logout.php">Logout</a>
    </nav>
</body>
</html>
