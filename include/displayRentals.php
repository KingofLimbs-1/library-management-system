<?php require_once __DIR__ . "../../config/database.php" ?>

<?php
$username = $_SESSION["username"];

if (isset($username)) {
    // Query to fetch user's rental count
    $sql = "SELECT rental_count FROM users WHERE name = '$username'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $rowRentalCount = $result->fetch_assoc();
        $rentalCount = $rowRentalCount["rental_count"];
    } else {
        $rentalCount = 0;
    }
    // ...

    // Query to fetch all of a signed-in users rented books
    $sql2 = "SELECT 
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
    WHERE u.name = '$username' AND bo.return_date IS NULL";

    $result2 = $conn->query($sql2);
    // ...
}
?>