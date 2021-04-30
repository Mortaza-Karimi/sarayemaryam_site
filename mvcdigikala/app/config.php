<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '../tools/jdf.php'; // فراخوانی فایل شمسی کردن تاریخ
const AddressMyWebsite = 'http://localhost/mvcdigikala/';

if (!isset($_SESSION)) {
    // چک میشود اگر سشن در پروژه ما استارت نشده بود سشن را استارت میکند
    session_start();
}

ob_start();  // حل مشکل عدم هدر کردن در مواقعی که سشن را بررسی میکنیم

function security($input)
{
    return htmlentities($input);
}

function trim_url($url)
{
    return trim($url);
}

function hashpassword($password)
{
    $salt = 'zicco_ir_!';
    return crypt($password, $salt);
}


function random_token()
{
    return md5(uniqid(rand()));
}

function shamsi($time)
{
    $result = explode(' ', $time);
    list($year, $mon, $day) = explode('-', $result[0]);
    list($hour, $min, $sec) = explode(':', $result[1]);
    return jdate('Y-m-d H:i:s', time());
}

?>