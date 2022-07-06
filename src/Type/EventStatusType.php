<?php

namespace App\Type;

class EventStatusType
{

    const STATUS_PUBLIC = 'public';
    const STATUS_DRAFT = 'draft';

    public static function getAllTypes(): array
    {
        return [
            self::STATUS_PUBLIC,
            self::STATUS_DRAFT
        ];
    }

}