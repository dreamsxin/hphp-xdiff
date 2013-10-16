<?php 
$a = file_get_contents(__DIR__ . '/file.1');
$b = file_get_contents(__DIR__ . '/file.bdiff');
$c = xdiff_string_patch_binary($a, $b);
$d = file_get_contents(__DIR__ . '/file.2');
echo strcmp($c, $d);
?>