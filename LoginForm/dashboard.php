<?php
session_start();
if (!isset($_SESSION['username'])) {
    if (isset($_COOKIE['username'])) {
        $_SESSION['username'] = $_COOKIE['username'];
    } else {
        header("Location: login.php");
        exit();
    }
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styledash.css">
</head>

<body>
    <div class="dashboard-container">
        <h2>Welcome to the Dashboard</h2>
        <h3>Hello <?php echo $_SESSION['username']; ?>!</h3>
        <p>You are logged in successfully.</p>

        <a href="logout.php">Logout</a>
    </div>
</body>
</html>