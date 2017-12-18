<?php
require_once 'includes/config.php';
$pass = filter_input(INPUT_POST, 'pass');
$confPass = filter_input(INPUT_POST, 'confPass');
$changePasswordInfo = '';
if(filter_input(INPUT_POST, 'change')) {
    if($pass !== $confPass) {
        $changePasswordInfo = 'Passwords are not equal.';
    } else if(strlen($pass) < 4) {
        $changePasswordInfo = 'Password is too short.';
    } else {
        $admin = unserialize(file_get_contents($adminFile));
        $admin[1] = password_hash($pass, PASSWORD_DEFAULT);
        file_put_contents($adminFile, serialize($admin));
        $_SESSION['login'] = $admin[0];
        header("Location: adminPanel.php");
    }    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Change password</title>
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
                            <h3 class="panel-title">Change password</h3>
                        </div>
                        <div class="panel-body">
                            <?php if($changePasswordInfo !== ''): ?>
                            <p class="alert alert-danger"><?= $changePasswordInfo; ?></p>
                            <?php endif; ?>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" name="pass" id="pass" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="confPass">Confirm password</label>
                                    <input type="password" name="confPass" id="confPass" class="form-control">
                                </div>
                                <input type="submit" name="change" value="Save" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

