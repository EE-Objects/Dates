<?php

namespace EeObjects\Services;

class DateService
{
    /**
     * Formats the given date using EE's internal date formatting
     * @param $date
     * @return mixed
     */
    public function format($date)
    {
        if (is_string($date)) {
            $date = strtotime($date);
        }

        $format = ee()->session->userdata('date_format', ee()->config->item('date_format'));

        return ee()->localize->format_date($format, $date);
    }
}
