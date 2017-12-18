<?php
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['img'] = filter_input(INPUT_POST, 'img');
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['alt'] = filter_input(INPUT_POST, 'alt');
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['h2'] = filter_input(INPUT_POST, 'h2');
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['p'] = filter_input(INPUT_POST, 'p');
$ul = $_POST['ul'];
foreach($pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['ul'] as $i => $li){
   $pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['ul'][$i] = $ul[$i];
}