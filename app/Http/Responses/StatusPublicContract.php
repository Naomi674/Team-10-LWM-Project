<?php

namespace App\Http\Responses;

use App\Models\Ticket;

class StatusPublicContract
{
    public const PUBLIC_TO_DO = 'To Do';
    public const PUBLIC_IN_PROGRESS = 'In Progress';
    public const PUBLIC_DONE = 'Done';

    public const PUBLIC_FIELD = [
        Ticket::STATUS_TO_DO => self::PUBLIC_TO_DO,
        Ticket::STATUS_IN_PROGRESS => self::PUBLIC_IN_PROGRESS,
        Ticket::STATUS_DONE => self::PUBLIC_DONE,


    ];
}