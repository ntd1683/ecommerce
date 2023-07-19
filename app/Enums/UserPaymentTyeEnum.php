<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserPaymentTyeEnum extends Enum
{
    public const BANK = 0;
    public const EWALLET = 1;

    public static function getArrayView(): array
    {
        return [
            'Bank' => self::BANK,
            'E-Wallet' => self::EWALLET,
        ];
    }

    public static function getKeyByValue($value): string
    {
        return array_search($value, self::getArrayView(), true);
    }
}
