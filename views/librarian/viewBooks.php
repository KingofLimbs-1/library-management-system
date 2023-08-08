<?php include __DIR__ . '/../../include/displayBooks.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="../../assets/css/fonts.css">
    <link rel="stylesheet" href="../../assets/css/librarian/viewBooks.css">
</head>

<body>
    <div class="logo">
        <?php $logoLink = '../librarian/landingPage.php'; ?>
        <?php $imageLink = '../../assets/images/icons/logoImage.png'; ?>
        <?php include __DIR__ . '/../../assets/logo.php'; ?>
    </div>
    <div class="heading">
        <h1>Manage Books</h1>
    </div>

    <div class="addBooks">
        <form class="form" action="../../include/addBook.php" method="post">

            <h1>Add Books</h1>

            <div class="labelContainer">
                <label>Title</label>
            </div>
            <input type="text" name="title">
            <div class="labelContainer">
                <label>Author</label>
            </div>
            <input type="text" name="author">

            <div class="labelContainer">
                <label>ISBN</label>
            </div>
            <input type="text" name="isbn">

            <div class="submitContainer">
                <input type="submit" value="Add">
            </div>

        </form>
    </div>


    <div class="tableContainer">
        <table>
            <tr class="headers">
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $row["title"] ?></td>
                    <td><?php echo $row["author"]; ?></td>
                    <td><?php echo $row["isbn"]; ?></td>
                    <td>
                        <div class="actions">
                            <form action="../librarian/editBook.php" method="post">
                                <input type="hidden" name="editBookID" value="<?php echo $row["book_id"]; ?>">
                                <button type="submit" id="edit">Edit</button>
                            </form>

                            <form action="../../include/deleteBook.php" method="post">
                                <input type="hidden" name="deleteBookID" value="<?php echo $row["book_id"]; ?>">
                                <button type="submit" id="delete">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>