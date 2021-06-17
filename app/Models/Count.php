<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    use HasFactory;

    const MAX_ROWS = 15;

    protected $fillable = ['gift_count', 'service_count'];


    public function services()
    {
        return $this->belongsToMany(Service::class);
    }


    public static function getDatabaseRowsCount()
    {
        try {
            $counts = static::all();
            return $counts->count();

        } catch (\Exception $e) {
            return 0;

        }
    }

    public static function canCreateMore()
    {
        return static::getDatabaseRowsCount() < static::MAX_ROWS;
    }

}
