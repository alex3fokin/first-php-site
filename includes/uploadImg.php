<?php
require_once 'config.php';
if (filter_input(INPUT_POST, 'upload')) {
    if (empty($_FILES['photo'])) {
        $msg = 'There is no file';
    } else {
        $photo = $_FILES['photo'];
        if ($photo['error'] !== UPLOAD_ERR_OK) {
            switch ($photo['error']) {
                case UPLOAD_ERR_INI_SIZE:
                    $msg = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $msg = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $msg = "The uploaded file was only partially uploaded";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $msg = "No file was uploaded";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $msg = "Missing a temporary folder";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    $msg = "Failed to write file to disk";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $msg = "File upload stopped by extension";
                    break;
                default:
                    $msg = "Unknown upload error";
                    break;
            }
        } else if (!in_array($photo['type'], $availableTypes)) {
            $msg = 'incorrect type of file';
        } else if ($photo['size'] > $maxUploadPhotoSize) {
            $msg = 'file size is too large';
        } else {
            $fileName = '../' . $photoUploadDir . DIRECTORY_SEPARATOR . $photo['name'];
            if (!move_uploaded_file($photo['tmp_name'], $fileName)) {
                $msg = 'move upload file fail';
            } else {
                $msg = true;
            }
        }
    }
    if ($msg === true) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '');
    } else {
        echo $msg . '<br><a href=' . $_SERVER['HTTP_REFERER'] . '>Go back</a>';
    }
}
if(filter_input(INPUT_POST, 'delete')) {
    unlink('../'.filter_input(INPUT_POST, 'imgName'));
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '');
}
