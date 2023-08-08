<?php include __DIR__ . "../../config/database.php"; ?>

<?php
$username = $_SESSION["username"];

if (isset($username)) {
    // Query to fetch number of rentals signed-in user has
    // "bo" & "u" are abbreviations for "borrowings" and "users" tables
    $sql = "SELECT COUNT(*) AS rental_count FROM borrowings bo JOIN users u ON bo.user_id = u.user_id WHERE u.name = '$username'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $rowCount = $result->fetch_assoc();

        $rentalCount = $rowCount["rental_count"];
    } else {
        $rentalCount = 0;
    }
    // ...
}
?>