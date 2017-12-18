<?php
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['h2'] = filter_input(INPUT_POST, 'h2');
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['p'] = filter_input(INPUT_POST, 'p');
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['address'] = filter_input(INPUT_POST, 'address');
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['email'] = filter_input(INPUT_POST, 'email');
$pages[$currentPage]['content'][filter_input(INPUT_POST, 'contentBlock')]['phone'] = filter_input(INPUT_POST, 'phone');