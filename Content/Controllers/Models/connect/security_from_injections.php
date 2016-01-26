<?php
function sip($in)  // this function protected from sql injection
{
    return "unhex('".bin2hex($in)."')";
}