<?php
session_start();

$stored_username = "admin";
$stored_password_hash = password_hash("admin@123",PASSWORD_DEFAULT);

IF ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $stored_username && password_verify($password, $stored_password_hash)){
        $_SESSION['username'] = $username;
        
        if (isset($_POST['remember'])){
            setcookie("username",$username,time()+(86400 * 7),"/");
        }
        header("Location: dashboard.php");
        exit();

    } else{
        $error = "Invalid username or password.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">Login Form</div>
    
   
    <form action="login.php" method="post">
         <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" required>   
         </div>
         <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" required>
         </div>
         <div class="form-group">
             <label>
            <input type="checkbox" name="remember"> Remember me
            </label>
        </div>
         <?php
    if (isset($error))
        echo "<p>$error</p>";
    ?>
       
        <button type="submit">Login</button>
    </form>
</body>
</html>