<?php

namespace devraiz;

trait ResultTrait
{
    public function success(array $data): bool
    {
        return ($data['result'] === 'success');   
    }
}
