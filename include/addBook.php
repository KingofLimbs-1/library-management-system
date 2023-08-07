<?php
include __DIR__ . '../../classes/librarian.php';
include __DIR__ . '../../config/database.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $crudOperations = new crudOperations($conn);

    // Form data
    $title = $_POST["title"];
    $author = $_POST["author"];
    $isbn = $_POST["isbn"];
    // ...

    // Error handling
    if (empty($title) || empty($author) || empty($isbn)) {
        echo "Please fill in all the required fields.";
    }
    // ... 
    else {
        // Add book to library
        $bookAdded = $crudOperations->addBook($title, $author, $isbn);
        if ($bookAdded == true) {
            header('location: ../views/librarian/viewBooks.php');
            exit();
        } else {
            echo "Error adding book...😶";
        }
        // ...
    }
}
?>