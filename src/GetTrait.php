<?php

namespace devraiz;

trait GetTrait
{
    public function lastDayOfTheMonth($year, $month)
    {
        if (((fmod($year, 4) == 0) and (fmod($year, 100) != 0)) or (fmod($year, 400) == 0)) {
            $februaryDays = 29;
        } else {
            $februaryDays = 28;
        }

        switch ($month) {
            case 01:
                return 31;
                break;
            case 02:
                return $februaryDays;
                break;
            case 03:
                return 31;
                break;
            case 04:
                return 30;
                break;
            case 05:
                return 31;
                break;
            case 06:
                return 30;
                break;
            case 07:
                return 31;
                break;
            case 8:
                return 31;
                break;
            case 9:
                return 30;
                break;
            case 10:
                return 31;
                break;
            case 11:
                return 30;
                break;
            case 12:
                return 31;
                break;
        }
    }
}
