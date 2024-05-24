<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-css.css">
    <style>
        .error-message {
            background-color: #ffcccc;
            color: #cc0000;
            border: 1px solid #cc0000;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <form action="testLogin.php" method="post">
        <div class="main-login">
            <div class="left-login">
                <h1>Learn To Defeat <br> Your Friends</h1>
                <img src="assets/img/ojogo.svg"left-login-image alt="game">
            </div>
            <div class="right-login">
                <div class="card-login">
                    <h1>Sign in</h1>
                    <?php
                    session_start();
                    if(isset($_SESSION['error'])) {
                        echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
                        unset($_SESSION['error']);
                    }
                    ?>
                    <div class="textfield">
                        <label for="username">User</label>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="textfield">
                        <label for="passwords">Password</label>
                        <input type="password" name="passwords" placeholder="Password" required>
                    </div>
                    <input class="btn-login" type="submit" name="submit" value="Sign in">
                    <div class="register-link">
                        <p>Don't have an account? <a href="cadastro.php">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>


