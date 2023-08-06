<?php
require_once( __DIR__ . '../../config.php');
require_once(__DIR__ . "../../classes/librarian.php"); 
?>

<?php
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the connection for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the character set to handle special characters properly
$conn->set_charset("utf8");

// Librarian class instantiation
$crudOperations = new crudOperations($conn);
// ...
?>