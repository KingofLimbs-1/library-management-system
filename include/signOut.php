<?php session_start(); ?>

<?php
if (!isset($_SESSION["username"])) {
    echo "Error: user is not signed in";
} else {
    // Sign user out
    session_unset();
    session_destroy();

    header('location: ../index.php');
    exit();
    // ...
}
?>