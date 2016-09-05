<?php

namespace L5Starter\Core\Support;

use DateTime;

class DateFormatter
{
    /**
     * Returns an array of date format options.
     *
     * @return array
     */
    public static function formats()
    {
        return [
            'm/d/Y' => [
                'setting'    => 'm/d/Y',
                'datepicker' => 'mm/dd/yyyy',
            ],
            'm-d-Y' => [
                'setting'    => 'm-d-Y',
                'datepicker' => 'mm-dd-yyyy',
            ],
            'm.d.Y' => [
                'setting'    => 'm.d.Y',
                'datepicker' => 'mm.dd.yyyy',
            ],
            'Y/m/d' => [
                'setting'    => 'Y/m/d',
                'datepicker' => 'yyyy/mm/dd',
            ],
            'Y-m-d' => [
                'setting'    => 'Y-m-d',
                'datepicker' => 'yyyy-mm-dd',
            ],
            'Y.m.d' => [
                'setting'    => 'Y.m.d',
                'datepicker' => 'yyyy.mm.dd',
            ],
            'd/m/Y' => [
                'setting'    => 'd/m/Y',
                'datepicker' => 'dd/mm/yyyy',
            ],
            'd-m-Y' => [
                'setting'    => 'd-m-Y',
                'datepicker' => 'dd-mm-yyyy',
            ],
            'd.m.Y' => [
                'setting'    => 'd.m.Y',
                'datepicker' => 'dd.mm.yyyy',
            ],
        ];
    }

    /**
     * Returns a flattened version of the format() method array to display as dropdown options.
     *
     * @return array
     */
    public static function dropdownArray()
    {
        $formats = self::formats();

        $return = [];

        foreach ($formats as $format) {
            $return[$format['setting']] = $format['setting'];
        }

        return $return;
    }

    /**
     * Converts a stored date to the user formatted date.
     *
     * @param date $date        The yyyy-mm-dd standardized date
     * @param bool $includeTime Whether or not to include the time
     *
     * @return date The user formatted date
     */
    public static function format($date = null, $includeTime = false)
    {
        $date = new DateTime($date);

        if (!$includeTime) {
            return $date->format(config('settings.dateFormat'));
        }

        return $date->format(config('settings.dateFormat').' h:i:s A');
    }

    /**
     * Converts a user submitted date back to standard yyyy-mm-dd format.
     *
     * @param date $userDate The user submitted date
     *
     * @return date The yyyy-mm-dd standardized date
     */
    public static function unformat($userDate = null)
    {
        if ($userDate) {
            $date = DateTime::createFromFormat(config('settings.dateFormat'), $userDate);

            return $date->format('Y-m-d');
        }
    }

    /**
     * Returns the format required to initialize the datepicker.
     *
     * @return string
     */
    public static function getDatepickerFormat()
    {
        $formats = self::formats();

        return $formats[config('settings.dateFormat')]['datepicker'];
    }
}
