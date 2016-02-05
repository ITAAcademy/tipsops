<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: 05.02.2016
 * Time: 18:28
 */
function SaveCookieWorld($world, $name)
{
   setcookie($name, $world, time()+3600*24, "/");
}
function DeleteCookieWorld($name)
{
    if(isset($_COOKIE[$name]))
    {
        setcookie($name, "", time()-3600, "/");
    }
}
function GetCookieWorld($name)
{
    if(isset($_COOKIE[$name]))
    {
        return $_COOKIE[$name];
    }
    return false;
}