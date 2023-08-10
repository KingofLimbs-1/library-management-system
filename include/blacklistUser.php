<?php require_once __DIR__ . '../../config/database.php'; ?>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if (isset($_POST["blacklist"]) && isset($_POST["userId"])) {
        $userId = $_POST["userId"];

        // Query to check if any users books are overdue
        $sql = "SELECT COUNT(*) AS overdue_count
                FROM borrowings bo
                WHERE bo.user_id = $userId
                AND bo.return_date IS NULL
                AND DATE_ADD(bo.borrow_date, INTERVAL 7 DAY) <= CURDATE()";

        $result = $conn->query($sql);
        // ...

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $overdueCount = $row["overdue_count"];


            if ($overdueCount > 0) {
                // Query to update users status to "suspended" / "blacklisted" if books are overdue by more than a week
                $sql2 = "UPDATE users SET status = 'suspended' WHERE user_id = $userId";

                if ($conn->query($sql2)) {
                    header('location: ../../views/librarian/viewMembers.php');
                    exit();
                } else {
                    $errors[] = "Error updating users status";
                }
                // ...
            } else {
                $errors[] = "User has no overdue rentals, status remains active";
            }
        } else {
            $errors[] = "No rentals found for the user";
        }
    } else {
        $errors[] = "Invalid request";
    }
}

// Check to see if errors occured
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "</br>";
    }
}
// ...
?>