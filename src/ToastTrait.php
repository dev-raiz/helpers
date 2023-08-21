<?php

namespace devraiz;

trait ToastTrait
{
    public function showToast(array $data): void
    {
        $name    = 'alert-' . $data['result'];
        $message = $data['message'];

        $this->cookieDefine([
            'name'  => $name,
            'value' => $message,
            'path'  => '/'
        ]);
    }
}
