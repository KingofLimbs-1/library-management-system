<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo</title>
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <!-- <link rel="stylesheet" href="../assets/css/logo.css"> -->

</head>

<body>
    <a href="<?php echo $logoLink ?>">
        <div class="logo">
            <h1>Silent Hill Library</h1>
            <img src="<?php echo $imageLink ?>">
        </div>
    </a>

</body>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .logo {
        cursor: pointer;
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-left: 5px;
    }

    a {
        all: unset;
    }

    h1 {
        font-family: "Inter Semi-Bold-Italic";
        font-size: 25px;
    }
</style>

</html>