<?php
require 'includes/config.php';
$result = $conn->query("SELECT * FROM quizzes");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quizzes</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Quizzes</h1>
    <form method="POST">
        <?php while ($row = $result->fetch_assoc()): ?>
            <p><?php echo $row['question']; ?></p>
            <input type="radio" name="q<?php echo $row['id']; ?>" value="A"> <?php echo $row['option_a']; ?><br>
            <input type="radio" name="q<?php echo $row['id']; ?>" value="B"> <?php echo $row['option_b']; ?><br>
            <input type="radio" name="q<?php echo $row['id']; ?>" value="C"> <?php echo $row['option_c']; ?><br>
            <input type="radio" name="q<?php echo $row['id']; ?>" value="D"> <?php echo $row['option_d']; ?><br>
        <?php endwhile; ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
