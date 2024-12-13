<?php

namespace devraiz;

trait MaskTrait
{
    private function apply(string $string, string $mask)
    {
        $maskared = '';
        $k = 0;

        for ($i = 0; $i <= strlen($mask) - 1; $i++) {
            if ($mask[$i] == '#') {
                if (isset($string[$k])) $maskared .= $string[$k++];
            } else {
                if (isset($mask[$i])) {
                    if ($mask[$i] == $string[$k]) {
                        $k++;
                    }
                    $maskared .= $mask[$i];
                }
            }
        }

        return $maskared;
    }

    public function maskCnpj(string $cnpj): string
    {
        return $this->apply($cnpj, '##.###.###/####-##');
    }

    public function maskCpf(string $cpf): string
    {
        return $this->apply($cpf, '###.###.###-##');
    }

    public function maskWhatsapp(string $whatsapp): string
    {
        return $this->apply($whatsapp, '+55 (##) #####-####');
    }

    public function maskDateDB(?string $date): string
    {
        if (empty($date) === false) {
            $day   = substr($date, 0, 2);
            $month = substr($date, 3, 2);
            $year  = substr($date, 6, 4);

            return $year . '-' . $month . '-' . $day;
        }

        return '';
    }

    public function maskDate(?string $date): string
    {
        if (empty($date) === false) {
            $year  = substr($date, 0, 4);
            $month = substr($date, 5, 2);
            $day   = substr($date, 8, 2);

            return $day . '/' . $month . '/' . $year;
        }

        return '';
    }

    public function maskTime(?string $time): string
    {
        if (empty($time) === false) {
            if (strlen($time) == 4) {
                return substr($time, 0, 2) . "h" . substr($time, 2, 2);
            } else {
                return substr($time, 0, 2) . "h" . substr($time, 3, 2);
            }
        }

        return '';
    }

    public function maskMoney(?string $value): string
    {
        $valueConverted = '0,00';

        if (empty($value) === false) {
            $valueConverted = number_format($value, 2, ',', '.');
        }

        return $valueConverted;
    }

    public function formatBytes($bytes, $precision = 2)
    {
        $base = log($bytes, 1024);
        $suffixes = array('', 'KB', 'MB', 'GB', 'TB');   
    
        return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
    }
}