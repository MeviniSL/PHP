<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $errors =[];

    if (empty($name)){
        $errors[] = "Name is required";
    }

    if (empty($email)){
        $errors[] = "Email is required";

    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Invalid email format";
    }

    if (empty($password)){
        $errors[] = "Password is required";
    }elseif (strlen($password) < 6){
        $errors[] = "Password must be at least 6 characters long";
    }

    if (!empty($errors)){
        echo "<h3>Errors:</h3><ul>";
        foreach ($errors as $error){
            echo "<li>$error</li>";
        }
        echo "</ul>";
        echo "<a href='index.php'>Go back to the form</a>";
    }else{

        header("Location: success.php");
        exit();
    }

}
?>