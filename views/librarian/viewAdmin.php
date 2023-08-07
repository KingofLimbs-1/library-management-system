<?php include  __DIR__ . '/../../include/displayUsers.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librarians</title>
    <link rel="stylesheet" href="../../assets/css/fonts.css">
    <link rel="stylesheet" href="../../assets/css/librarian/viewAdmin.css">
</head>

<body>
    <div class="heading">
        <h1>Manage Librarians</h1>
    </div>

    <div class="addLibrarian">
        <form action="../../include/addAdmin.php" method="post">

            <h1>Add Librarian</h1>

            <div class="labelContainer">
                <label>Name</label>
            </div>
            <input type="text" name="name">

            <div class="labelContainer">
                <label>Email</label>
            </div>
            <input type="text" name="email">

            <div class="labelContainer">
                <label>Password</label>
            </div>
            <input type="password" name="password">

            <div class="submitContainer">
                <input type="submit" value="Add">
            </div>

        </form>
    </div>


    <div class="tableContainer">
        <table>
            <tr class="headers">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <?php foreach ($rows as $row) : ?>
                <?php if ($row["is_admin"] == 1) : ?>
                    <tr>
                        <td><?php echo $row["user_id"]; ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>