<?php 
$a = file_get_contents(__DIR__ . '/file.1');
$b = file_get_contents(__DIR__ . '/file.2');
$c = file_get_contents(__DIR__ . '/file.bdiff');
$d = xdiff_string_diff_binary($a, $b);
echo strcmp($c, $d);
?>