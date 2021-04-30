<?php

function shamsi($time)
{
    $result = explode(' ', $time);
    list($year, $mon, $day) = explode('-', $result[0]);
    list($hour, $min, $sec) = explode(':', $result[1]);
    return jdate('Y-m-d H:i:s', time());
}

shamsi('2021-03-09 15:32:17');