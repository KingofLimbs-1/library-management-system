<?php session_start(); ?>
<?php require_once __DIR__ . "../../config/database.php"; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Form data
    $bookId = $_POST["bookId"];
    // ...

    if (isset($_POST["rentBtn"]) && isset($_SESSION["username"]) && isset($bookId)) {
        // Query to fetch user_id based on user currently signed in
        $username = $_SESSION["username"];

        $sql = "SELECT user_id FROM users WHERE name = '$username'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // User ID
            $userId = $user["user_id"];
            // ...

            // Query for user to rent a book
            $borrowDate = date("Y-m-d");

            $sql2 = "INSERT into borrowings (user_id, book_id, borrow_date) VALUES ('$userId', '$bookId', '$borrowDate')";
            $result2 = $conn->query($sql2);
            // ...

            // Query to update books table to indicate a book has been rented
            $sql3 = "UPDATE books SET borrow_date = '$borrowDate' WHERE book_id = '$bookId'";
            $result3 = $conn->query($sql3);
            // ...

            // Query to increment rental_count in users table
            $sql4 = "UPDATE users SET rental_count = rental_count + 1 WHERE user_id = $userId";
            $result4 = $conn->query($sql4);
            if (!$result4) {
                $errors[] = "Failed to update rental count";
            }
            // ...

            header('location: ../views/member/landingPage.php');
            exit();
        } else {
            $errors[] = "Error: Queries have failed";
        }
        // ...
    }
}
?>

<?php
// Check if errors occured
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "</br>";
    }
}
// ...
?>


