<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
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
}
