<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="./assets/css/fonts.css">
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    <div class="logo">
        <?php $imageLink = './assets/images/icons/logoImage.png' ?>
        <?php include __DIR__ . '../assets/logo.php'; ?>
    </div>

    <section class="formsContainer">
        <div class="login">
            <form action="include/loginProcess.php" method="post">
                <h2 class="heading">Login</h2>

                <div>
                    <label>name</label>
                    <input type="text" id="name" name="name" value="">
                </div>

                <div>
                    <label>email address</label>
                    <input type="text" id="email" name="email" value="">
                </div>

                <div>
                    <label>password</label>
                    <input type="password" id="password" name="password" value="">
                </div>

                <div>
                    <input type="submit" value="Sign in">
                </div>
            </form>
        </div>

        <hr>
        <div class="signUp">
            <form action="include/registerProcess.php" method="post">
                <h2 class="heading">Register</h2>
                <div>
                    <label for="name">name</label>
                    <input type="text" id="name" name="name" value="">
                </div>

                <div>
                    <label for="email">email address</label>
                    <input type="text" id="email" name="email" value="">
                </div>

                <div>
                    <label for="password">password</label>
                    <input type="text" id="password" name="password" value="">
                </div>

                <div>
                    <input type="submit" value="Sign up">
                </div>
            </form>
        </div>
    </section>
</body>

</html>