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

    // BOOK METHODS

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

    // Fetch book details
    public function getBookDetails($bookId)
    {
        $sql = "SELECT * FROM books WHERE book_id = ?";
        $result = $this->conn->prepare($sql);

        if ($result) {
            $result->bind_param('i', $bookId);
            $result->execute();
            $check = $result->get_result();

            if ($check->num_rows > 0) {
                return $check->fetch_assoc();
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
    // ...

    // Edit book
    public function editBook($bookId, $title, $author, $isbn)
    {
        $sql = "UPDATE books SET title = ?, author = ?, isbn = ? WHERE book_id = ?";
        $result = $this->conn->prepare($sql);

        if ($result) {
            $result->bind_param('sssi', $title, $author, $isbn, $bookId);
            $check = $result->execute();

            if ($check) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    // ...

    // BOOK METHODS END


    // ADMIN METHODS

    // Check to verify if admin being added already exists in DB
    public function checkUsers($name, $email)
    {
        $sql = "SELECT * FROM users WHERE name = ? AND email = ?";
        $result = $this->conn->prepare($sql);
        $result->bind_param('ss', $name, $email);

        $result->execute();
        $result->store_result();

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    // ...

    // Add a new admin
    public function addAdmin($name, $email, $password)
    {
        $sql = "INSERT INTO users (name, email, password, is_admin) VALUES (?, ?, ?, 1)";
        $result = $this->conn->prepare($sql);
        $result->bind_param('sss', $name, $email, $password);

        $check = $result->execute();

        if ($check) {
            return true;
        } else {
            return false;
        }
    }
    // ...

    // ADMIN METHODS END
}
?>