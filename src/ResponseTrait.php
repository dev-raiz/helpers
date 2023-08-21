<?php

namespace vickmeirasemijoias\app\helpers;

trait ResponseTrait
{
    public function send(array $body, int $httpCode = 200): void
    {
        http_response_code($httpCode);
        echo json_encode($body);
        exit;
    }
}
