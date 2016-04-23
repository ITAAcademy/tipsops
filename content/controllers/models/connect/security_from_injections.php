<?php
/**
 * User: Ivan Pirus
 * Group: B14
 * Date: January 2016
 */
function sip($in)  // this function protected from sql injection
{
    return "unhex('".bin2hex($in)."')";
}
function ToInt($in)
{
    return (int)$in;
}