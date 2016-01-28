<?php
function ShowNumbers($result)
{
    echo"
   <p class='text-muted'>Знайдено кількість результатів: $result </p>
   ";
}
function ShowEmpty($text)
{
    echo"
    <P class='text-warning'>За пошуком \"<strong>$text</strong>\" нічого не знайдено</P>
    ";
}