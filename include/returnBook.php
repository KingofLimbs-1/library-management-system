<?php session_start(); ?>
<?php require_once __DIR__ . "../../config/database.php"; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["returnBtn"]) && isset($_POST["borrowingId"])) {
        $borrowingId = $_POST["borrowingId"];

        // Query to get book details & userId for returned book
        $sql = "SELECT b.book_id, u.user_id FROM borrowings b
        JOIN users u ON b.user_id = u.user_id
        WHERE b.borrowing_id = $borrowingId";
        $result = $conn->query($sql);
        // ...

        if ($result && $result->num_rows > 0) {
            $bookRow = $result->fetch_assoc();
            $bookId = $bookRow["book_id"];
            $userId = $bookRow["user_id"];

            // Update borrowings table to mark book as returned
            $returnDate = date("Y-m-d");
            $sql2 = "UPDATE borrowings SET return_date = '$returnDate' WHERE borrowing_id = $borrowingId";
            $conn->query($sql2);
            // ...

            // Decrement the rental_count in users table to reflect returned book
            $sql3 = "UPDATE users SET rental_count = rental_count - 1 WHERE user_id = $userId";
            $conn->query($sql3);
            // ...

            header('location: ../views/member/viewAccount.php');
            exit();
        } else {
            echo "Error: Book and/or User not found!";
        }
        // ...
    }
}
?>