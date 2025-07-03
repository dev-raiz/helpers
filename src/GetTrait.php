<?php

namespace devraiz;

trait GetTrait
{
    public function dayMajorDateOfTheMonth($year, $month)
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

    public function differenceInDaysBetweenTwoDates($minorDate, $majorDate)
    {
        //Quebra a data menor
        $yearMinorDate  = substr($minorDate, 0, 4);
        $monthMinorDate = substr($minorDate, 5, 2);
        $dayMinorDate   = substr($minorDate, 8, 2);

        // Quebra a data maior
        $yearMajorDate  = substr($majorDate, 0, 4);
        $monthMajorDate = substr($majorDate, 5, 2);
        $dayMajorDate   = substr($majorDate, 8, 2);

        $dt1 = mktime(0, 0, 0, $monthMinorDate, $dayMinorDate, $yearMinorDate);
        $dt2 = mktime(0, 0, 0, $monthMajorDate, $dayMajorDate, $yearMajorDate);

        // Faz o calculo da diferenca em dias entre as duas datas
        // 24 horas * 60 Min * 60 seg = 86400
        $days = ($dt1 - $dt2) / 86400;

        // Pega a parte inteira da variavel $days
        $days  = floor($days);

        return $days;
    }
}
