<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketMessages extends Model
{
    use HasFactory;

    const FOR_USER = [
        'asked' => 1,
        'responded' => 2,
    ];

    protected $fillable = [
        'message', 'for', 'ticket_id'
    ];

    public function ticket()
    {
        $this->belongsTo(Ticket::class);
    }

    public function isMessageForAskedUser()
    {
        return $this->attributes['for'] == self::FOR_USER['asked'] ? true : false;
    }
}
