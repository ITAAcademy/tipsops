<?php
function sip($in)  // this function
{
    return "unhex('".bin2hex($in)."')";
}