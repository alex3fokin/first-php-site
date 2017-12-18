<?php
$p = $_POST['p'];
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['h2'] = filter_input(INPUT_POST, 'h2');
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['p'][0] = $p[0];
foreach($pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['p'][1] as $i => $item) {
    $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['p'][1][$i] = $p[1][$i];
}