<?php

namespace devraiz;

trait CookieTrait
{
    public function cookieDefine(array $params): void
    {
        $expires = (isset($params['expires']) === true) ? $params['expires'] : 0;
        $path    = (isset($params['path'])    === true) ? $params['path']    : '/';
        $domain  = (isset($params['domain'])  === true) ? $params['domain']    : '';
        $secure   = (isset($params['secure'])    === true) ? $params['secure']    : false;
        $httpOnly = (isset($params['http_only']) === true) ? $params['http_only'] : false;

        setcookie($params['name'], $params['value'], $expires, $path, $domain, $secure, $httpOnly);
    }

    public function cookieDestroy(string $name): void
    {
        if (isset($_COOKIE[$name]) === true) {
            unset($_COOKIE[$name]);
            setcookie($name, '', -1, '/');
        }
    }
}
