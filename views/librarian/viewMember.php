<?php require_once __DIR__ . "/../../config/database.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" href="../../assets/css/fonts.css">
    <link rel="stylesheet" href="../../assets/css/librarian/viewMember.css">
</head>

<body>
    <div class="logo">
        <?php $logoLink = '../librarian/viewMembers.php'; ?>
        <?php $imageLink = '../../assets/images/icons/logoImage.png'; ?>
        <?php include __DIR__ . '/../../assets/logo.php'; ?>
    </div>

    <div class="heading">
        User Details
    </div>

    <div class="tableContainer">
        <table>
            <tr class="headers">
                <th>Book</th>
                <th>Borrow Date</th>
                <th>Due Date</th>
            </tr>

            <?php
            if (isset($_POST["userId"])) {
                $userId = $_POST["userId"];

                // Query to fetch users book rental info
                $sql = "SELECT b.title, bo.borrow_date,
                DATE_ADD(bo.borrow_date, INTERVAL 7 DAY) AS due_date
                FROM borrowings bo
                JOIN books b ON bo.book_id = b.book_id
                WHERE bo.user_id = $userId AND bo.return_date IS NULL";

                $result = $conn->query($sql);
                // ...
            }
            ?>

            <?php if ($result && $result->num_rows > 0) : ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row["title"]; ?></td>
                        <td><?php echo date("Y-m-d", strtotime($row["borrow_date"])); ?></td>
                        <td><?php echo date("Y-m-d", strtotime($row["due_date"])); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </table>
</body>

</html>