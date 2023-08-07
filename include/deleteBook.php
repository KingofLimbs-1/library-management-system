<?php
include __DIR__ . '../../classes/librarian.php';
include __DIR__ . '../../config/database.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $crudOperations = new crudOperations($conn);

    // Form data
    $bookID = $_POST["deleteBookID"];
    // ...
    // Delete book from library
    $bookDeleted = $crudOperations->deleteBook($bookID);
    if ($bookDeleted == true) {
        header('location: ../views/librarian/viewBooks.php');
        exit();
    } else {
        echo "Error deleting the book...😶";
    }
    // ...
}
