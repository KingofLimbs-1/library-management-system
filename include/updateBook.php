<?php
include __DIR__ . '../../classes/librarian.php';
include __DIR__ . '../../config/database.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    $crudOperations = new crudOperations($conn);

    // Form data
    $bookId = $_POST["bookId"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $isbn = $_POST["isbn"];
    // ...

    // Error handling
    if (empty($title) || empty($author) || empty($isbn)) {
        $errors[] = "Please fill in all the required fields...😶";
    }
    // ...
    else {
        $updateBook = $crudOperations->editBook($bookId, $title, $author, $isbn);
        if ($updateBook == true) {
            header('Location: ./../views/librarian/viewBooks.php');
            exit();
        }
    }
}
?>


<?php
// Check to see if errors occured
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "</br>";
    }
}
// ...
?>