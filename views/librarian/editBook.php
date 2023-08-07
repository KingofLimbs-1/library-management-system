<?php
include __DIR__ . '../../../classes/librarian.php';
include __DIR__ . '../../../config/database.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $crudOperations = new crudOperations($conn);

    // Form data
    $bookId = $_POST["editBookID"];
    // ...

    $bookDetails = $crudOperations->getBookDetails($bookId);

    if ($bookDetails) {
        $title = $bookDetails["title"];
        $author = $bookDetails["author"];
        $isbn = $bookDetails["isbn"];
        // echo $title;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="../../assets/css/fonts.css">
    <link rel="stylesheet" href="../../assets/css/librarian/editBook.css">
</head>

<body>
    <div class="editBookContainer">
        <form action="../../include/updateBook.php" method="post">
            <h1>Edit Book</h1>

            <div class="labelContainer">
                <label>Title</label>
            </div>
            <input type="text" value="<?php echo $title; ?>">

            <div class="labelContainer">
                <label>Author</label>
            </div>
            <input type="text" value="<?php echo $author ?>">

            <div class="labelContainer">
                <label>ISBN</label>
            </div>
            <input type="text" value="<?php echo $isbn; ?>">

            <div class="submitContainer">
                <input type="submit" value="Save">
            </div>
        </form>
    </div>
</body>

</html>