<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasedService extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'service_count',
        'user_id',
        'status',
    ];


    const STATUS_REJECTED = 0;
    const STATUS_PENDING = 1;
    const STATUS_PROGRESS = 2;
    const STATUS_COMPLETED = 3;

    const STATUS = [
        'rejected' => 0,
        'pending' => 1,
        'progress' => 2,
        'completed' => 3
    ];


    public function service()
    {
        return $this->hasOne(Service::class, 'id');
    }
}
