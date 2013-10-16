<?php 
xdiff_file_diff(__DIR__ . '/file.1', __DIR__ . '/file.2', __DIR__ . '/file.d', 1);
readfile(__DIR__ . '/file.d');
unlink(__DIR__ . '/file.d');
?>