<?php

namespace App\Enum;

enum StatusEnum: int
{
    case Active = 1;
    case Inactive = 0;


    public function label(): string
    {
        return match ($this)
        {
            self::Active => __('Active'),
            self::Inactive => __('Inactive'),
        };
    }
}
