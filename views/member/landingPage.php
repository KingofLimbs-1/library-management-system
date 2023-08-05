<?php include  __DIR__ . '/../../include/displayBooks.php'; ?>

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
    <section class="dashContainer">
        <div class="hr">
            <span>Dashboard</span>
            <hr>
        </div>
        <div class="dashboard">
            <div class="dashItem" id="rented">
                <span id="text">Rented</span>
                <span id="number">#</span>
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
        <img src="" alt="">

        <div class="heading">
            <h1>Browse Library</h1>
        </div>

        <div class="libraryContainer">
            <?php foreach ($rows as $row) : ?>
                <div class="book">
                    <img src="<?php echo $row['img__path'] ?>" alt="Book cover">
                    <br>
                    <?php echo $row['title']; ?>
                    <br>
                    <?php echo $row['author']; ?>
                    <div>
                        <button>Rent</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>

</html>