<?php

namespace devraiz;

trait ResponseTrait
{
    public function send(array $body, int $httpCode = 200): void
    {
        header("Content-type: application/json; charset=utf-8");
        http_response_code($httpCode);
        echo json_encode($body);
        exit;
    }
}
