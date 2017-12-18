<?php
$url = 'block_4';
$id = substr($url, strrpos($url, '_') + 1);
echo $id.'<br>'.$url;