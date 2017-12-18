<?php
session_start();
$editParam = 'edit';
$root = '/';
$adminFile = 'admin.txt';
$pagesFile = 'pages.txt';
$usersFile = 'users.txt';
$loginPattern = '/^[a-zA-Z0-9_-]{5,16}$/';
$availableTypes = array('image/jpeg', 'image/png', 'image/gif', 'image/jpg');
$maxUploadPhotoSize = 3 * 1024 * 1024;
$photoUploadDir = 'images';
$contentTypes = array('headerBlock', 'textImageBlock', 'parallaxBlock', 'servicesBlock', 'textBlock', 'staffBlock', 'textListImageBlock', 'imageTextListBlock', 'contactsFormBlock', 'galleryBlock');
$socialLinks = array(
    array('href' => '#','iconClass' => 'icon-twitter','label' => 'Twitter'),
    array('href' => '#','iconClass' =>  'icon-facebook','label' =>  'Facebook'),
    array('href' => '#','iconClass' =>  'icon-instagram','label' =>  'Instagram'),
    array('href' => '#','iconClass' =>  'icon-google','label' =>  'Google Plus'),
);