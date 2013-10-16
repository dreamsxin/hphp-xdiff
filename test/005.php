<?php 
xdiff_file_diff_binary(__DIR__ . '/file.1', __DIR__ . '/file.2', __DIR__ . '/file.bd');
$a = file_get_contents(__DIR__ . '/file.bd');
$b = file_get_contents(__DIR__ . '/file.bdiff');
echo strcmp($a, $b);
unlink(__DIR__ . '/file.bd');
?>