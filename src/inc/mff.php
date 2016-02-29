<?php
/*
    MarfFrameWork PHP 0.2
    This is a work in progress project.
    "I WILL TAKE OVER THE WORLD"
*/

$mjversie = "0.1";
$mjdate = "8-2-2016";
$mjvertype = "pre-Alpha";

$path = $_SERVER['PATH_INFO'];
$req_url = $_SERVER['REQUEST_URI'];
$filename = $_SERVER['SCRIPT_FILENAME'];
$host = $_SERVER['REMOTE_HOST'];
$ip = getUserIP();
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

function errorHandler()
{
    //not yet
}

function RunJS($code)
{
    echo("<script>" . $code . "</script>");
}

function MffLog($text)
{
  echo "<script>log(\"" . $text ."\");</script>";
}

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
