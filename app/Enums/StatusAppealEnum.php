<?php

namespace App\Enums;

enum StatusAppealEnum: string
{
    case COMPLETED = 'завершена';
    case PENDING  = 'в ожидании';
    case REJECTED = 'отклонена';
    public static function translate()
    {
        return [
            self::COMPLETED,
            self::PENDING ,
            self::REJECTED
        ];
    }

}
