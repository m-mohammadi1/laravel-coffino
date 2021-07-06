<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketMessages extends Model
{
    use HasFactory;

    protected $fillable = [
        'message', 'for', 'ticket_id'
    ];

    public function ticket()
    {
        $this->belongsTo(Ticket::class);
    }
}
