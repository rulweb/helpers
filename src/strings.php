<?php

use Illuminate\Support\Str;


/**
 * Пример:
 * plural(['Остался %d час', 'Осталось %d часа', 'Осталось %d часов'], 11)
 *
 * @param $endings
 * @param $number
 * @return string
 */
function plural($endings, $number) {
    $cases = [2, 0, 1, 1, 1, 2];
    $n = $number;
    return sprintf($endings[ ($n%100>4 && $n%100<20) ? 2 : $cases[min($n%10, 5)] ], $n);
}
