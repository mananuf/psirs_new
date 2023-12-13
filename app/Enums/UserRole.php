<?php

namespace App\Enums;

enum UserRole: int
{
    case ADMIN = 1;
    case SUBADMIN = 2;
    case DIRECTOR = 3;
    case STAFF = 4;

    public static function admin(): int
    {
        return self::ADMIN->value;
    }

    public static function subadmin(): int
    {
        return self::SUBADMIN->value;
    }

    public static function director(): int
    {
        return self::DIRECTOR->value;
    }

    public static function staff(): int
    {
        return self::STAFF->value;
    }
}
