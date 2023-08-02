<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
</head>

<body>
    <div class="logo">
        <?php include './include/logo.php'; ?>
    </div>

    <div class="login">
        <form action="include/loginProcess.php" method="post">
            <h2>Login</h2>
            <div>
                <label>Name</label>
                <input type="text" id="name" name="name" value="">
            </div>

            <div>
                <label>Email</label>
                <input type="text" id="email" name="email" value="">
            </div>

            <div>
                <label>Password</label>
                <input type="password" id="password" name="password" value="">
            </div>

            <div>
                <input type="submit" value="Login">
            </div>
        </form>
    </div>

    <div class="signUp">
        <form action="#">
            <h2>Sign Up</h2>
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="text" id="password" name="password" value="">
            </div>

            <div>
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>

</html>