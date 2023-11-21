<?php
$connection = mysqli_connect("localhost", "root", "", "student_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $query = "INSERT INTO students (name, email, password) VALUES ('$name', '$email', '$password')";
    mysqli_query($connection, $query);

    header("Location: login.html");
}

mysqli_close($connection);
?>
