<?php 
xdiff_file_patch_binary(__DIR__ . '/file.1', __DIR__ . '/file.bdiff', __DIR__ . '/file.p');
$a = file_get_contents(__DIR__ . '/file.2');
$b = file_get_contents(__DIR__ . '/file.p');
echo strcmp($a, $b);
unlink(__DIR__ . '/file.p');
?>