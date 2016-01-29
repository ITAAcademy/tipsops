<?php
function ShowNumbers($result)
{
    echo"
   <p class='text-muted'>Знайдено кількість результатів: $result </p>
   ";
}
function ShowNoSearch($text)
{
    echo"
    <p class='text-warning'>За пошуком \"<strong>$text</strong>\" нічого не знайдено</p>
    ";
}
function ShowEmpty()
{
    echo"
        <p class='text-warning'>Поле пошуку не заповнене</p>
    ";
}