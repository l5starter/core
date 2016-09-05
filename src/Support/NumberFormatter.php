<?php

namespace L5Starter\Core\Support;

class NumberFormatter
{
    /**
     * Formats a number accordingly.
     *
     * @param float $number
     *
     * @return float
     */
    public static function format($number)
    {
        return number_format($number, 2, '.', ',');
    }

    /**
     * UnFormats a formatted number.
     *
     * @param float $number
     *
     * @return float
     */
    public static function unFormat($number)
    {
        $number = str_replace('.', 'D', $number);
        $number = str_replace(',', '', $number);
        $number = str_replace('D', '.', $number);

        return $number;
    }
}
