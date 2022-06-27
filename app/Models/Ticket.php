<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public const PRIORITY_LOW = '1';
    public const PRIORITY_MEDIUM = '2';
    public const PRIORITY_HIGH = '3';
    public const AVAILABLE_PRIORITIES = [Ticket::PRIORITY_LOW, Ticket::PRIORITY_MEDIUM, Ticket::PRIORITY_HIGH];

    public const STATUS_TO_DO = 'to_do';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_DONE = 'done';
    public const AVAILABLE_STATUSES = [Ticket::STATUS_TO_DO, Ticket::STATUS_IN_PROGRESS, Ticket::STATUS_DONE];

    protected $fillable = [
        'title',
        'description',
        'location',
        'priority',
        'status',
        'time',
    ];


    /**
     * Get the User which is the author of the ticket.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id','id');
    }

    /**
     * Get the User which is the assignee of the ticket.
     */
    public function assignee()
    {
        return $this->belongsTo(User::class, 'assignee_id','id');
    }

    public static function getPriorities(): array
    {
        return Ticket::AVAILABLE_PRIORITIES;
    }

    public static function getStatuses(): array
    {
        return Ticket::AVAILABLE_STATUSES;
    }




}
