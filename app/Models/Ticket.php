<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;


    protected $fillable = [
        'title', 'body', 'status', 'category', 'asked_user_id', 'responded_user_id'
    ];

    public function asked_user()
    {
        return $this->belongsTo(User::class, 'asked_user_id');
    }

    public function responded_user()
    {
        return $this->belongsTo(User::class, 'responded_user_id');
    }

    public function messages()
    {
        return $this->hasMany(TicketMessage::class);
    }


}
