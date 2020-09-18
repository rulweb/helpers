<?php


use Illuminate\Support\Str;

function getIntOfStr($str)
{
    $integers = Str::of($str)
        // выдергиваем все цифры
        ->matchAll('/[0-9]+/')
        // преобразовываем в строку
        ->implode('');

    // удаляем все нули слева
    return (string) Str::of($integers)->ltrim('0');
}
