<?php

namespace OTP;

class ProfileDao
{
    public function getPassword($account)
    {
        return Context::getPassword($account);
    }
}
