<?php
if( isset($_GET["id"]) ){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "yourpassword";
    $dbname = "myshop";

    $connection = new mysqli($servername, $username, $password, $dbname);

    $sql = "DELETE FROM clients WHERE id = $id";
    $result = $connection->query($sql);
}

header("location: /PHP/PHP/crud/index.php");
?>