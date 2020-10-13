<?php
require('find_ext.php');

const DEMO_PATH = "demo";

$content_folder = scandir(DEMO_PATH);

$content_clean = array();
foreach ($content_folder as $file)
{
    /*
     * Solution 1
    if ($file != '.' && $file != '..' && get_extension_by_str($file) == 'php') {
        $content_clean[] = $file;
    }
     */
    /* Solution 2
    if ($file != '.' && $file != '..' && get_extension_by_str_second($file) == 'php') {
        $content_clean[] = $file;
    }
     */
    // Solution 3
    if ($file != '.' && $file != '..' && is_extension_is_php($file)) {
        $content_clean[] = $file;
    }
}

var_dump($content_clean);
