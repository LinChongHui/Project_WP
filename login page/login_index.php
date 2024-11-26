<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section>
        <form action="login.php" method="post">
            <h2 id="login_title">LOGIN</h2>

            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php } ?>

            <div>
                <label>User Name</label>
                <input type="text" name="uname" placeholder="User Name" required><br>

                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required><br>
            </div>

            <div>
                <button type="submit">Login</button>
            </div>

            <a href="signup.php" class="ca">Create an account</a>
        </form>
    </section>
</body>
</html>
