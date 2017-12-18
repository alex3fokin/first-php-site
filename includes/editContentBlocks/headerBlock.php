<?php
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['img'] = filter_input(INPUT_POST, 'img');
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['h1'] = filter_input(INPUT_POST, 'h1');
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['p'] = filter_input(INPUT_POST, 'p');