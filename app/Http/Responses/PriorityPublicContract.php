<?php

namespace App\Http\Responses;

use App\Models\Ticket;

class PriorityPublicContract
{
    public const PUBLIC_PRIORITY_LOW = 'Low';
    public const PUBLIC_PRIORITY_MEDIUM = 'Medium';
    public const PUBLIC_PRIORITY_HIGH = 'High';

    public const PUBLIC_FIELDS = [
        Ticket::PRIORITY_LOW => self::PUBLIC_PRIORITY_LOW,
        Ticket::PRIORITY_MEDIUM => self::PUBLIC_PRIORITY_MEDIUM,
        Ticket::PRIORITY_HIGH => self::PUBLIC_PRIORITY_HIGH,


    ];
}