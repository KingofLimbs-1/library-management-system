<?php include __DIR__ . '../../config/database.php' ?>

<?php
// Query to fetch user data
$sql = "SELECT * FROM books";
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