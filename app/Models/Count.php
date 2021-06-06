<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    use HasFactory;

    protected $fillable = ['gift_count', 'service_count'];


    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
