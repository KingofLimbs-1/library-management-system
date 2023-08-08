<?php session_start(); ?>
<?php include  __DIR__ . '/../../include/displayBooks.php'; ?>
<?php require_once __DIR__ . '/../../include/rentalCount.php'; ?>

<?php if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../../assets/css/fonts.css">
    <link rel="stylesheet" href="..\..\assets\css\member\memberLanding.css">
</head>

<body>
    <nav class="navContainer">
        <div class="left">
            <span>
                <?php $imageLink = '../../assets/images/icons/logoImage.png'; ?>
                <?php include __DIR__ . '/../../assets/logo.php'; ?>
            </span>
        </div>

        <div class="right">
            <div class="signOut">
                <?php if (isset($_SESSION["username"])) : ?>
                    <a href="<?php echo '../../include/signOut.php' ?>">Sign Out</a>
                <?php endif; ?>
            </div>
            
            <div class="myAccountBtn">
                <?php if (isset($username)) :  ?>
                    <a href="./viewAccount.php"><?php echo $username; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <section class="dashContainer">
        <div class="hr">
            <span>Dashboard</span>
            <hr>
        </div>
        <div class="dashboard">
            <div class="dashItem" id="rented">
                <span id="text">Rented</span>
                <span id="number"><?php echo $rentalCount; ?></span>
            </div>
            <div class="dashItem" id="overdue">
                <span id="text">Overdue</span>
                <span id="number">#</span>
            </div>
        </div>
        <div class="hr">
            <hr>
        </div>
    </section>

    <section class="library">

        <div class="heading">
            <h1>Browse Library</h1>
        </div>

        <div class="libraryContainer">
            <?php foreach ($rows as $row) : ?>
                <div class="book">
                    <img class="bookCover" src="<?php echo $row['img__path'] ?>" alt="Book cover">
                    <br>
                    <span id="title"><?php echo $row['title']; ?></span>
                    <br>
                    <span id="author"><?php echo $row['author']; ?></span>
                    <form action="../../include/rentBook.php" method="post">
                        <div class="button">
                            <input type="hidden" name="bookId" value="<?php echo $row["book_id"]; ?>">
                            <button type="submit" name="rentBtn">Rent</button>
                        </div>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>

</html>