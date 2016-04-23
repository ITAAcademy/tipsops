<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: 05.02.2016
 * Time: 18:28
 */
function SaveCookieWord($word, $name)
{
   setcookie($name, $word, time()+3600*24, "/");
}
function DeleteCookieWord($name)
{
    if(isset($_COOKIE[$name]))
    {
        setcookie($name, "", time()-3600, "/");
    }
}
function GetCookieWord($name)
{
    if(isset($_COOKIE[$name]))
    {
        return $_COOKIE[$name];
    }
    return "";
}
function UpdateCookieWord($word, $name)
{
	DeleteCookieWord($name);
	SaveCookieWord($word, $name);
}