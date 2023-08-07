<?php include __DIR__ . '/../../include/displayUsers.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../assets/css/fonts.css">
    <link rel="stylesheet" href="../../assets/css/librarian/landingPage.css">
</head>

<body>
    <div class="logo">
    </div>
    <section class="dashboardSection">

        <div class="dashboardContainer">
            <div class="greeting">
                <h1>Welcome, Librarian</h1>
            </div>
            <div class="buttons">
                <a href="../librarian/viewMembers.php">
                    <div class="dashItem" id="members">
                        <h1>Manage Members</h1>
                        <img src="../../assets/images/icons/users.png" alt="">
                    </div>
                </a>

                <a href="../librarian/viewBooks.php">
                    <div class="dashItem" id="books">
                        <h1>Manage Books</h1>
                        <img src="../../assets/images/icons/book.png" alt="">
                    </div>
                </a>

                <a href="../librarian/viewAdmin.php">
                    <div class="dashItem" id="admins">
                        <h1>Manage Librarians</h1>
                        <img src="../../assets/images/icons/librarian.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>
</body>

</html>