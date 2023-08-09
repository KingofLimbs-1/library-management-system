<?php require_once __DIR__ . "../../config/database.php" ?>

<?php
$username = $_SESSION["username"];

if (isset($username)) {
    // Query to fetch all of a signed-in users rented books
    $sql = "SELECT 
    b.title, 
    b.author, 
    bo.borrow_date,
    -- Modification that calculates due-date for rented books
    DATE_ADD(bo.borrow_date, INTERVAL 7 DAY) AS due_date,
    -- ...
    bo.return_date, 
    bo.borrowing_id
    FROM borrowings AS bo
    JOIN books AS b ON bo.book_id = b.book_id
    JOIN users AS u ON bo.user_id = u.user_id
    WHERE u.name = '$username'";
    // ...
    $result = $conn->query($sql);
}
?>