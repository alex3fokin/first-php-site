<?php
function getMenu($pages, $active) {
    echo '<ul>';
    foreach ($pages as $page => $pageInfo) {
        if ($page === $active) {
            echo '<li class="fh5co-active"><a href="' . $pageInfo['href'] . '"><span>' . $pageInfo['name'] . '</span></a></li>';
        } else {
            echo '<li><a href="' . $pageInfo['href'] . '"><span>' . $pageInfo['name'] . '</span></a></li>';
        }
    }
    echo '</ul>';
}

function getSocialLinksMenu($links, $menuClass) {
    echo '<ul class="' . $menuClass . '">';
    foreach ($links as $link) {
        echo '<li><a href="' . $link['href'] . '"><i class="' . $link['iconClass'] . '"></i> <span>' . $link['label'] . '</span></a></li>';
    }
}

function isLoginExists($users, $newLogin) {
    foreach ($users as $user) {
        if (strcasecmp($user[0], $newLogin) === 0) {
            return true;
        }
    }
    return false;
}

function isPasswordsEqual($users, $login, $pass) {
    foreach($users as $user) {
        if($user[0] === $login) {
            if(password_verify($pass, $user[1])) {
                return true;
            } else {
                return false;
            }     
        }
    }
}