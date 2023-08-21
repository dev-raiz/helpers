<?php

namespace devraiz;

trait StringTrait
{
    public function generateString(int $lenght = 7): string
    {
        $chars  = '';
        $chars .= 'abcdefghijklmnopqrstuvwxyz';
        $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $len    = strlen($chars);
        $string = '';

        for ($n = 1; $n <= $lenght; $n++) {
            $rand = mt_rand(1, $len);
            $string .= $chars[$rand - 1];
        }

        return $string;
    }
}
