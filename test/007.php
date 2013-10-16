<?php
xdiff_file_patch(__DIR__ . '/file.1', __DIR__ . '/file_test.diff', __DIR__ . '/file.p');
$a = file_get_contents(__DIR__ . '/file.2');
$b = file_get_contents(__DIR__ . '/file.p');
var_dump(strcmp($a, $b));
unlink(__DIR__ . '/file.p');
?>