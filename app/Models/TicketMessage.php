<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketMessage extends Model
{
    use HasFactory;

    const FOR_USER = [
        'asked' => 1,
        'responded' => 2,
    ];

    protected $appends = ['time'];

    protected $fillable = [
        'message', 'for', 'ticket_id', 'user_id'
    ];

    public function ticket()
    {
        $this->belongsTo(Ticket::class);
    }

    public function isMessageForAskedUser()
    {
        return $this->attributes['for'] == self::FOR_USER['asked'] ? true : false;
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTimeAttribute()
    {
        $created_at = Carbon::parse($this->attributes['created_at']);
        return $created_at->diffForHumans();
    }

}
