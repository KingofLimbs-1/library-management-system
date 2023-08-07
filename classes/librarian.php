<?php include __DIR__ . '../../config/database.php'; ?>

<?php
class crudOperations
{

    // fields
    private $conn;
    // ...

    // constructor
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    // ...

    // Methods

    // Add a new book
    public function addBook($title, $author, $isbn)
    {
        $sql = "INSERT INTO books (title, author, isbn) VALUES (?, ?, ?)";
        $result = $this->conn->prepare($sql);
        $result->bind_param('sss', $title, $author, $isbn);

        $check = $result->execute();

        if ($check) {
            return true;
        } else {
            return false;
        }
    }
    // ...

    // Delete a book
    public function deleteBook($bookId)
    {
        $sql = "DELETE FROM books WHERE book_id = ?";
        $result = $this->conn->prepare($sql);
        $result->bind_param('i', $bookId);

        $check = $result->execute();

        if ($check) {
            return true;
        } else {
            return false;
        }
    }
    // ...
}
?>