<?php include __DIR__ . "../../config/database.php"; ?>

<?php
$username = $_SESSION["username"];

if (isset($username)) {
    // Query to fetch user_id based on username
    $sql = "SELECT user_id FROM users WHERE name = '$username'";
    $result = $conn->query($sql);
    // ...

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $userId = $user["user_id"];


        // Query to fetch number of active rentals for the user
        $sql2 = "SELECT COUNT(*) AS rental_count FROM borrowings WHERE user_id = $userId AND return_date IS NULL";
        $result2 = $conn->query($sql2);

        if ($result2 && $result2->num_rows > 0) {
            $rowRentalCount = $result2->fetch_assoc();
            $rentalCount = $rowRentalCount["rental_count"];

            // Query to update rental_count in users table
            $sql3 = "UPDATE users SET rental_count = $rentalCount WHERE user_id = $userId";
            $conn->query($sql3);
            
        } else {
            // No active rentals, set to 0
            $sql4 = "UPDATE users SET rental_count = 0 WHERE user_id = $userId";
            $conn->query($sql4);
        }
    }
}
?>