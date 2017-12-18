<?php
require_once 'includes/functions.php';
require_once 'includes/config.php';
if(filter_input(INPUT_GET, $editParam)) {
    if(!$_SESSION['login']) {
        header('Location: login.php');
    }
}
$pages = unserialize(file_get_contents($pagesFile));
$currentPage = filter_input(INPUT_GET, 'page') ? filter_input(INPUT_GET, 'page') : 'home';
require_once 'parts/header.php';
if (filter_input(INPUT_GET, $editParam)) {
    require_once 'parts/editPage.php';
}
?>
<div id="fh5co-wrap">
    <?php
    require_once 'parts/topMenu.php';
    if (!empty($pages[$currentPage]['content'])) {
        foreach ($pages[$currentPage]['content'] as $contentType => $data) {
            $id = '';
            if (filter_input(INPUT_GET, $editParam)) {
                $id = $contentType;
            }
            if (strpos($contentType, '_') !== false) {
                $contentType = substr($contentType, 0, strpos($contentType, '_'));
            }
            require 'parts/contentBlocks/' . $contentType . '.php';
            if ($contentType === 'contactsFormBlock') {
                echo '<div id="map"></div>';
            }
        }
    }
    ?>
</div> <!-- END fh5co-wrap -->
<?php
require_once 'parts/footerInfo.php';

require_once 'parts/footer.php';
