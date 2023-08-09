<?php include __DIR__ . '../../config/database.php' ?>

<?php
// Query to fetch user data
$sql = "SELECT * FROM books WHERE book_id NOT IN (SELECT book_id FROM borrowings WHERE return_date IS NULL)";
$result = $conn->query($sql);
// ...

// Check to see if query was successful
if ($result->num_rows > 0) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo "😐";
}

$conn->close();
?>