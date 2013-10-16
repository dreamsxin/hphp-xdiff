<?php 
$a = file_get_contents(__DIR__ . '/file.1');
$b = file_get_contents(__DIR__ . '/file.2');
echo xdiff_string_diff($a, $b, 1);
?>