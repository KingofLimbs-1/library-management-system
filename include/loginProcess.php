<?php session_start(); ?>
<?php require_once "../config/database.php" ?>


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

        // Query to check if user is an "admin" or "member"
        $sql = "SELECT * FROM users WHERE name = '$name' AND email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if ($user["is_admin"] == 1) {
                // Create a session variable for given user
                $_SESSION["username"] = $user["name"];
                // ...
                header('location: ../views/librarian/landingPage.php');
                exit();
            } else {
                // Create a session variable for given user
                $_SESSION["username"] = $user["name"];
                // ...
                header('location: ../views/member/landingPage.php');
                exit();
            }
        } else {
            $errors[] = "User info is incorrect...😐";
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
