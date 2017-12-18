<?php
$services['iconName'] = $_POST['iconName'];
$services['h3'] = $_POST['h3'];
$services['p'] = $_POST['p'];
foreach($pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')] as $i => $service) {
    $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][$i]['iconName'] = $services['iconName'][$i];
    $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][$i]['h3'] = $services['h3'][$i];
    $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][$i]['p'] = $services['p'][$i];
}