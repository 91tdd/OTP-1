<?php

namespace OTP;

class Context
{
    public static $profiles = [
        'joey' => '91',
        'mei' => '99',
    ];

    public static function getPassword($key)
    {
        return static::$profiles[$key];
    }
}
