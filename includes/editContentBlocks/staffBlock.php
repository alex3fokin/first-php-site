<?php
$staff['img'] = $_POST['img'];
$staff['alt'] = $_POST['alt'];
$staff['name'] = $_POST['name'];
$staff['position'] = $_POST['position'];
$staff['desc'] = $_POST['desc'];
$staff['href'] = $_POST['href'];
$staff['iconName'] = $_POST['iconName'];
foreach($pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')] as $i => $person) {
    $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][$i]['img'] = $staff['img'][$i];
    $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][$i]['alt'] = $staff['alt'][$i];
    $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][$i]['name'] = $staff['name'][$i];
    $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][$i]['position'] = $staff['position'][$i];
    $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][$i]['desc'] = $staff['desc'][$i];
    foreach($pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][$i]['socialLinks'] as $j => $link) {
        $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][$i]['socialLinks'][$j]['href'] = $staff['href'][$i][$j];
        $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')][$i]['socialLinks'][$j]['iconName'] = $staff['iconName'][$i][$j];
    }
}