<?php

function show_code($path_file)
{
    $handle = fopen($path_file, 'r');
    $content_file = fread($handle, filesize($path_file));

    return highlight_string($content_file);
}
