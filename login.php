<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>
<body>
<div id="container">
        <div class="form-wrap">
            <h1>Login</h1>
            <p>Log in here</p>
            <form action="loginaction.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="loginname" id="username" value="<?php if (isset($_POST['loginname'])) {
                    echo $_POST['loginname'];
                } ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="loginpassword" id="password" value="<?php if (isset($_POST['loginpassword'])) {
                    echo $_POST['loginpassword'];
                } ?>">
                </div>
                <button type="submit" value="submit" class="btn" name="loginsubmit">Submit</button>
                <h4>Don't have an account? </h4>
                <a href="registration.php">Register here</a>
            </form>
        </div>
</div>
</body>
</html>
