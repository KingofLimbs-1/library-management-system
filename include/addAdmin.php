<?php
include __DIR__ . '../../classes/librarian.php';
include __DIR__ . '../../config/database.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $crudOperations = new crudOperations($conn);

    // Form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // ...

    // Error validation
    if (empty($name) || empty($email) || empty($password)) {
        echo "Error, please fill in all input fields";
    } else {
        $verifyUser = $crudOperations->checkUsers($name, $email);
        if ($verifyUser) {
            echo "Error: User already exists, please use a different name or email...😶";
        } else {
            $crudOperations->addAdmin($name, $email, $password);
            header('Location: ../views/librarian/viewAdmin.php');
        }
    }
}
?>