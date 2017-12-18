<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
$admin = unserialize(file_get_contents($adminFile));
$login = filter_input(INPUT_POST, 'login');
$pass = filter_input(INPUT_POST, 'pass');
$loginInfo = '';
if(file_exists($usersFile)) {
    $users = unserialize(file_get_contents($usersFile));
    if(!isLoginExists($users, $login) && $login !== $admin[0]) {
        $loginInfo = 'There is no such a user.';
    } else if(!password_verify($pass, $admin[1]) && !isPasswordsEqual($users, $login, $pass)) {
        $loginInfo = 'Incorrect password.';
    } else {
        $_SESSION['login'] = $login;
        header('Location: adminPanel.php');
    }    
} else {
    if($login !== $admin[0] || !password_verify($pass, $admin[1])) {
        $loginInfo = 'Incorrect password or login.';
    } else {
        file_put_contents($usersFile, '');
        header("Location: changePassword.php");
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log in</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Log in</h3>
                        </div>
                        <div class="panel-body">
                            <?php if($loginInfo !== ''): ?>
                            <p class="alert alert-danger"><?= $loginInfo; ?></p>
                            <?php endif; ?>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="login">Login</label>
                                    <input type="text" name="login" id="login" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" name="pass" id="pass" class="form-control">
                                </div>
                                <input type="submit" value="Log in" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
