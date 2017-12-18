<?php
if(filter_input(INPUT_POST, 'addImg')) {
    $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][] = array(
        'href' => filter_input(INPUT_POST, 'href'),
        'alt' => filter_input(INPUT_POST, 'alt'),
    );
}
if(filter_input(INPUT_POST, 'deleteImg')) {
    unset($pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][filter_input(INPUT_POST, 'imgIndextoDelete')]);
}