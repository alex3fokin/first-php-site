<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
if(filter_input(INPUT_POST, 'logout')) {
    unset($_SESSION['login']);
    session_destroy();
}
if(!$_SESSION['login']) {
    die("<script>location.href = 'login.php'</script>");
}
$pages = unserialize(file_get_contents($pagesFile));
$users = unserialize(file_get_contents($usersFile));
$addUserInfo = '';
if (filter_input(INPUT_POST, 'deletePage')) {
    $deletePage = filter_input(INPUT_POST, 'deletePage');
    if ($deletePage !== 'home') {
        unset($pages[$deletePage]);
        file_put_contents($pagesFile, serialize($pages));
        header("Location: " . $_SERVER['PHP_SELF'] . "");
        exit;
    }
}
if (filter_input(INPUT_POST, 'createNewPage')) {
    $newPage = array(
        'name' => filter_input(INPUT_POST, 'nameMenu'),
        'href' => 'index.php?page=' . filter_input(INPUT_POST, 'nameKey'),
        'title' => filter_input(INPUT_POST, 'title'),
        'content' => array(),
    );
    $pages[filter_input(INPUT_POST, 'nameKey')] = $newPage;
    file_put_contents($pagesFile, serialize($pages));
    header("Location: " . $_SERVER['PHP_SELF'] . "");
    exit;
}
if(filter_input(INPUT_POST, 'deleteUser')) {
    unset($users[filter_input(INPUT_POST, 'deleteUser')]);
    file_put_contents($usersFile, serialize($users));
}
if(filter_input(INPUT_POST, 'addNewUser')) {
    $login = filter_input(INPUT_POST, 'login');
    $pass = filter_input(INPUT_POST, 'pass');
    $confPass = filter_input(INPUT_POST, 'confPass');
    if (empty($pass) || empty($confPass)) {
        $addUserInfo = 'There is no password or password wasn\'t confirmed.';
    } else if ($pass !== $confPass) {
        $addUserInfo = 'Passwords are not equal.';
    } else if (!preg_match($loginPattern, $login)) {
        $addUserInfo = 'Login too short\too long or contain forbidden characters.';
    } else if (isLoginExists($users, $login)) {
        $addUserInfo = 'Such a login already exists.';
    } else {
        $users[] = array($login, password_hash($pass, PASSWORD_DEFAULT));
        file_put_contents($usersFile, serialize($users));
        $addUserInfo = true;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin panel</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            i {
                font-size: 15px;
                color: #000;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="page-header">
                <h1>Admin panel</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <ul class="nav nav-pills">
                                <li role="presentation" class="<?php if(filter_input(INPUT_GET, 'page') !== 'users') echo 'active'; ?>"><a href="adminPanel.php">Pages</a></li>
                                <li role="presentation" class="<?php if(filter_input(INPUT_GET, 'page') === 'users') echo 'active'; ?>"><a href="adminPanel.php?page=users">Users</a></li>
                                <li>
                                    <form method="POST">
                                        <input type="submit" name="logout" value="Log out" class="btn btn-default">
                                    </form>
                                </li>
                            </ul> 
                            
                        </div>
                        <div class="panel-body">
                            <?php if(filter_input(INPUT_GET, 'page') !== 'users') {
                                require_once 'parts/adminPanel/pages.php';
                            } else { 
                                require_once 'parts/adminPanel/users.php';
                            }?>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>