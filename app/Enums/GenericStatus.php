<?php

namespace App\Enums;

enum GenericStatus: string
{
    case ENABLED = 'enabled';
    case DISABLED = 'disabled';

    public static function enabled(): string
    {
        return self::ENABLED->value;
    }

    public static function disabled(): string
    {
        return self::DISABLED->value;
    }
}
