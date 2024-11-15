<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: index.php"); // Redirect to login page if not logged in
    exit();
}

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Hello User</title>
</head>
<body>
    <div class="container">
        <h1 class="greeting">Hello, <?php echo htmlspecialchars($email); ?>!</h1>
        <p>Welcome to your dashboard.</p>
        <div class="logout-container">
            <button class="logout-button" onclick="window.location.href='logout.php'">Log Out</button>
        </div>
        <div class="footer">
        <p>&copy; 2023 Your Website</p>
    </div>
    </div>
    
</body>
</html>