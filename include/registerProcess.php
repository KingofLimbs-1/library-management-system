<?php require_once '../config/database.php' ?>

<?php
$errors = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"])) {
        $errors[] = "Please fill in all input fields";
    } else {
        // Input data sanitization
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        // ...

        // Query to check input data against existing users
        $sql = "SELECT * FROM users WHERE name = '$name' AND email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $errors[] = " User already exists. Please choose a different name or log in with your existing account...🙃";
            echo "<a href='../index.php'>Return to homepage</a>";
            echo "</br>";
        }
        // ...

        // Query to register new user and log them in
        else {
            $sql2 = "INSERT INTO users (name, email, password, is_admin) VALUES ('$name', '$email', '$password', 0)";
            $result2 = $conn->query($sql2);
            if ($result2 === TRUE) {
                header('location: ../views/member/landingPage.php');
                exit();
            }
        }
        // ...
    }
}
?>

<?php
// Check to see if errors occurred
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "</br>";
    }
}
// ...
?>