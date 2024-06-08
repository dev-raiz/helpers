<?php

namespace devraiz;

trait ValidateTrait
{
    public function validateThirteenCharactersToPhoneNumber(string $phone): string
    {
        $countryCode = (int) substr($phone, 0, 2); // Código do país

        $newPhone = $phone;

        if (in_array($countryCode, array(55))) {
            $phoneLength = strlen($phone);

            if ($phoneLength < 13) {
                $part1 = substr($phone, 0, 4);
                $part2 = substr($phone, 4, $phoneLength);

                $newPhone = $part1 . '9' . $part2;
            }
        }
        
        return $newPhone;
    }
}
