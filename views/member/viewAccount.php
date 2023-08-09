<?php session_start(); ?>
<?php include  __DIR__ . '/../../include/displayRentals.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="../../assets/css/fonts.css">
    <link rel="stylesheet" href="../../assets/css/member/viewAccount.css">
</head>

<body>
    <div class="logo">
        <?php $logoLink = '../member/landingPage.php'; ?>
        <?php $imageLink = '../../assets/images/icons/logoImage.png' ?>
        <?php include __DIR__ . '/../../assets/logo.php'; ?>
    </div>

    <div class="heading">
        <h1>My Books</h1>
    </div>


    <div class="tableContainer">
        <table>
            <tr class="headers">
                <th>Books</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row["title"]; ?></td>
                    <td><?php echo date("Y-m-d", strtotime($row["due_date"])); ?></td>
                    <td>
                        <div class="actions">
                            <form action="#" method="post">
                                <input type="hidden">
                                <button type="submit">Return</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>