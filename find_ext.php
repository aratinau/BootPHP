<?php

function get_extension_by_str($str)
{
    return substr($str, -3);
}

function get_extension_by_str_second($str)
{
    return stristr($str, 'php');
}

function is_extension_is_php($str)
{
    $str_exploded = explode('.', $str);

    if (end($str_exploded) == 'php') {
        return true;
    }

    return false;
}
