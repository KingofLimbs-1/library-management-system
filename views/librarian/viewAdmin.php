<?php include  __DIR__ . '/../../include/displayUsers.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librarians</title>
    <link rel="stylesheet" href="../../assets/css/librarian/viewAdmin.css">
</head>

<body>
    <div>
        <?php include '../../include/logo.php' ?>
    </div>
    <div class="heading">
        <h1>Manage Librarians</h1>
    </div>
    <div class="tableContainer">
        <table>
            <tr class="headers">
                <th>Name</th>
                <th>Email</th>
                <th>ID</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($rows as $row) : ?>
                <?php if ($row["is_admin"] == 1) : ?>
                    <tr>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["user_id"]; ?></td>
                        <td class="actions">
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>