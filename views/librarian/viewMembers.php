<?php include  __DIR__ . '/../../include/displayUsers.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
    <link rel="stylesheet" href="../../assets/css/fonts.css">
    <link rel="stylesheet" href="../../assets/css/librarian/viewMembers.css">
</head>

<body>
    <div class="heading">
        <h1>Manage Members</h1>
    </div>
    <div class="tableContainer">
        <table>
            <tr class="headers">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Rented Books</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($rows as $row) : ?>
                <?php if ($row["is_admin"] == 0) : ?>
                    <tr>
                        <td><?php echo $row["user_id"]; ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td>#</td>
                        <td class="actions">
                            <button id="viewMember">View Member</button>
                            <button id="blacklist">Blacklist</button>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>