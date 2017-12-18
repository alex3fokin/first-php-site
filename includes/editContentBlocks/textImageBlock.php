<?php
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['img'] = filter_input(INPUT_POST, 'img');
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['alt'] = filter_input(INPUT_POST, 'alt');
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['h2'] = filter_input(INPUT_POST, 'h2');
$p = $_POST['p'];
foreach($pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['p'] as $i => $item) {
    $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['p'][$i] = $p[$i];
}