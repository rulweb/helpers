<?php


use Carbon\Carbon;

if (!function_exists('dateFormat')) {
    function dateFormat($format, $date)
    {
        if ($date === false) {
            $date = time();
        }
        if ($date instanceof Carbon) {
            $date = $date->getTimestamp();
        }
        if ($date instanceof Carbon) {
            $date = $date->getTimestamp();
        }
        if ($format === '') {
            $format = '%e %bg %Y г.';
        }

        $months = explode("|", '|января|февраля|марта|апреля|мая|июня|июля|августа|сентября|октября|ноября|декабря');
        $format = preg_replace("~\%bg~", $months[date('n', $date)], $format);

        return strftime($format, $date);
    }
}

if (!function_exists('milliseconds')) {
    /**
     * @return int
     */
    function milliseconds()
    {
        $mt = explode(' ', microtime());

        return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
    }
}
